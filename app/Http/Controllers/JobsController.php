<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Topic;
use App\Category;
use App\Proposal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Http\Requests\StorePaymentRequest;
use Stripe\SetupIntent;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use PhpParser\Node\Expr\FuncCall;

class JobsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $user = User::find(Auth::user()->id);

        if ($user->hasRole('client')) {
            $jobs = Job::with('proposals')
                ->where('employer_id', auth()->id())
                ->orderByDesc('created_at')
                ->paginate(10);
        } else {
            $jobs = Job::whereNull('candidate_id')->get();
        }

        return view('clients.myprojects', compact('jobs'));
    }

    public function details($id)
    {
        $job = Job::find($id);
        $category = Job::with('category');
        $Data = [
            'job' => $job,
            'category' => $category,
        ];
        return view('jobs.job-details')->with($Data);
    }

    public function create()
    {
        $topics = Topic::all();
        $categories = Category::all();

        return view('post.post-project', compact(['categories', 'topics']));
    }

    public function store(StoreJobRequest $request)
    {
        $data = $request->all();
        $data['employer_id'] = auth()->id();

        $job = Job::create($data);
        $job->categories()->sync($request->input('categories', []));

        foreach ($request->input('attachments', []) as $file) {
            $job->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }

        return redirect()->route('jobs.index')->with('success', 'Your Project has been posted successfully!');
    }

    public function edit(Job $job)
    {
        if ($job->employer_id != auth()->id()) {
            abort(404);
        }

        $candidates = User::whereHas('roles', function ($query) {
            return $query->where('id', 3);
        })->get()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $job->load('candidate');

        return redirect()->route('jobs.index', compact('candidates', 'job'));
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        if ($job->employer_id != auth()->id()) {
            abort(404);
        }

        $job->update($request->all());

        if (isset($request->candidate_id)) {
            Proposal::where('job_id', $job->id)->where('candidate_id', $request->candidate_id)
                ->update(['approved_at' => now()]);
            Proposal::where('job_id', $job->id)->where('candidate_id', '!=', $request->candidate_id)
                ->update(['rejected_at' => now()]);
        }

        if (count($job->attachments) > 0) {
            foreach ($job->attachments as $media) {
                if (!in_array($media->file_name, $request->input('attachments', []))) {
                    $media->delete();
                }
            }
        }

        $media = $job->attachments->pluck('file_name')->toArray();

        foreach ($request->input('attachments', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $job->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
            }
        }
        
        $validatedData = $request->validated();

        if ($job->employer_id == auth()->id()) {
            $budget = $request->validate([
                'budget' => 'required', 'numeric'
            ]);

            $validatedData = array_merge($validatedData, $budget);
        }

        $job->update($validatedData);

        return redirect()->route('jobs.index');
    }

    public function show(Job $job)
    {
        if ($job->employer_id != auth()->id()) {
            abort(404);
        }

        $job->load(['employer', 'candidate', 'proposals', 'user']);

        $intent = auth()->user()->createSetupIntent();

        return view('clients.myprojectdetails', compact('job', 'intent'));
    }

    public function destroy(Job $job)
    {
        if ($job->employer_id != auth()->id()) {
            abort(404);
        }

        $job->delete();

        return redirect()->route('jobs.index');
    }

    public function pay(StorePaymentRequest $request, Job $job)
    {
        $job->load('employer');
        $paymentMethod = $request->input('payment_method');

        try {
            $job->employer->createOrGetStripeCustomer();
            $job->employer->updateDefaultPaymentMethod($paymentMethod);
            $job->employer->charge($job->budget * 100, $paymentMethod);

            $job->update([
                'paid_at' => now()
            ]);
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

        return redirect()->route('payment-success')->with('success', 'The payment transaction is successful!');
    }

    public function paymentSuccess()
    {
        if (! session()->has('success')) {
            return redirect()->route('jobs.index');
        }

        return view('post.success');
    }
}
