@extends('layouts.freelancers.freelancermaster')

@section('content')

<main class="browse-section">				
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="view_details">
                    <ul>
                        <li>
                            <div class="vw_items">
                                <i class="fas fa-eye"></i>
                                <div class="vw_item_text">
                                    <h6>Views</h6>
                                    <span>135</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="vw_items">
                                <i class="fas fa-shield-alt"></i>
                                <div class="vw_item_text">
                                    <h6>Verify</h6>
                                    <span>Yes</span>
                                </div>
                            </div>
                        </li>								
                        <li>
                            <div class="vw_items">
                                <i class="far fa-money-bill-alt"></i>
                                <div class="vw_item_text">
                                    <h6>Budget</h6>
                                    <span>$500 - $2000</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="vw_items">
                                <i class="far fa-clock"></i>
                                <div class="vw_item_text">
                                    <h6>Posted Date</h6>
                                    <span>4 days ago</span>
                                </div>
                            </div>
                        </li>								
                    </ul>
                </div>
                <div class="job-item ptrl_2 mt-20">
                    <div class="job-top-dt">
                        <div class="job-left-dt">
                            <img src="images/homepage/latest-jobs/img-1.jpg" alt="">
                            <div class="job-ut-dts">
                                <a href="#"><h4>John Doe</h4></a>
                                <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                            </div>
                        </div>
                        <div class="job-right-dt">
                            <div class="job-price">$500 - $2000</div>
                        </div>
                    </div>
                    <div class="job-des-dt">
                        <h4>I Need a Travel Psd Template</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare nisi id mi pulvinar tristique. Donec id erat condimentum, posuere nibh a, convallis odio. Aenean et tellus risus. Morbi vitae mauris sit amet metus porta varius. Suspendisse potenti. Cras felis ipsum, tristique sit amet tortor at, convallis finibus velit. Aenean eget sapien at quam suscipit posuere. Phasellus gravida eleifend leo, ac dictum elit tincidunt vitae. Aliquam enim nulla, efficitur a augue ut, ultrices convallis ipsum. Integer id ex hendrerit, dapibus lectus condimentum, tincidunt lorem. Ut eleifend varius posuere. Sed non pharetra odio. Phasellus rhoncus egestas dui, eget interdum tellus volutpat in. Phasellus laoreet quam id euismod tristique.</p>
                        <div class="job-skills">
                            <a href="#">UX</a>
                            <a href="#">UI</a>
                            <a href="#">Photoshop</a>
                            <a href="#">Illustrator</a>
                            <a href="#">Corel Draw</a>
                            <a href="#">Graphic Design</a>									
                        </div>
                    </div>
                    <div class="job_dts">
                        <h4>Attachments</h4>
                        <ul class="download_files">
                            <li>
                                <div class="dwn_fls">
                                    <div class="dwn-header">
                                        <h6>Project Briefing Details</h6>												
                                    </div>
                                    <div class="dwn-footer">
                                        <span>PDF</span>
                                        <button class="download_button"><i class="fas fa-download"></i></button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dwn_fls">
                                    <div class="dwn-header">
                                        <h6>Images</h6>												
                                    </div>
                                    <div class="dwn-footer">
                                        <span>Zip</span>
                                        <button class="download_button"><i class="fas fa-download"></i></button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>							
                </div>
                <div class="find-lts-jobs py-5">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="main-heading">
								<h2>Similar Jobs</h2>
								<div class="line-shape1">
									<img src="images/line.svg" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-12 col-12">
							<div class="lts-jobs-slider">
								<div class="owl-carousel jobs-owl owl-theme">
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt">
												<div class="job-left-dt">
													<img src="images/homepage/latest-jobs/img-1.jpg" alt="">
													<div class="job-ut-dts">
														<a href="#"><h4>John Doe</h4></a>
														<span><i class="fas fa-map-marker-alt"></i> New York City</span>
													</div>
												</div>
											</div>
											<div class="job-des-dt">
												<h4>UX Designer</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
												<div class="job-skills">
													<a href="#">UX</a>
													<a href="#">UI</a>
													<a href="#">Photoshop</a>
													<a href="#" class="more-skills">+4</a>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
													<li><a href="#" class="link-j1" title="View Job">View Job</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>	
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt">
												<div class="job-left-dt">
													<img src="images/homepage/latest-jobs/img-2.jpg" alt="">
													<div class="job-ut-dts">
														<a href="#"><h4>Johnson Smith</h4></a>
														<span><i class="fas fa-map-marker-alt"></i> India</span>
													</div>
												</div>
											</div>
											<div class="job-des-dt">
												<h4>PHP Developer</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
												<div class="job-skills">
													<a href="#">Php</a>
													<a href="#">Sql</a>
													<a href="#">Javascript</a>
													<a href="#" class="more-skills">+4</a>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
													<li><a href="#" class="link-j1" title="View Job">View Job</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt">
												<div class="job-left-dt">
													<img src="images/homepage/latest-jobs/img-3.jpg" alt="">
													<div class="job-ut-dts">
														<a href="#"><h4>Envato</h4></a>
														<span><i class="fas fa-map-marker-alt"></i> Australia</span>
													</div>
												</div>
											</div>
											<div class="job-des-dt">
												<h4>Wordpress Developer</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
												<div class="job-skills">
													<a href="#">Html</a>
													<a href="#">Css</a>
													<a href="#">Wordpress</a>
													<a href="#" class="more-skills">+4</a>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
													<li><a href="#" class="link-j1" title="View Job">View Job</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt">
												<div class="job-left-dt">
													<img src="images/homepage/latest-jobs/img-4.jpg" alt="">
													<div class="job-ut-dts">
														<a href="#"><h4>Joy Smith</h4></a>
														<span><i class="fas fa-map-marker-alt"></i> India</span>
													</div>
												</div>
											</div>
											<div class="job-des-dt">
												<h4>Graphic Designer</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
												<div class="job-skills">
													<a href="#">Illistrator</a>
													<a href="#">Photoshop</a>
													<a href="#" class="more-skills">+4</a>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
													<li><a href="#" class="link-j1" title="View Job">View Job</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
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
            <div class="col-lg-3 col-md-4 mainpage">
                <div class="total_days mtp_30">4 days 5 hours left</div>
                <h4 class="bid_title">Bid Now This Job</h4>					
                <div class="dlvry_days">
                    <div class="fltr-items-heading">
                        <div class="fltr-item-left">
                            <h6>Set Your Delivery Time</h6>
                        </div>
                        <div class="fltr-item-right">
                            <a href="#">Clear</a>
                        </div>
                    </div>								
                    <div class="ui fluid search selection dropdown skills-search">
                        <input name="tags" type="hidden" value="">
                        <i class="dropdown icon"></i>
                        <input class="search" autocomplete="off" tabindex="0">
                        <span class="sizer" style=""></span>
                        <div class="default text">Select Days</div>
                        <div class="menu transition hidden" tabindex="-1">
                            <div class="item selected" data-value="Job1">5 Days</div>										
                            <div class="item" data-value="day1">10 Days</div>										
                            <div class="item" data-value="day2">15 Days</div>										
                            <div class="item" data-value="day3">20 Days</div>										
                            <div class="item" data-value="day4">25 Days</div>										
                            <div class="item" data-value="day5">30 Days</div>										
                            <div class="item" data-value="day6">50 Days</div>										
                            <div class="item" data-value="day7">70 Days</div>										
                            <div class="item" data-value="day8">120 Days</div>										
                                                                
                        </div>
                    </div>
                </div>
                <button class="apply_job_rt" type="button">PLACE A BID</button>
                <div class="bookmark_rt"><button class="bookmark1 mr-3" title="bookmark"><i class="fas fa-heart"></i></button>BOOKMARK</div>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>																																						
        </div>
    </div>					
</main>
<!-- Body End -->

@endsection