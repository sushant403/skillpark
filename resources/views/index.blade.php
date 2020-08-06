@extends('layouts.master')

@section('content')

<!-- Page content-->
<!-- Hero-->
<section class="position-relative bg-faded-primary pt-6 space-top-3 pb-5 pb-md-6 pb-lg-7 overflow-hidden">
    <div class="cs-shape cs-shape-bottom cs-shape-curve bg-body">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z">
            </path>
        </svg>
    </div>
    <div class="container pt-7 pt-md-5 pt-lg-0">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                <h1 class="mb-3" style="font-size: 2.2rem">{{ __('nepali.Seek the perfect freelancer talents for your business!') }}</h1>
                <p class="font-size-lg text-muted mb-4">{{ __('nepali.Hire expert freelancers for any job, any time') }}.</p>
                <form class="d-flex pt-4 mx-auto mx-lg-0" style="max-width: 540px;">
                    <input class="form-control mr-3" type="email" placeholder="{{ __('nepali.Search for Services') }}.." required>
                    <button class="btn btn-success" type="submit">{{ __('nepali.Search') }}</button>
                </form>
            </div>
            <div class="col-xl-5 offset-1 col-lg-5 pt-6 d-none d-lg-block">
                <img class="rounded" height="700" src="images/svg/banner.svg" alt="Screenshot" />
            </div>
        </div>
    </div>
</section>
<!-- Features section #1-->
<section class="container py-5 py-md-6 py-lg-7">
    <div class="row pt-2">
        <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" width="56"
                    src="/img/demo/software-landing/icons/01.svg" alt="Simple" />
                <h3 class="h5">Searching the Best Job</h3>
                <p class="font-size-sm mb-0">Find Jobs according to categories and work on what best qualifies your
                    skills and
                    payments you deserve.</p>
            </div>
        </div>
        <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" width="56"
                    src="/img/demo/software-landing/icons/02.svg" alt="Fast" />
                <h3 class="h5">Quality Hires</h3>
                <p class="font-size-sm mb-0">Thousands of Qualified Freelancers ready for your projects and business.
                    Either find them
                    or let them bid.</p>
            </div>
        </div>
        <div class="col-sm-4 mb-grid-gutter pb-1">
            <div class="mx-auto text-center" style="max-width: 278px;"><img class="d-inline-block mb-3" width="67"
                    src="/img/demo/software-landing/icons/03.svg" alt="Organized" />
                <h3 class="h5">Simplified Payment</h3>
                <p class="font-size-sm mb-0">Using the national payment system, now the payments are faster and more
                    secure. Contracts
                    are there to backup.</p>
            </div>
        </div>
    </div>
</section>
<!-- Icon + text-->
<section class="container pt-3 pb-4 mt-3 mt-md-0 mb-md-3 pb-md-5 pt-md-5">
    <h2 class="text-center mb-6">Explore the Marketplace</h2>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-9.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6">Sales and Marketing</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-16.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6">Web Development</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-17.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6">Transalation</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-7.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6"> Architecture Design</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-11.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6">Financial Advices</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-13.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6"> Blogs Writing</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-14.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6"> Legal Advices</h3>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="mx-auto mb-5 text-center" style="max-width: 150px;"><img class="mb-3" width="60"
                    src="/images/homepage/categories/icon-15.svg" alt="Icon" />
                <a href="">
                    <h3 class="h6"> Networking</h3>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Features section #2-->
<section class="container py-5 py-md-6 py-lg-7">
    <div class="row align-items-center pt-3 pt-md-0">
        <div class="d-none d-lg-block col-lg-6"><img class="d-block mx-auto" src="/images/svg/ipad.svg" alt="Features" />
        </div>
        <div class="col-xl-5 offset-1 col-md-5 pt-5 pt-md-0">
            <h2 class="mb-3 text-center text-md-left">Organized Transparency</h2>
            <p class="text-center text-md-left">Modern dynamic dashboard allows you to track your project's activity for
                you to always
                stay updated.</p>
                <div class="row pt-5">
                    <div class="col-6 pb-1 mb-grid-gutter"><img class="d-block mb-3" width="29" src="img/demo/software-landing/icons/04.svg" alt="Easy to edit" />
                        <h3 class="h6">Easy to Post</h3>
                        <p class="font-size-sm mb-0">Posting Project Info has never been this simple and secure.</p>
                    </div>
                    <div class="col-6 pb-1 mb-grid-gutter"><img class="d-block mb-3" width="28" src="img/demo/software-landing/icons/05.svg" alt="Upload files" />
                        <h3 class="h6">Upload files</h3>
                        <p class="font-size-sm mb-0">Represent your ideas with files like images, docs.</p>
                    </div>
                    <div class="col-6 pb-1 mb-grid-gutter"><img class="d-block mb-3" width="26" src="img/demo/software-landing/icons/06.svg" alt="Control schedule" />
                        <h3 class="h6">Control Bidding</h3>
                        <p class="font-size-sm mb-0">Let the talents come to you, choose the most qualified ones.</p>
                    </div>
                    <div class="col-6 pb-1 mb-grid-gutter"><img class="d-block mb-3" width="36" src="img/demo/software-landing/icons/07.svg" alt="Mark tasks" />
                        <h3 class="h6">Mark tasks</h3>
                        <p class="font-size-sm mb-0">Tasks and Projects are there with contracts backing up.</p>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- Solutions-->
