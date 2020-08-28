<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Category;
use App\Proposal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;

class JobsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $user = User::find(Auth::user()->id);

        if ($user->hasRole('client')) {
            $jobs = Job::with('proposals')->where('employer_id', auth()->id())->get();
        } else {
            $jobs = Job::whereNull('candidate_id')->get();
        }

        return view('clients.myprojects', compact('jobs'));
    }

    public function showProjectForm(){

        $categories = Category::all();

        return view('post.post-project', compact('categories'));
    }

    public function create()
    {
        return route('post-project');
    }

    public function store(StoreJobRequest $request)
    {

        $data = $request->all();
        $data['employer_id'] = auth()->id();
        $job = Job::create($data);

        foreach ($request->input('attachments', []) as $file) {
            $job->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }

        return redirect()->route('jobs.index');
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

        return redirect()->route('jobs.index');
    }

    public function show(Job $job)
    {

        if ($job->employer_id != auth()->id()) {
            abort(404);
        }

        $job->load(['employer', 'candidate', 'proposals']);

        return view('clients.myprojectdetails', compact('job'));
    }

    public function destroy(Job $job)
    {

        if ($job->employer_id != auth()->id()) {
            abort(404);
        }

        $job->delete();

        return back();
    }
}
