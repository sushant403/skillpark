@extends('layouts.master')
@section('content')
<!--FAQ-->
<section class="position-relative">
    <div style="height: 150px;"></div>
    <div class="container mt-n4 py-3 py-md-2">
        <h2 class="text-center mb-5">Questions &amp; Answers</h2>
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
                                <p class="mb-0">For accessibility of all, we have included feature there.</p>
                            </div>
                        </div>
                    <div class="card border-0 box-shadow">
                        <div class="card-header">
                            <h3 class="accordion-heading"><a class="collapsed" href="#faq-5" role="button"
                                    data-toggle="collapse" aria-expanded="true" aria-controls="faq-4">How time matters?<span class="accordion-indicator"></span></a>
                            </h3>
                        </div>
                        <div class="collapse" id="faq-5" data-parent="#faq">
                            <div class="card-body font-size-sm">
                                <p>Be honest about availability.</p>
                                <p class="mb-0">On that basis, we determine your involment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection