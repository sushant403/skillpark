@extends('layouts.clients.clientmaster')

@section('content')

<main class="browse-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="browser-job-filters">
                    <form method="POST" action="{{ route('searchInfo') }}" id="signup-form" class="signup-form">
                        @csrf
                        <div class="filter-heading">
                            <div class="fh-left">
                                Filters
                            </div>
                            <div class="fh-right">
                                <a href="#">Clear All Filters</a>
                            </div>
                        </div>
                        <div class="fltr-group">
                            <div class="fltr-items-heading">
                                <div class="fltr-item-left">
                                    <h6>Skills</h6>
                                </div>
                                <div class="fltr-item-right">
                                    <a href="#">Clear</a>
                                </div>
                            </div>
                            <div class="ui fluid multiple search selection dropdown skills-search">
                                <input name="tags" type="hidden" value="">
                                <i class="dropdown icon"></i>
                                <input class="search" autocomplete="off" tabindex="0"><span class="sizer"
                                    style=""></span>
                                <div class="default text">Skills</div>
                                <div class="menu transition hidden" tabindex="-1">
                                    <div class="item selected" data-value="angular">Angular</div>
                                    <div class="item" data-value="css">CSS</div>
                                    <div class="item" data-value="design">Graphic Design</div>
                                    <div class="item" data-value="ember">Ember</div>
                                    <div class="item" data-value="html">HTML</div>
                                    <div class="item" data-value="ia">Information Architecture</div>
                                    <div class="item" data-value="javascript">Javascript</div>
                                    <div class="item" data-value="mech">Mechanical Engineering</div>
                                    <div class="item" data-value="meteor">Meteor</div>
                                    <div class="item" data-value="node">NodeJS</div>
                                    <div class="item" data-value="plumbing">Plumbing</div>
                                    <div class="item" data-value="python">Python</div>
                                    <div class="item" data-value="rails">Rails</div>
                                    <div class="item" data-value="react">React</div>
                                    <div class="item" data-value="repair">Kitchen Repair</div>
                                    <div class="item" data-value="ruby">Ruby</div>
                                    <div class="item" data-value="ui">UI Design</div>
                                    <div class="item" data-value="ux">User Experience</div>
                                </div>
                            </div>
                        </div>
                        <div class="fltr-group">
                            <div class="fltr-items-heading">
                                <div class="fltr-item-left">
                                    <h6>Availability</h6>
                                </div>
                                <div class="fltr-item-right">
                                    <a href="#">Clear</a>
                                </div>
                            </div>
                            <div class="ui form">
                                <div class="grouped fields">
                                    <div class="field fltr-radio">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="example2" checked="checked">
                                            <label>Hourly</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="example2">
                                            <label>Part Time</label>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" name="example2">
                                            <label class="lst-label">Full Time</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fltr-group">
                            <div class="fltr-items-heading">
                                <div class="fltr-item-left">
                                    <h6>Job Type</h6>
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
                                <div class="default text">Select a job</div>
                                <div class="menu transition hidden" tabindex="-1">
                                    <div class="item selected" data-value="Job1">Skillpark Jobs</div>
                                    <div class="item" data-value="Job2">Skillpark Jobs</div>
                                    <div class="item" data-value="Job3">Skillpark Jobs</div>
                                    <div class="item" data-value="Job4">Skillpark Jobs</div>
                                    <div class="item" data-value="Job5">Skillpark Jobs</div>
                                    <div class="item" data-value="Job6">Skillpark Jobs</div>
                                    <div class="item" data-value="Job7">Skillpark Jobs</div>
                                </div>
                            </div>
                        </div>
                        <div class="fltr-group">
                            <div class="fltr-items-heading">
                                <div class="fltr-item-left">
                                    <h6>Pay Rate <span>(Rs. )</span></h6>
                                </div>
                                <div class="fltr-item-right">
                                    <a href="#">Clear</a>
                                </div>
                            </div>
                            <div class="filter-dd">
                                <div class="rg-slider">
                                    <input class="rn-slider slider-input" type="hidden" value="5,500" />
                                </div>
                                <div class="rg-limit">
                                    <h4>5</h4>
                                    <h4>5000</h4>
                                </div>
                            </div>
                        </div>
                        <div class="fltr-group fltr-gend">
                            <div class="fltr-items-heading">
                                <div class="fltr-item-left">
                                    <h6>Location</h6>
                                </div>
                                <div class="fltr-item-right">
                                    <a href="#">Clear</a>
                                </div>
                            </div>
                            <div class="ui fluid search selection dropdown skills-search">
                                <input type="hidden" name="city_id">
                                <div class="default text">Select City/District</div>
                                <i class="dropdown icon"></i>
                                <div class="menu transition hidden" tabindex="-1">
                                    @foreach ($cities as $city)
                                    <div class="item" data-value="{{ $city->id }}"><i
                                            class="af flag"></i>{{ $city->name }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="filter-button">
                            <button class="flr-btn">Search Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9 col-md-7 mainpage">
                <div class="main-tabs">
                    <div class="res-tabs">
                        <div class="mtab-left">
                            <ul class="browsr-project">
                                <li>
                                    <span class="nav-link">Search Results</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mtab-right">
                            <ul>
                                <li class="bp-block">
                                    <div class="ui selection dropdown skills-search sort-dropdown">
                                        <input name="gender" type="hidden" value="default">
                                        <i class="dropdown icon d-icon"></i>
                                        <div class="text">Sort By</div>
                                        <div class="menu">
                                            <div class="item" data-value="0">All</div>
                                            <div class="item" data-value="1">Top</div>
                                            <div class="item" data-value="2">Newest</div>
                                            <div class="item" data-value="3">Ranking</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="prjoects-content">
                        <div class="row">
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Rajesh Hamal</h4>
                                                </a>
                                                <span>UX Designer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 5000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
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
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Nitika Bhatta</h4>
                                                </a>
                                                <span>Wordpress Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 5000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
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
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Divesh Chhetri</h4>
                                                </a>
                                                <span>Php Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 6000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Ariana Grande</h4>
                                                </a>
                                                <span>Android Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 6000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Sanaya Sharma</h4>
                                                </a>
                                                <span>Accountant manager</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 3000/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg-item5 col-lg-4 col-xs-6 grid-group-item5">
                                <div class="job-item mt-30">
                                    <div class="job-top-dt1 text-center">
                                        <div class="job-center-dt">
                                            <img src="/images/spacer.jpg" alt="">
                                            <div class="job-urs-dts">
                                                <a href="#">
                                                    <h4>Hari Singh</h4>
                                                </a>
                                                <span>Front End Developer</span>
                                                <div class="avialable">About (To be Filled)</div>
                                            </div>
                                        </div>
                                        <div class="job-price hire-price">Rs. 2500/hr</div>
                                    </div>
                                    <div class="rating-location">
                                        <div class="left-rating">
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <ul class="link-btn">
                                            <li><a href="user-details" class="link-j1" title="View Profile">View
                                                    Profile</a></li>
                                            <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                            <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                        class="fas fa-heart"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="main-p-pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    PREV
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">24</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    NEXT
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Body End -->

<div class="featured-candidates py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="main-heading">
                    <h2>Featured Candidates</h2>
                    <span>Discover, Intelligent, Experienced, Professional, Trustworthy, Freelancer & Full Time
                        Candidates.</span>
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
                                <div class="job-top-dt1 text-center">
                                    <div class="job-center-dt">
                                        <img src="/images/spacer.jpg" alt="">
                                        <div class="job-urs-dts">
                                            <a href="#">
                                                <h4>Sushant Poudel</h4>
                                            </a>
                                            <span>UX Designer</span>
                                            <div class="avialable">About (To be Filled)</div>
                                        </div>
                                    </div>
                                    <div class="job-price hire-price">Rs. 5000/hr</div>
                                </div>
                                <div class="rating-location">
                                    <div class="left-rating">
                                        <div class="rtitle">Rating</div>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.9</span>
                                        </div>
                                    </div>
                                    <div class="right-location">
                                        <div class="text-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="job-buttons">
                                    <ul class="link-btn">
                                        <li><a href="user-details" class="link-j1" title="View Profile">View Profile</a>
                                        </li>
                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                    class="fas fa-heart"></i></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="job-item">
                                <div class="job-top-dt1 text-center">
                                    <div class="job-center-dt">
                                        <img src="/images/spacer.jpg" alt="">
                                        <div class="job-urs-dts">
                                            <a href="#">
                                                <h4>Nitika Bhatta</h4>
                                            </a>
                                            <span>Wordpress Developer</span>
                                            <div class="avialable">About (To be Filled)</div>
                                        </div>
                                    </div>
                                    <div class="job-price hire-price">Rs. 5000/hr</div>
                                </div>
                                <div class="rating-location">
                                    <div class="left-rating">
                                        <div class="rtitle">Rating</div>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.9</span>
                                        </div>
                                    </div>
                                    <div class="right-location">
                                        <div class="text-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="job-buttons">
                                    <ul class="link-btn">
                                        <li><a href="user-details" class="link-j1" title="View Profile">View Profile</a>
                                        </li>
                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                    class="fas fa-heart"></i></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="job-item">
                                <div class="job-top-dt1 text-center">
                                    <div class="job-center-dt">
                                        <img src="/images/spacer.jpg" alt="">
                                        <div class="job-urs-dts">
                                            <a href="#">
                                                <h4>Divesh Thaoa</h4>
                                            </a>
                                            <span>Php Developer</span>
                                            <div class="avialable">About (To be Filled)</div>
                                        </div>
                                    </div>
                                    <div class="job-price hire-price">Rs. 60000/hr</div>
                                </div>
                                <div class="rating-location">
                                    <div class="left-rating">
                                        <div class="rtitle">Rating</div>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5.0</span>
                                        </div>
                                    </div>
                                    <div class="right-location">
                                        <div class="text-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="job-buttons">
                                    <ul class="link-btn">
                                        <li><a href="user-details" class="link-j1" title="View Profile">View Profile</a>
                                        </li>
                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                    class="fas fa-heart"></i></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="job-item">
                                <div class="job-top-dt1 text-center">
                                    <div class="job-center-dt">
                                        <img src="/images/spacer.jpg" alt="">
                                        <div class="job-urs-dts">
                                            <a href="#">
                                                <h4>Simkhada Khatiwada</h4>
                                            </a>
                                            <span>Android Developer</span>
                                            <div class="avialable">About (To be Filled)</div>
                                        </div>
                                    </div>
                                    <div class="job-price hire-price">Rs. 6000/hr</div>
                                </div>
                                <div class="rating-location">
                                    <div class="left-rating">
                                        <div class="rtitle">Rating</div>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5.0</span>
                                        </div>
                                    </div>
                                    <div class="right-location">
                                        <div class="text-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="job-buttons">
                                    <ul class="link-btn">
                                        <li><a href="user-details" class="link-j1" title="View Profile">View Profile</a>
                                        </li>
                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                    class="fas fa-heart"></i></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="job-item">
                                <div class="job-top-dt1 text-center">
                                    <div class="job-center-dt">
                                        <img src="/images/spacer.jpg" alt="">
                                        <div class="job-urs-dts">
                                            <a href="#">
                                                <h4>Sanaya Sharma</h4>
                                            </a>
                                            <span>Accountant manager</span>
                                            <div class="avialable">About (To be Filled)</div>
                                        </div>
                                    </div>
                                    <div class="job-price hire-price">Rs. 30000/hr</div>
                                </div>
                                <div class="rating-location">
                                    <div class="left-rating">
                                        <div class="rtitle">Rating</div>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>4.0</span>
                                        </div>
                                    </div>
                                    <div class="right-location">
                                        <div class="text-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="job-buttons">
                                    <ul class="link-btn">
                                        <li><a href="user-details" class="link-j1" title="View Profile">View Profile</a>
                                        </li>
                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                    class="fas fa-heart"></i></button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="job-item">
                                <div class="job-top-dt1 text-center">
                                    <div class="job-center-dt">
                                        <img src="/images/spacer.jpg" alt="">
                                        <div class="job-urs-dts">
                                            <a href="#">
                                                <h4>Aakash Jha</h4>
                                            </a>
                                            <span>Front End Developer</span>
                                            <div class="avialable">About (To be Filled)</div>
                                        </div>
                                    </div>
                                    <div class="job-price hire-price">Rs. 2500/hr</div>
                                </div>
                                <div class="rating-location">
                                    <div class="left-rating">
                                        <div class="rtitle">Rating</div>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5.0</span>
                                        </div>
                                    </div>
                                    <div class="right-location">
                                        <div class="text-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="job-buttons">
                                    <ul class="link-btn">
                                        <li><a href="user-details" class="link-j1" title="View Profile">View Profile</a>
                                        </li>
                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i
                                                    class="fas fa-heart"></i></button></li>
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

<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>
@endsection