@extends('layouts.master')

@section('title','Services in ' . $banner . ' - Skillpark Inc.')
@section('extra-css') @include('layouts.components.spinner') @endsection
@section('content')

<link rel="stylesheet" href="/css/style.css">
<section class="mt-4 p-list-two">
   <div class="container">
      <div class="row">
         <div class="col-12 view_slider recommended">
            <div class="row">
               <div class="col-12">
                  <div class="sorting-div d-flex align-items-center justify-content-between">
                     <h3 class="pb-2">Jobs In {{ $banner }}</h3>
                  </div>
                  <p class="mb-3">{{ $servicecount }} Jobs available</p>
               </div>
            </div>
            <div class="row">
               @foreach($jobs as $job)
               <div class="col-lg-3 col-md-4 col-sm-6">
                  <a href="{{ route('job.show', $job->id) }}">
                     <img class="img-fluid" src="{{ asset($job->thumbnail) ?? '/images/banner/service.svg' }}" />
                  </a>
                  <div class="inner-slider">
                     <div class="inner-wrapper">
                        <div class="d-flex align-items-center">
                           <span class="seller-image">
                              <img class="img-fluid"
                                 src="{{ asset($job->employer->avatar) ?? '/images/uploads/default.png' }}" alt='' />
                           </span>
                           <span class="seller-name">
                              <a href="{{ route('job.show', $job->id) }}">{{ $job->title }}</a>
                              <span class="level hint--top level-one-seller">
                                 {{ $job->budget }}
                              </span>
                           </span>
                        </div>
                        <h3>
                           {{ Str::limit($job->description, 60) }}
                        </h3>
                        <div class="content-info">
                           <div class="rating-wrapper">
                              <span class="gig-rating text-body-2">
                                 <span>{{ $job->company ?? 'Skillpark Inc.' }}</span>
                              </span>
                           </div>
                        </div>
                        <div class="footer">
                           <a href="javascript:;" @guest data-toggle="modal" data-target="#loginModal" @endguest><i
                                 class="fa fa-heart" aria-hidden="true"></i>
                              <div class="price">
                                 Budget At <span style="font-size:13px">NPR {{ $job->budget }}</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            <div class="mx-auto" style="width:max-content"> {{ $jobs->appends(request()->query())->links() }} </div>
         </div>
      </div>
      @include('layouts.divisions.recentjobs')
   </div>
</section>

@endsection