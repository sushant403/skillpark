@extends('layouts.clients.clientmaster')

@section('content')

<section class="py-5 p-list-two">
    <div class="container">
       <div class="row">
          <div class="col-lg-3">
             <div class="filters shadow-sm rounded bg-white mb-4">
                <div class="filters-header border-bottom pl-4 pr-4 pt-3 pb-3">
                   <h5 class="m-0">Filter By</h5>
                </div>
                <div class="filters-body">
                   <div id="accordion">
                      <div class="filters-card border-bottom p-4">
                         <div class="filters-card-header" id="headingOne">
                            <h6 class="mb-0">
                               <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               Popular <i class="fa fa-chevron-down fa-sm float-right"></i>
                               </a>
                            </h6>
                         </div>
                         <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="filters-card-body card-shop-filters">
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb1">
                                  <label class="custom-control-label" for="cb1">Website Building </label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb2">
                                  <label class="custom-control-label" for="cb2">WordPress</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb3">
                                  <label class="custom-control-label" for="cb3">Logo Design</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb4">
                                  <label class="custom-control-label" for="cb4">Dropshipping</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb3">
                                  <label class="custom-control-label" for="cb3">Website Design</label>
                               </div>
                               <div class="mt-2"><a href="#" class="link">See all</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="filters-card border-bottom p-4">
                         <div class="filters-card-header" id="headingTwo">
                            <h6 class="mb-0">
                               <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                               Categories <i class="fa fa-chevron-down fa-sm float-right"></i>
                               </a>
                            </h6>
                         </div>
                         <div id="collapsetwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="filters-card-body card-shop-filters">
                               <form class="filters-search mb-3">
                                  <div class="form-group">
                                     <i class="fa fa-search"></i>
                                     <input type="text" class="form-control" placeholder="Search Brand">
                                  </div>
                               </form>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb6">
                                  <label class="custom-control-label" for="cb6">Full Website Creation </label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb7">
                                  <label class="custom-control-label" for="cb7">Landing Page</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb8">
                                  <label class="custom-control-label" for="cb8">Customization</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb9">
                                  <label class="custom-control-label" for="cb9">Bug Fixes</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb10">
                                  <label class="custom-control-label" for="cb10">Theme/Plugin</label>
                               </div>
                               <div class="mt-2"><a href="#" class="link">See all</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="filters-card border-bottom p-4">
                         <div class="filters-card-header" id="headingCategory">
                            <h6 class="mb-0">
                               <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                               Budget <i class="fa fa-chevron-down fa-sm float-right"></i>
                               </a>
                            </h6>
                         </div>
                         <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordion">
                            <div class="filters-card-body card-shop-filters">
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb1">
                                  <label class="custom-control-label" for="cb1">$10 - $100 </label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb2">
                                  <label class="custom-control-label" for="cb2">$100 - $500</label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb3">
                                  <label class="custom-control-label" for="cb3">$500 - $1000</label>
                               </div>
                               <div class="mt-2"><a href="#" class="link">See all</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="filters-card p-4 border-bottom">
                         <div class="filters-card-header" id="headingOffer">
                            <h6 class="mb-0">
                               <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseOffer" aria-expanded="true" aria-controls="collapseOffer">
                               Seller Details <i class="fa fa-chevron-down fa-sm float-right"></i>
                               </a>
                            </h6>
                         </div>
                         <div id="collapseOffer" class="collapse" aria-labelledby="headingOffer" data-parent="#accordion">
                            <div class="filters-card-body card-shop-filters">
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb6">
                                  <label class="custom-control-label" for="cb6">Top Rated Seller <small class="text-danger float-right">80</small></label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb7">
                                  <label class="custom-control-label" for="cb7">Level One <small class="text-danger float-right">34</small></label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb8">
                                  <label class="custom-control-label" for="cb8">Level Two <small class="text-danger float-right">56</small></label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb9">
                                  <label class="custom-control-label" for="cb9">New Seller <small class="text-danger float-right">98</small></label>
                               </div>
                               <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="cb10">
                                  <label class="custom-control-label" for="cb10"> Seller <small class="text-danger float-right">21</small></label>
                               </div>
                               <div class="mt-2"><a href="#" class="link">See all</a></div>
                            </div>
                         </div>
                      </div>
                      <div class="filters-card p-4">
                         <div class="filters-card-header" id="headingDistance">
                            <h6 class="mb-0">
                               <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseDistance" aria-expanded="true" aria-controls="collapseDistance">
                               Pro Services <i class="fa fa-chevron-down fa-sm float-right"></i>
                               </a>
                            </h6>
                         </div>
                         <div id="collapseDistance" class="collapse show" aria-labelledby="headingDistance" data-parent="#accordion">
                            <div class="filters-card-body card-shop-filters">
                               <div class="filters-card">
                                  <div>
                                     <div class="filters-card-body card-shop-filters pt-0">
                                        <div class="custom-control custom-radio">
                                           <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                                           <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                           <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                           <label class="custom-control-label" for="customRadio2">No
                                           with offers</label>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-9 view_slider recommended">
             <div class="row">
                <div class="col-lg-12">
                   <div class="sorting-div d-flex align-items-center justify-content-between">
                      <p class="mb-2">463 Services available</p>
                      <div class="sorting d-flex align-items-center">
                         <p>Sortby</p>
                         <select class="custom-select custom-select-sm border-0 shadow-sm ml-2">
                            <option>Best Selling</option>
                            <option>Recommended</option>
                            <option>Newest Arrivals</option>
                         </select>
                      </div>
                   </div>
                   <h3>Services In Web &amp; Mobile Design</h3>
                </div>
             </div>
             <div class="row">
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v1.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s1.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v2.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s2.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v3.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s3.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v4.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s4.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v5.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s5.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v6.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s6.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v7.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s7.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v8.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s8.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <a href="#">
                   <img class="img-fluid" src="images/list/v2.png" />
                   </a>
                   <div class="inner-slider">
                      <div class="inner-wrapper">
                         <div class="d-flex align-items-center">
                            <span class="seller-image">
                            <img class="img-fluid"
                               src="images/user/s9.png"
                               alt='' />
                            </span>
                            <span class="seller-name">
                            <a href="#">Stave Martin</a>
                            <span class="level hint--top level-one-seller">
                            Level 1 Seller
                            </span>
                            </span>
                         </div>
                         <h3>
                            Contrary to popular belief, Lorem Ipsum is not simply...
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
                               Starting At <span> $1,205</span>
                               </a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
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