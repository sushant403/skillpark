@extends('layouts.master')

@section('content')
<style>
    a {
        color: inherit;
    }

    .p-category a img {
        width: 36px
    }

    @media only screen and (max-width: 976px) {

        .img-fluid,
        .popular {
            display: none;
        }
    }
</style>
<!-- Body Start -->
<main class="body-section">
   <!-- Begin Page Content -->
   <section style="padding-top: 8rem !important;background-color: #f0f2f5" class="py-5 homepage-search-block text-center homepage-search-block-2 position-relative">
    <div class="container">
       <div class="row py-lg-5">
          <div class="col-lg-6 col-xl-6 mx-auto">
             <div class="homepage-search-title text-xl-left">
                <h1 style="font-size: 32px" class="mb-3 text-shadow text-gray-900 font-weight-bold">Where
                    business meets the trusted freelancer talents</h1>
                <h5 class="mb-5 text-shadow text-gray-800 font-weight-normal">Hire expert freelancers for your
                    projects any time.
                </h5>
             </div>
             <div class="homepage-search-form">
                <form class="form-noborder">
                   <div class="form-row">
                      <div class="col-lg-3 col-md-3 col-sm-12 form-group">
                         <div class="location-dropdown text-left">
                            <i class="icofont-location-arrow"></i>
                            <select class="custom-select form-control border-0 shadow-sm form-control-lg">
                               <option> All </option>
                               <option> Graphics & Design </option>
                               <option> Digital Marketing </option>
                               <option> Writing & Translation </option>
                               <option> Video & Animation </option>
                               <option> Music & Audio </option>
                               <option> Programming & Tech </option>
                               <option> Business </option>
                               <option> Lifestyle </option>
                               <option> Industries </option>
                            </select>
                         </div>
                      </div>
                      <div class="col-lg-7 col-md-7 col-sm-12 form-group">
                         <input type="text" placeholder="Find Services..."
                            class="form-control border-0 form-control-lg shadow-sm">
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                         <button type="submit"
                            class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i
                            class="fa fa-search"></i></button>
                      </div>
                   </div>
                </form>
             </div>
             <h6 id="popular" class="mb-0 mt-1 text-shadow text-center text-gray-700 font-weight-normal">E.g. Voice over,
                translation, logo design, Articles, Blog Posts &amp; more...
             </h6>
          </div>
          <div class="col-lg-5 col-xl-5">
            <img class="img-fluid" width="500" src="images/svg/banner.svg" alt='' />
          </div>
       </div>
    </div>
 </section>

    <div class="we-offers">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="main-heading">
                        <h2>What We Offer</h2>
                        <span>Offering the Best Deal</span>
                        <div class="line-shape1">
                            <img src="images/svg/line.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>Searching the Best Job</h4>
                            <p>Find Jobs according to categories and work on what best qualifies your skills and
                                payments you deserve.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>More Quality Hires</h4>
                            <p>Thousands of Qualified Freelancers ready for your projects and business. Either find them
                                or let them bid.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>Full Transparency</h4>
                            <p> A modern dynamic dashboard allows you to track your project's activity for you to always
                                stay updated.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="offer-step">
                        <div class="offer-text-dt">
                            <h4>Simplified Payment</h4>
                            <p>Using the national payment system, now the payments are faster and more secure. Contracts
                                are there to backup.</p>
                            <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="all-categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="main-heading">
                        <h2>Explore the Marketplace</h2>
                        <span>Find quality talent or agencies</span>
                        <div class="line-shape1">
                            <img src="images/svg/line.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="job-categories mt-30">
                        <div class="row no-gutters">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-9.svg" alt="">
                                        <span>Sales &amp; Marketing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-16.svg" alt="">
                                        <span>Web Development</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-17.svg" alt="">
                                        <span>Translation</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-7.svg" alt="">
                                        <span>Architecture Design</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-11.svg" alt="">
                                        <span>Financial Advices</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-13.svg" alt="">
                                        <span>Blogs Writing</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-14.svg" alt="">
                                        <span>Legal Advices</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="p-category">
                                    <a href="#" title="">
                                        <img src="images/homepage/categories/icon-15.svg" alt="">
                                        <span>IT &amp; Networking</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="find-lts-jobs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="main-heading">
                        <h2>Find the Latest Posts</h2>
                        <div class="line-shape1">
                            <img src="images/svg/line.svg" alt="">
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
                                            <img src="images/logo/block-logo.svg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Sushant Poudel</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="job-price">Rs. 5900</div>
                                            <div class="job-fp">Full Time</div>
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/logo/block-logo.svg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Nitika Bhatta</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Dhangadhi</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="job-price">Rs. 5000</div>
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/logo/block-logo.svg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Rajesh Hamal</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Pokhara</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="job-price">Rs. 9000</div>
                                            <div class="job-fp">Full Time</div>
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/logo/block-logo.svg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Divesh Thapa</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Kathmadnu</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="job-price">Rs. 50000</div>
                                            <div class="job-fp">Full Time</div>
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
                                </div>
                            </div>
                            <div class="item">
                                <div class="job-item">
                                    <div class="job-top-dt">
                                        <div class="job-left-dt">
                                            <img src="images/logo/block-logo.svg" alt="">
                                            <div class="job-ut-dts">
                                                <a href="#">
                                                    <h4>Nepali Nepal</h4>
                                                </a>
                                                <span><i class="fas fa-map-marker-alt"></i> Jhapa</span>
                                            </div>
                                        </div>
                                        <div class="job-right-dt">
                                            <div class="job-price">Rs. 6000</div>
                                            <div class="job-fp">Full Time</div>
                                        </div>
                                    </div>
                                    <div class="job-des-dt">
                                        <h4>Front End Developer</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                        <div class="job-skills">
                                            <a href="#">Html</a>
                                            <a href="#">Css</a>
                                            <a href="#">Boostrap</a>
                                            <a href="#" class="more-skills">+4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="view-links" onclick="window.location.href = '#';">BROWSE ALL JOBS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blogs and guides -->
    <div class="all-categories" style="padding: 0;">
        <!--       guides  -->
        <div class="guide-wrapper py-5">
            <div class="container">
                <h2>
                    Skillpark
                    Blogs
                    <a style="font-size: 14px;color:inherit" href="https://kasari678290104.wordpress.com/" target="_blank" class="float-right">See More guides <i class="fas fa-arrow-right"></i></a>
                </h2>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="guide">
                            <img src="images/add/guide-01.jpg">
                            <div class="content">
                                <h6>Create a Website</h6>
                                <p>Building a stunning website from A to Z</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="guide">
                            <img src="images/add/guide-02.jpg">
                            <div class="content">
                                <h6>Grow With Digital Marketing</h6>
                                <p>Promoting your business online</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="guide">
                            <img src="/images/add/guide-03.jpg">
                            <div class="content">
                                <h6>Start Freelancing</h6>
                                <p>Differentiating yourself from the competition</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--       guides  -->
    </div>
    <!-- get started -->
    <div class="all-categories" style="padding: 0;">
        <div class="get-started">
            <div class="content">
                <h2>Hire experts or be hired. For any job, any time.</h2>
                <p>We've got you covered for all your business needs</p>
                @guest
                <a href="{{ route('register') }}" class="c-btn c-fill-color-btn">Get Started</a>
                @else
                <a href="{{ url('home') }}" class="c-btn c-fill-color-btn">Dashboard</a>
                @endguest
            </div>
        </div>
    </div>
</main>
<!-- Body End -->


@endsection