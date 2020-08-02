@extends('layouts.clients.clientmaster')

@section('content')
    
<main class="browse-section">				
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="account_dt_left">
							<div class="job-center-dt">
								<img src="images/homepage/candidates/img-1.jpg" alt="">
								<div class="job-urs-dts">
									<div class="dp_upload">
										<input type="file" id="file">
										<label for="file">Upload Photo</label>
									</div>
									<h4>John Doe</h4>
									<span>UX Designer</span>
									<div class="avialable">Available Full Time<a href="#"><i class="far fa-edit"></i></a></div>
								</div>													
							</div>
							<div class="my_websites">
								<ul>
									<li><a href="#" class="web_link"><i class="fas fa-globe"></i>www.companysite.com</a></li>
									<li><a href="#" class="web_link"><i class="far fa-edit"></i>www.blogsite.com</a></li>
								</ul>
							</div>
							<div class="group_skills_bar">
								<h6>Profile Completeness</h6>
								<div class="group_bar1">
									<span>85%</span>
									<div class="progress skill_process">
										<div class="progress-bar progress_bar_skills" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<a href="#" class="skiils_button">Complete Required Skills</a>
							</div>
							<div class="rlt_section">
								<div class="rtl_left">
									<h6>Rating</h6>
								</div>
								<div class="rtl_right">
									<div class="star">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>								
										<span>4.9</span> 									
									</div>
								</div>
							</div>
							<div class="rlt_section">
								<div class="rtl_left">
									<h6>Location</h6>
								</div>
								<div class="rtl_right">
									<span><i class="fas fa-map-marker-alt lc_icon"></i> Ludhiana, India</span>
								</div>
								<div class="my_location">
									<div id="map"></div>
								</div>
								<ul class="rlt_section2">
									<li>
										<div class="rtl_left2">
											<h6>Hourly Rate</h6>
										</div>
										<div class="rtl_right2">
											<span>$50 / hr</span>
										</div>
									</li>
									<li>
										<div class="rtl_left2">
											<h6>Age</h6>
										</div>
										<div class="rtl_right2">
											<span>28</span>
										</div>
									</li>
									<li>
										<div class="rtl_left2">
											<h6>Experenice</h6>
										</div>
										<div class="rtl_right2">
											<span>5 Year</span>
										</div>
									</li>
									<li>
										<div class="rtl_left2">
											<h6>Job Done</h6>
										</div>
										<div class="rtl_right2">
											<span>69</span>
										</div>
									</li>
								</ul>
							</div>
							<div class="social_section3 mb80">
								<div class="social_leftt3">
									<h6>Contact Social Account</h6>
								</div>
								<div class="social_right3">
									<a href="#"><i class="far fa-edit"></i></a>
								</div>
								<ul class="social_accounts">
									<li><a href="#" class="social_links"><i class="fab fa-facebook-f f1"></i>http://facebook.com/johndoe</a></li>
									<li><a href="#" class="social_links"><i class="fab fa-twitter t1"></i>http://twitter.com/johndoe</a></li>
									<li><a href="#" class="social_links"><i class="fab fa-linkedin-in l1"></i>http://linkedin.com/johndoe</a></li>
									<li><a href="#" class="social_links"><i class="fab fa-dribbble d1"></i>http://dribbble.com/johndoe</a></li>
									<li><a href="#" class="social_links"><i class="fab fa-behance b1"></i>http://behance.net/johndoe</a></li>
									<li><a href="#" class="social_links"><i class="fab fa-github g1"></i>http://github.com/johndoe</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8 mainpage">
						<div class="account_heading">
							<div class="account_hd_left">
								<h2>Manage Your Account</h2>
							</div>
							<div class="account_hd_right">
								<a href="#" class="main_lg_btn">Logout</a>
							</div>
						</div>
						<div class="account_tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_dashboard.html">Dashboard</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" href="my_freelancer_profile.html">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_portfolio.html">Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_notifications.html">Notifications</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_messages.html">Messages</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_bookmarks.html">Bookmarks</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_jobs.html">Jobs</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_bids.html">Bids</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_reviews.html">Reviews</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_payments.html">Payment</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="my_freelancer_setting.html"><i class="fas fa-cog"></i></a>
								</li>
							</ul>
						</div>
						<a href="#" class="edit_link_profile"><i class="far fa-edit"></i>Edit Profile</a>
						<div class="view_chart">
							<div class="view_chart_header">
								<h4>About</h4>								
							</div>
							<div class="view_chart_body">
								<p class="user_about_des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis accumsan mi. Nam nulla lorem, consectetur eu augue nec, laoreet viverra augue. Curabitur quis nisi nec enim tempor tincidunt sit amet eu elit. Aliquam metus massa, vehicula vel nisi quis, eleifend hendrerit velit. Maecenas nunc nunc, ultricies non accumsan sit amet, varius non dui. Pellentesque ipsum justo, mollis et posuere at, viverra porta nisl. Cras accumsan cursus tellus luctus congue. Maecenas sed feugiat dolor. In ipsum sapien, congue vitae congue ac, cursus nec mauris. Integer fringilla mi urna, id efficitur ligula interdum quis. Ut vehicula imperdiet elit, quis condimentum est aliquam ac. Nunc tortor elit, imperdiet ac tellus ut, accumsan interdum dui. Duis fermentum tincidunt massa, sodales tempus sapien euismod quis. Vestibulum suscipit ex ex, nec euismod leo eleifend eget. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tincidunt sodales augue, ut consequat libero blandit non. Suspendisse id dolor vel lorem bibendum luctus sit amet a odio. Vestibulum varius viverra ipsum quis rhoncus. Praesent bibendum dictum ex. Quisque eu laoreet leo.</p>
							</div>
						</div>
						<div class="view_chart">
							<div class="view_chart_header">
								<h4>Skills</h4>								
							</div>
							<div class="view_chart_body">
								<div class="job-skills">
									<a href="#">HTML</a>
									<a href="#">CSS</a>
									<a href="#">Wordpress</a>
									<a href="#">Javascript</a>
									<a href="#">Jquery</a>
									<a href="#">Plugins</a>									
								</div>
							</div>
						</div>
						<div class="view_chart">
							<div class="view_chart_header">
								<h4>Language</h4>								
							</div>
							<div class="view_chart_body">
								<div class="job-skills">
									<a href="#" class="more-skills">English</a>
									<a href="#" class="more-skills">Punjabi</a>
									<a href="#" class="more-skills">Hindi</a>																	
								</div>
							</div>
						</div>						
					</div>																																						
				</div>
			</div>					
		</main>

@endsection