<section class="container bg-overlay-content pt-5 pt-md-6 pt-lg-7">
    <h2 class="text-center pt-3 pt-md-0 mb-5">More solutions for you</h2>
    <div class="row">
        <div class="col-sm-6 mb-grid-gutter">
            <div class="bg-light box-shadow rounded-lg py-5 px-4">
                <div class="media d-block d-xl-flex align-items-center px-lg-3 py-xl-2 text-center text-sm-left">
                    <img class="d-inline-block mb-3 mb-xl-0" width="140" src="/img/demo/software-landing/team.png"
                        alt="Team" />
                    <div class="media-body pl-xl-3 ml-xl-3">
                        <h3 class="h4 text-primary pb-1">For Employers</h3>
                        <p>Place your idea or project and find your skiller.</p><a class="nav-link-style" href="#">Read more<i
                                class="fa fa-chevron-right sm font-size-xl ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-grid-gutter">
            <div class="bg-light box-shadow rounded-lg py-5 px-4">
                <div class="media d-block d-xl-flex align-items-center px-lg-3 py-xl-2 text-center text-sm-left">
                    <img class="d-inline-block mb-3 mb-xl-0" width="140" src="/img/demo/software-landing/freelancer.png"
                        alt="Freelancer" />
                    <div class="media-body pl-xl-3 ml-xl-3">
                        <h3 class="h4 text-primary pb-1">For Freelancers</h3>
                        <p>Grab the platform to enrich your potentical and turn your passion into profession.</p><a class="nav-link-style" href="#">Read more<i
                                class="fa fa-chevron-right sm font-size-xl ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Q&A-->
<section class="position-relative bg-faded-primary py-5 py-md-6 py-lg-7" style="margin-top: -200px;">
    <div style="height: 200px;"></div>
    <div class="cs-shape cs-shape-top cs-shape-curve bg-body">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
            <path fill="currentColor" d="M3000,185.4V0H0v185.4C496.4,69.8,996.4,12,1500,12S2503.6,69.8,3000,185.4z">
            </path>
        </svg>
    </div>
    <div class="container mt-n4 py-3 py-md-2">
        <h2 class="text-center mb-5">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="accordion accordion-alt" id="faq">
                    <div class="card border-0 box-shadow card-active">
                        <div class="card-header">
                            <h3 class="accordion-heading"><a href="#faq-1" role="button" data-toggle="collapse"
                                    aria-expanded="true" aria-controls="faq-1">Can I post jobs and projects for free?<span class="accordion-indicator"></span></a></h3>
                        </div>
                        <div class="collapse show" id="faq-1" data-parent="#faq">
                            <div class="card-body font-size-sm">
                                <p>Yes! This is the right place to post your jobs and projects.</p>
                                <p class="mb-0">Before that! Don't forget to register in our system member.You are always welcome here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 box-shadow">
                        <div class="card-header">
                            <h3 class="accordion-heading"><a class="collapsed" href="#faq-2" role="button"
                                    data-toggle="collapse" aria-expanded="true" aria-controls="faq-2">What are
                                    the requirement to choose freelancers?<span class="accordion-indicator"></span></a></h3>
                        </div>
                        <div class="collapse" id="faq-2" data-parent="#faq">
                            <div class="card-body font-size-sm">
                                <p>First of all !</p>
                                <p class="mb-0">Register yourself and then choose your category and skill you are looking for your project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 box-shadow">
                        <div class="card-header">
                            <h3 class="accordion-heading"><a class="collapsed" href="#faq-3" role="button"
                                    data-toggle="collapse" aria-expanded="true" aria-controls="faq-3">How to find freelancers of various categories?<span class="accordion-indicator"></span></a>
                            </h3>
                        </div>
                        <div class="collapse" id="faq-3" data-parent="#faq">
                            <div class="card-body font-size-sm">
                                <p>Pretty Simple !</p>
                                <p class="mb-0">Point to the Service and Category section in our header at the top of page. You can Choose there.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 box-shadow">
                        <div class="card-header">
                            <h3 class="accordion-heading"><a class="collapsed" href="#faq-4" role="button"
                                    data-toggle="collapse" aria-expanded="true" aria-controls="faq-4">Is it possible
                                    to upload files from Google Drive?<span class="accordion-indicator"></span></a>
                            </h3>
                        </div>
                        <div class="collapse" id="faq-4" data-parent="#faq">
                            <div class="card-body font-size-sm">
                                <p>Yes !</p>
                                <p class="mb-0">For accessibility of all, we have included feature there .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get Started on Skillpark -->
<section class="bg-faded-primary">
    <div class="container pb-7 md-0">
        <div class="row align-items-center pb-3 pb-md-0">
            <div class="col-md-6 col-lg-6 pb-5 pb-md-0">
                <div class="mx-auto mx-md-0" style="max-width: 495px;"><img src="images/svg/login.svg"
                        alt="Buy on Amazon" />
                </div>
            </div>
            <div class="col-md-6 col-lg-6 text-center">
                <h2>Thousands of businesses trust Skillpark for their business.</h2>
                <p class="font-size-sm text-muted pb-2">Register, Hire, Get the Job Done!</p>
                @guest
                <a class="btn btn-primary"
                    href="{{ route('register') }}">Join Now</a>
                    @else
                <a class="btn btn-primary"
                    href="{{ route('home') }}">Dashboard</a>
                @endguest
            </div>
        </div>
    </div>
</section>

@endsection