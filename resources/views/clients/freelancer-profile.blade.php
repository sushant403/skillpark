@extends('layouts.clients.clientmaster')

@section('content')

<script>
   document.title = 'Profile - Random User';
</script>

<link href="/css/mover.css" rel="stylesheet">
<div class="main-page second py-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 left">
            <div class="profile_info">
               <div class="seller-card">
                  <div>
                     <div class="user-online-indicator is-online " data-user-id="1152855">
                        <i class="fa fa-circle"></i>online
                     </div>
                  </div>
                  <div><a href="#" class="ambassadors-badge">Ambassador</a></div>
                  <div class="user-profile-info">
                     <div>
                        <div class="user-profile-image">
                           <label class="user-pict">
                              <img src="images/logo/block-logo.svg" class="img-fluid user-pict-img" alt="Skillpark">
                              <a href="#"
                                 class="user-badge-round user-badge-round-med locale-en-us top-rated-seller"></a></label>
                        </div>
                     </div>
                     <div class="user-profile-label">
                        <div class="username-line">
                           <a href="#" class="seller-link">Skillpark</a>
                        </div>
                        <div class="oneliner-wrapper">
                           <small class="oneliner">Professional Voice Actress</small>
                           <div class="ratings-wrapper">
                              <p class="rating-text"><strong>5.0</strong> (1k+ reviews)</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="buttons-wrapper">
                     <a href="#" class="btn-lrg-standard btn-contact-me js-contact-me js-open-popup-join">Contact
                        Me</a>
                     <div class="btn-lrg-standard btn-white btn-custom-order">Get a Quote</div>
                  </div>
                  <div class="user-stats-desc">
                     <ul class="user-stats">
                        <li class="location">From<strong>Kathmandu</strong></li>
                        <li class="member-since">Member since<strong>Dec 2018</strong></li>
                        <li class="response-time">Avg. Response Time<strong>2 hours</strong></li>
                        <li class="recent-delivery">Recent Delivery<strong>about&nbsp;15</strong></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="seller-profile">
               <div class="description">
                  <h3>Description</h3>
                  <p>I am a Voice Actress with over 16+ years experience in everything from video games to phone
                     systems to explainer videos to children's books.
                     I am originally from the South East of England and have a natural British accent, as well as a
                     Standard American accent from living in the US for 15 years.
                  </p>
               </div>
               <div class="languages">
                  <h3>Languages</h3>
                  <ul>
                     <li>English&nbsp;&nbsp;- <span>Fluent</span></li>
                     <li>Nepali&nbsp;<strong>(español)</strong>&nbsp;- <span>Conversational</span></li>
                     <li>French&nbsp;<strong>(français)</strong>&nbsp;- <span>Basic</span></li>
                  </ul>
               </div>
               <div class="linked-accounts">
                  <h3>Linked Accounts</h3>
                  <ul>
                     <li class="platform social-account facebook"><i class="fab fa-facebook hint--top"
                           aria-hidden="true" data-hint="facebook"></i><span class="text">facebook</span></li>
                     <li class="platform social-account google"><i class="fab fa-google hint--top"
                           aria-hidden="true" data-hint="google"></i><span class="text">google</span></li>
                  </ul>
               </div>
               <div class="skills">
                  <h3>Skills</h3>
                  <ul>
                     <li class=""><a href="#">voice talent</a></li>
                     <li class=""><a href="#">voice acting</a></li>
                     <li class=""><a href="#">voiceover</a></li>
                     <li class=""><a href="#">voice over</a></li>
                     <li class=""><a href="#">voiceover talent</a></li>
                     <li class=""><a href="#">voice actor</a></li>
                     <li class=""><a href="#">voicetalent</a></li>
                     <li class=""><a href="#">voiceacting</a></li>
                     <li class=""><a href="#">voiceactor</a></li>
                     <li class=""><a href="#">voiceover artist</a></li>
                  </ul>
               </div>
               <div class="education-list list">
                  <h3>Education</h3>
                  <ul>
                     <li>
                        <p>B.A. - communication studies</p>
                        <p>Clayton State University, Kathmandu, Graduated 2006</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-8 right">
            <h2>{{ Auth::user()->name }}'s Gigs</h2>
            <div class="recommended">
               <div class="row">
                  <div class="col-md-4">
                     <div>
                        <a href="#">
                           <img class="img-fluid" src="images/list/v1.png" />
                        </a>
                        <div class="inner-slider">
                           <div class="inner-wrapper">
                              <div class="d-flex align-items-center">
                                 <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s1.png" alt='' />
                                 </span>
                                 <span class="seller-name">
                                    <a href="profile.html">{{ Auth::user()->name }}</a>
                                    <span class="level hint--top level-one-seller">
                                       Level 1 Seller
                                    </span>
                                 </span>
                              </div>
                              <h3>I will create professional audio ads or radio commercials for your project</h3>
                              <div class="content-info">
                                 <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                          height="15">
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
                                       Starting At <span> Rs. 1,205</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div>
                        <a href="#">
                           <img class="img-fluid" src="images/list/v2.png" />
                        </a>
                        <div class="inner-slider">
                           <div class="inner-wrapper">
                              <div class="d-flex align-items-center">
                                 <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s2.png" alt='' />
                                 </span>
                                 <span class="seller-name">
                                    <a href="profile.html">{{ Auth::user()->name }}</a>
                                    <span class="level hint--top level-one-seller">
                                       Level 1 Seller
                                    </span>
                                 </span>
                              </div>
                              <h3>I will create professional audio ads or radio commercials for your project</h3>
                              <div class="content-info">
                                 <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                          height="15">
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
                                       Starting At <span> Rs. 1,205</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div>
                        <a href="#">
                           <img class="img-fluid" src="images/list/v3.png" />
                        </a>
                        <div class="inner-slider">
                           <div class="inner-wrapper">
                              <div class="d-flex align-items-center">
                                 <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s3.png" alt='' />
                                 </span>
                                 <span class="seller-name">
                                    <a href="profile.html">{{ Auth::user()->name }}</a>
                                    <span class="level hint--top level-one-seller">
                                       Level 1 Seller
                                    </span>
                                 </span>
                              </div>
                              <h3>I will create professional audio ads or radio commercials for your project</h3>
                              <div class="content-info">
                                 <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                          height="15">
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
                                       Starting At <span> Rs. 1,205</span>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="review-section">
               <div class="d-flex align-items-center justify-content-between mb-4">
                  <h4 class="m-0">Reviews as Seller <small><span class="star-rating-s15"></span><span><span
                              class="total-rating-out-five header-average-rating"
                              data-impression-collected="true">5</span></span><span><span
                              class="total-rating header-total-rating"
                              data-impression-collected="true">(28051)</span></span></small> </h4>
                  <select class="custom-select custom-select-sm border-0 shadow-sm ml-2">
                     <option>Most Relevant</option>
                     <option>Most Recent</option>
                  </select>
               </div>
               <div class="breakdown">
                  <ul class="header-stars">
                     <li>
                        Seller communication level
                        <small>
                           <span class="star-rating-s15"></span>
                           <span class="total-rating-out-five">5</span>
                        </small>
                     </li>
                     <li>
                        Recommend to a friend
                        <small>
                           <span class="star-rating-s15"></span>
                           <span class="total-rating-out-five">5</span>
                        </small>
                     </li>
                     <li>
                        Service as described
                        <small>
                           <span class="star-rating-s15"></span>
                           <span class="total-rating-out-five">5</span>
                        </small>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="review-list">
               <ul>
                  <li>
                     <div class="d-flex">
                        <div class="left">
                           <span>
                              <img src="images/user/s9.png" class="profile-pict-img img-fluid" alt="">
                           </span>
                        </div>
                        <div class="right">
                           <h4>
                              Skillpark
                              <span class="gig-rating text-body-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                    <path fill="currentColor"
                                       d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                    </path>
                                 </svg>
                                 5.0
                              </span>
                           </h4>
                           <div class="country d-flex align-items-center">
                              <span>
                                 <img class="country-flag img-fluid" src="/images/svg/en.svg">
                              </span>
                              <div class="country-name font-accent">India</div>
                           </div>
                           <div class="review-description">
                              <p>
                                 The process was smooth, after providing the required info,
                                 Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                              </p>
                           </div>
                           <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex">
                        <div class="left">
                           <span>
                              <img src="images/user/s8.png" class="profile-pict-img img-fluid" alt="">
                           </span>
                        </div>
                        <div class="right">
                           <h4>
                              Skillpark
                              <span class="gig-rating text-body-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                    <path fill="currentColor"
                                       d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                    </path>
                                 </svg>
                                 5.0
                              </span>
                           </h4>
                           <div class="country d-flex align-items-center">
                              <span>
                                 <img class="country-flag img-fluid" src="/images/svg/en.svg">
                              </span>
                              <div class="country-name font-accent">Pokhara</div>
                           </div>
                           <div class="review-description">
                              <p>
                                 The process was smooth, after providing the required info,
                                 Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                              </p>
                           </div>
                           <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex">
                        <div class="left">
                           <span>
                              <img src="images/user/s7.png" class="profile-pict-img img-fluid" alt="">
                           </span>
                        </div>
                        <div class="right">
                           <h4>
                              Skillpark
                              <span class="gig-rating text-body-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                    <path fill="currentColor"
                                       d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                    </path>
                                 </svg>
                                 5.0
                              </span>
                           </h4>
                           <div class="country d-flex align-items-center">
                              <span>
                                 <img class="country-flag img-fluid" src="/images/svg/en.svg">
                              </span>
                              <div class="country-name font-accent">Kathmadnu</div>
                           </div>
                           <div class="review-description">
                              <p>
                                 The process was smooth, after providing the required info,
                                 Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                              </p>
                           </div>
                           <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="d-flex">
                        <div class="left">
                           <span>
                              <img src="images/user/s6.png" class="profile-pict-img img-fluid" alt="">
                           </span>
                        </div>
                        <div class="right">
                           <h4>
                              Skillpark
                              <span class="gig-rating text-body-2">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                    <path fill="currentColor"
                                       d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                    </path>
                                 </svg>
                                 5.0
                              </span>
                           </h4>
                           <div class="country d-flex align-items-center">
                              <span>
                                 <img class="country-flag img-fluid" src="/images/svg/en.svg">
                              </span>
                              <div class="country-name font-accent">Dhangadhi</div>
                           </div>
                           <div class="review-description">
                              <p>
                                 The process was smooth, after providing the required info,
                                 Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                              </p>
                           </div>
                           <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection