@extends('layouts.clients.clientmaster')

@section('title', Auth::user()->name . ' - My Projects')
@section('content')

<div class="row no-gutters space-1">
    <div class="col-lg-3">
        <!-- Navbar -->
        <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
            <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
                <!-- Card -->
                <div class="card mb-5">
                    <div class="card-body">
                        <!-- Avatar -->
                        <div class="d-none d-lg-block text-center mb-5">
                            <div class="avatar avatar-xxl avatar-circle mb-3">
                                <img class="avatar-img" src="{{ asset(Auth::user()->avatar) }}" alt="Image Description">
                                <img class="avatar-status avatar-lg-status"
                                    src="/images/svg/illustrations/top-vendor.svg" alt="Image Description"
                                    data-toggle="tooltip" data-placement="top" title="Verified user">
                            </div>

                            <h4 class="card-title">{{ Auth::user()->name }}</h4>
                            <p class="card-text font-size-1">{{ Auth::user()->email }}</p>
                        </div>
                        <!-- End Avatar -->
                        <h6 class="text-cap small">Job Posts</h6>

                        <!-- List -->
                        <ul class="nav nav-sub nav-sm nav-tabs nav-list-y-2 mb-4">
                            <li class="nav-item">
                                <a class="nav-link active" href="projects">
                                    <i class="fas fa-shopping-basket nav-icon"></i>
                                    Your Projects
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/faq">
                                    <i class="fas fa-heart nav-icon"></i>
                                    FAQ
                                </a>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Navbar -->
    </div>

    <div class="col-lg-9">
        <div class="card">

            <div class="content">
                <div class="row no-gutters">
                    <div class="col-lg-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ trans('global.show') }} {{ trans('global.job.title') }}
                            </div>
                            <div class="panel-body">

                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.employer') }}
                                            </th>
                                            <td>
                                                {{ $job->employer->name ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.candidate') }}
                                            </th>
                                            <td>
                                                {{ $job->candidate->name ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.title') }}
                                            </th>
                                            <td>
                                                {{ $job->title }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.description') }}
                                            </th>
                                            <td>
                                                {!! $job->description !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.budget') }}
                                            </th>
                                            <td>
                                                {{ $job->budget }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.attachments') }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                {{ trans('global.job.fields.delivery_date') }}
                                            </th>
                                            <td>
                                                {{ $job->delivery_date }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ trans('global.proposal.title') }}
                            </div>
                            <div class="panel-body">

                                <table class=" table table-bordered table-striped table-hover datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                {{ trans('global.proposal.fields.candidate') }}
                                            </th>
                                            <th>
                                                {{ trans('global.proposal.fields.proposal_text') }}
                                            </th>
                                            <th>
                                                {{ trans('global.proposal.fields.budget') }}
                                            </th>
                                            <th>
                                                {{ trans('global.proposal.fields.delivery_time') }}
                                            </th>
                                            <th>
                                                {{ trans('global.proposal.fields.attachments') }}
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($job->proposals as $key => $proposal)
                                        <tr data-entry-id="{{ $proposal->id }}">
                                            <td>
                                                {{ $proposal->candidate->name ?? '' }}
                                            </td>
                                            <td>
                                                {{ $proposal->proposal_text ?? '' }}
                                            </td>
                                            <td>
                                                {{ $proposal->budget ?? '' }}
                                            </td>
                                            <td>
                                                {{ $proposal->delivery_time ?? '' }}
                                            </td>
                                            <td>
                                                @can('job_create')
                                                <form action="{{ route("admin.jobs.update", [$job->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="candidate_id"
                                                        value="{{ $proposal->candidate_id }}" />
                                                    <input type="submit" class="btn btn-xs btn-primary"
                                                        value="{{ trans('global.job.hire_this_candidate') }}" />
                                                </form>
                                                @endcan
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Body -->
    </div>
    <!-- End Card -->
</div>
</div>

@endsection