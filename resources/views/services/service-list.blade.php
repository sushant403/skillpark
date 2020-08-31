@extends('layouts.master')

@section('title','Services in ' . $banner . ' - Skillpark Inc. | Hire Expert Freelancers Any Time')
@section('content')
<link rel="stylesheet" href="/css/style.css">
<section class="py-5 mt-7 p-list-two">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 view_slider recommended">
            <div class="row">
               <div class="col-lg-12">
                  <div class="sorting-div d-flex align-items-center justify-content-between">
                     <p class="mb-2">100+ Services available</p>
                  </div>
                  <h3>Services In {{ $banner }}</h3>
               </div>
            </div>
            <div class="row">
               @foreach($jobs as $job)
               <div class="col-md-4">
                  <a href="{{ route('job.show', $job->id) }}">
                     <img class="img-fluid" src="images/list/v1.png" />
                  </a>
                  <div class="inner-slider">
                     <div class="inner-wrapper">
                        <div class="d-flex align-items-center">
                           <span class="seller-image">
                              <img class="img-fluid" src="{{ asset($job->avatar) ?? '/images/uploads/default.png' }}"
                                 alt='' />
                           </span>
                           <span class="seller-name">
                              <a href="{{ route('job.show', $job->id) }}">{{ $job->title }}</a>
                              <span class="level hint--top level-one-seller">
                                 {{ $job->budget }}
                              </span>
                           </span>
                        </div>
                        <h3>
                           {{ $job->description }}
                        </h3>
                        <div class="content-info">
                           <div class="rating-wrapper">
                              <span class="gig-rating text-body-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                    <path fill="currentColor"
                                       d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                    </path>
                                 </svg>
                                 5.0
                                 <span>(7)</span>
                              </span>
                           </div>
                        </div>
                        <div class="footer">
                           <i class="fa fa-heart" aria-hidden="true"></i>
                           <div class="price">
                              <a href="#">
                                 Starting At <span style="font-size:13px">NPR {{ $job->budget }}</span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               {{ $jobs->appends(request()->query())->links() }}
            </div>
            <div class="footer-pagination text-center">
               <nav class="mb-0 mt-0" aria-label="Page navigation example">
                  <ul class="pagination mb-0">
                     <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                           <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                           <!--                    <span class="sr-only"></span>-->
                        </a>
                     </li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item active"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">4</a></li>
                     <li class="page-item"><a class="page-link" href="#">5</a></li>
                     <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                           <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                           <!--                    <span class="sr-only"></span>-->
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection