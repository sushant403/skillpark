@extends('layouts.master')

@section('title','Services in ' . $banner . ' - Skillpark Inc. | Hire Expert Freelancers Any Time')
@section('content')
<link rel="stylesheet" href="/css/style.css">
<section class="py-5 mt-7 p-list-two">
   <div class="container">
      <div class="row">
         <div class="col-12 view_slider recommended">
            <div class="row">
               <div class="col-12">
                  <div class="sorting-div d-flex align-items-center justify-content-between">
                     <p class="mb-2">100+ Services available</p>
                  </div>
                  <h3>Services In {{ $banner }}</h3>
               </div>
            </div>
            <div class="row">
               @foreach($jobs as $job)
               <div class="col-md-3">
                  <a href="{{ route('job.show', $job->id) }}">
                     <img class="img-fluid" src="/images/banner/service.jpg" />
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
                           <a href="javascript:;" data-toggle="modal"
                           data-target="#loginModal"><i class="fa fa-heart" aria-hidden="true"></i>
                              <div class="price">
                                 Budget At <span style="font-size:13px">NPR {{ $job->budget }}</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            {{ $jobs->appends(request()->query())->links() }}
         </div>
      </div>
   </div>
   </div>
</section>

@endsection