@extends('layouts.clients.clientmaster')

@section('content')

<link rel="stylesheet" media="screen" href="/css/theme.css">
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="position-relative">
        <div class="bg-img-hero" style="background-image: url(/images/svg/components/abstract-shapes-12.svg);">
            <div class="container space-top-2 space-top-lg-2 space-bottom-2 position-relative z-index-2">
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-3 mb-md-9">
                    <h2>Post Job</h2>
                    <p>We'll help you connect to the most qualifed freelancers.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                        <!-- Card -->
                        <a class="card text-center h-100 transition-3d-hover" href="#">
                            <div class="card-body p-lg-5">
                                <figure class="max-w-8rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-7.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">Diverse Talents</h3>
                                <p class="text-body mb-0">Find the freelancer with the specific requried skillset.</p>
                            </div>
                            <div class="card-footer font-weight-bold py-3 px-lg-5">
                                Learn More <i class="fas fa-angle-right fa-sm ml-1"></i>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                        <!-- Card -->
                        <a class="card text-center h-100 transition-3d-hover" href="#">
                            <div class="card-body p-lg-5">
                                <figure class="max-w-8rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-4.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">Bid and Connect</h3>
                                <p class="text-body mb-0">Let the freelancers bid on your project and you get to choose
                                    the best.</p>
                            </div>
                            <div class="card-footer font-weight-bold py-3 px-lg-5">
                                Learn More <i class="fas fa-angle-right fa-sm ml-1"></i>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>

                    <div class="col-md-4 mb-md-n11">
                        <!-- Card -->
                        <a class="card text-center h-100 transition-3d-hover" href="#">
                            <div class="card-body p-lg-5">
                                <figure class="max-w-8rem w-100 mx-auto mb-4">
                                    <img class="img-fluid" src="/images/svg/icons/icon-44.svg" alt="SVG">
                                </figure>
                                <h3 class="h4">Simplified Payments</h3>
                                <p class="text-body mb-0">Your money is safe with us, until the project is completed.
                                </p>
                            </div>
                            <div class="card-footer font-weight-bold py-3 px-lg-5">
                                Learn More <i class="fas fa-angle-right fa-sm ml-1"></i>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Shape -->
        <figure class="position-absolute bottom-0 right-0 left-0">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
                <polygon fill="#fff" points="0,273 1921,273 1921,0 " />
            </svg>
        </figure>
        <!-- End SVG Shape -->
    </div>
    <!-- End Hero Section -->


    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Title -->
        <div class="w-md-80 py-4 py-lg-7 mt-lg-7 space-top-2 w-lg-50 text-center mx-md-auto ">
            <h2>Provide information about your project/business</h2>
            <p>To find the specific group of talents, narrow down the information and options.</p>
        </div>
        <!-- End Title -->

        <!-- Project Submission Form Section -->
        <div class="container space-bottom-lg-3">
            <form method="POST" action="{{ route('post-project') }}" class="js-validate row justify-content-lg-center">
                @csrf
                <div class="col-lg-8">
                    <!-- Input -->
                    <div class="js-form-message mb-4 mb-md-6">
                        <label class="input-label">Project Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Eg. Flutter App.." required
                            data-msg="Please enter name of your project">
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="js-form-message mb-4 mb-md-6">
                        <label class="input-label">Description about your project</label>
                        <textarea class="form-control" rows="5" name="description"
                            placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..."
                            required data-msg="Please enter the description of your project"></textarea>
                    </div>
                    <!-- End Input -->

                    <!-- Category Custom Select -->
                    <div class="js-form-message mb-4 mb-md-6">
                        <label class="input-label">Choose the related Category</label>
                        <select class="form-control custom-select" name="category_id" id="category" title="Choose Category" required data-msg="Please select category.">
                            <option selected disabled>Choose Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- End Category Custom Select -->

                    <!-- Input -->
                    <div class="mb-4 mb-md-6">
                        <label class="input-label">Company name <span
                                class="text-muted font-weight-normal ml-1">(optional)</span></label>
                        <input type="text" class="form-control" placeholder="Eg. Skillpark Inc."
                            aria-label="Skillpark Inc.">
                    </div>
                    <!-- End Input -->

                    <!-- Platform -->
                    <div class="mb-4 mb-md-6">
                        <label class="input-label">Choose your Delivery Time <span
                                class="text-muted font-weight-normal ml-1"></span></label>

                        <!-- Button Group -->
                        <div class="btn-group btn-group-toggle btn-group-segment d-flex" data-toggle="buttons">
                            <label class="btn flex-fill active">
                                <input type="radio" name="delivery_time" value="48 Hours" checked> Express 48 Hours
                            </label>
                            <label class="btn flex-fill active">
                                <input type="radio" name="delivery_time" value="7 Days"> Within a week
                            </label>
                            <label class="btn flex-fill active">
                                <input type="radio" name="delivery_time" value="Upon Discussion"> Will Discuss Later
                            </label>
                        </div>
                        <!-- End Button Group -->
                    </div>
                    <!-- End Platform -->

                    <!-- Budget Custom Select -->
                    <div class="js-form-message mb-4 mb-md-6">
                        <label class="input-label">Your Estimated Budget?</label>
                        <select class="form-control custom-select" name="budget" data-msg="Please select your budget.">
                            <option value="Upto 20K" selected>Rs. 5,000 to Rs. 20,000</option>
                            <option value="Upto 50K" selected>Rs. 20,000 to Rs. 50,000</option>
                            <option value="Upto 100K">Rs. 50,000 to Rs. 1,00,000</option>
                            <option value="Upto 200K">Rs. 1,00,000 to Rs. 2,00,000</option>
                            <option value="200K Plus">Rs. 2,00,000+</option>
                        </select>
                    </div>
                    <!-- End Budget Custom Select -->

                    <div class="text-center">
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <p class="small">By clicking 'Submit', you agree to the <a href="terms">Terms & Conditions</a>
                            and <a href="policy"> Privacy Policy </a></p>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Project Submission Form Section -->
    </main>
</main>
@endsection