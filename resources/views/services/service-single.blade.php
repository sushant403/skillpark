{{-- @extends( (Auth::user()) ? 'layouts.freelancers.freelancermaster' : 'layouts.master') --}}
@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="/css/style.css">
@guest
<div class="space-top-1 mt-6"></div>
@else
<div class=""></div>
@endguest
<div class="third-menu ">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-9 left">
                <ul>
                    <li class="nav-overview selected"><a href="#overview">Overview</a></li>
                    <li class="nav-description"><a href="#description">Description</a></li>
                    <li class="nav-aboutSeller"><a href="#aboutSeller">About The Seller</a></li>
                    <li class="nav-recommendations"><a href="#recommendations">Recommendations</a></li>
                </ul>
            </div>
            <div class="col-lg-3 right">
                <ul class="d-flex align-items-center justify-content-end">
                    <li>
                        <button>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            Save
                        </button>
                    </li>
                    <li class="ml-2">
                        <button>
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                            Share
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 left">
                <h2>{{ $job->title }}</h2>
                <div class="slider mt-2">
                    <div id="aniimated-thumbnials" class="slider-for slick-slider-single">
                        <a href="/images/svg/discussion-scene.svg">
                            <img class="img-fluid" width="450" src="/images/svg/discussion-scene.svg" />
                        </a>
                    </div>
                </div>
                <div id="description" class="description">
                    <h3>About This Gig</h3>
                    <p>I have 7+ years of experience in Mobile App & Web Wireframing & Mobile app UI</p>
                    <p>I will create a Clickable Mobile App Wireframe in the Marvel app. Marvel is the best platform to
                        create Mobile App Interactive Wireframes
                    </p>
                    <p>We specialize in UX Design, UI Design, Usability Testing, Wireframing, and Prototyping. In our
                        work
                        we try to transform highly complex concepts into simple, approachable applications. I believe
                        that
                        it is important to create things that look and feel great.
                    </p>
                    <p>It'll help you to demonstrate your idea to your developers or Investors. Why don't we do
                        something
                        together?
                    </p>
                </div>
                <ul class="metadata">
                    <li class="metadata-attribute">
                        <p>Main Type</p>
                        <ul>
                            <li>Websites</li>
                            <li>Mobile Apps</li>
                        </ul>
                    </li>
                    <li class="metadata-attribute">
                        <p>Image File Format</p>
                        <ul>
                            <li>JPG</li>
                            <li>PNG</li>
                            <li>PSD</li>
                        </ul>
                    </li>
                </ul>
                <h3 id="aboutSeller">About The Seller</h3>
                <div class="profile-card">
                    <div class="user-profile-image d-flex">
                        <label class="profile-pict" for="profile_image">
                            <img src="" class="profile-pict-img img-fluid" alt="">
                        </label>
                        <div class="right">
                            <div class="profile-name">
                                <span class="user-status">
                                    <a href="#" class="seller-link"></a>
                                </span>
                                <div class="seller-level"></div>
                            </div>
                            <div class="user-info">
                                <span class="user-info-rating d-flex align-items-center">
                                    <div class="star-rating-s15-wrapper">
                                        <i class="fa fa-map-marker"></i> Kathmandu
                                    </div>
                                </span>
                                <a href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="stats-desc">
                        <ul class="user-stats">
                            <li>From<strong>Kathmandu</strong></li>
                            <li>Member since<strong></strong></li>
                        </ul>
                        <article class="seller-desc">
                            <div class="inner">- Wireframes for mobile apps &amp; Website <br />
                                - Flowcharts for the whole system <br />
                                - Mobile app prototypes, interactive UI designs <br />
                                - UI for social media postings <br />
                                - Design an app to achieve a business objective (web or mobile). <br />
                                - Design or re-design a website to grow revenue, close more sales and generate more
                                leads.
                                <br />
                                - Optimize their existing website with a conversion rate audit and strategy. <br />
                                - Design a high converting landing page. <br />
                                <span>Excellent communication and availability.
                                    Reach me any time during our project on Whatsapp, Skype, Text or any other
                                    messenger.</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div id="faq" class="faq">
                    <h3>FAQ</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Some Custom Skillpark User Question
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                    squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                    craft
                                    beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher
                                    vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Some Custom Skillpark User Question
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad
                                    squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                    quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                    squid
                                    single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                    craft
                                    beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher
                                    vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                    nesciunt
                                    you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <h3>Related tags</h3>
                    <ul class="d-flex">
                        <li>
                            <a href="#">Mobile Ui</a>
                        </li>
                        <li>
                            <a href="#">UI/UX</a>
                        </li>
                        <li>
                            <a href="#">Prototype</a>
                        </li>
                        <li>
                            <a href="#">Wireframes</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 right">
                <div class="sticky">
                    <div class="tab-content">
                        <div id="basic" class="tab-pane fade show active">
                            <div class="header">
                                <h3><b class="title">10 Screens</b><span class="price">Rs. 8,029</span></h3>
                                <p>I will design rough sketches for upto 5 Screens of your website/Mobile app.
                                </p>
                            </div>
                            <article>
                                <div class="d-flex">
                                    <b class="delivery"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 Days
                                        Delivery</b>
                                    <b class="delivery ml-3"><i class="fa fa-refresh" aria-hidden="true"></i> 1
                                        Revision</b>
                                </div>
                                <ul class="features">
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>Source
                                        File
                                    </li>
                                    <li class="feature included"><i class="fa fa-check"
                                            aria-hidden="true"></i>Commercial
                                        Use
                                    </li>
                                    <li class="feature included"><i class="fa fa-check"
                                            aria-hidden="true"></i>Interactive
                                        Mockup
                                    </li>
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>10
                                        Pages
                                    </li>
                                </ul>
                            </article>
                            <button>Continue {{ $job->budget }}</button>
                        </div>
                    </div>
                    <div class="contact-seller-wrapper">
                        <a class="fit-button" href="#">Contact Seller</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div id="recommendations" class="view_slider recommended">
            <h3>People Who Viewed This Service Also Viewed</h3>


        </div>
    </div>
</div>

@endsection