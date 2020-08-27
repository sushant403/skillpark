<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreProposalRequest;
use App\Http\Requests\UpdateProposalRequest;
use App\Proposal;

class ProposalsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $proposals = Proposal::where('candidate_id', auth()->id())->get();

        return view('freelancers.myproposals', compact('proposals'));
    }

    public function create()
    {
        return view('post.post-proposal');
    }

    public function store(StoreProposalRequest $request)
    {
        $proposal = Proposal::create($request->all() + ['candidate_id' => auth()->id()]);

        foreach ($request->input('attachments', []) as $file) {
            $proposal->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }
        return view('freelancers.myproposals');
    }

    public function edit(Proposal $proposal)
    {
        return view('proposals.edit', compact('proposal'));
    }

    public function update(UpdateProposalRequest $request, Proposal $proposal)
    {
        $proposal->update($request->all());

        if (count($proposal->attachments) > 0) {
            foreach ($proposal->attachments as $media) {
                if (!in_array($media->file_name, $request->input('attachments', []))) {
                    $media->delete();
                }
            }
        }
        $media = $proposal->attachments->pluck('file_name')->toArray();

        foreach ($request->input('attachments', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $proposal->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
            }
        }
        return redirect()->route('proposals.index');
    }

    public function show(Proposal $proposal)
    {
        $proposal->load('job', 'candidate');

        return view('proposals.show', compact('proposal'));
    }

    public function destroy(Proposal $proposal)
    {
        $proposal->delete();

        return back();
    }
}
