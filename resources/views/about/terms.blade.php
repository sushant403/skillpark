@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="/css/main.css">

<div class="container">
    <div class="row" style="padding-top: 8rem;">
        <div class="col-12 col-md-7 col-lg-8 col-xl-9">
            <div class="privacy">
                <h2 class="privacy__title">Privacy policy</h2>

                <p class="privacy__text">It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                    making it look like readable English.</p>

                <p class="privacy__text">Many desktop publishing packages and <a href="#">web page</a> editors now use
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                    still in their infancy. Various versions have evolved over the years, sometimes by accident,
                    sometimes on purpose (injected humour and the like).</p>

                <p class="privacy__text">All the Lorem Ipsum generators on the <b>Internet</b> tend to repeat predefined
                    chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                    over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                    which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected
                    humour, or non-characteristic words etc.</p>

                <div class="privacy__list">
                    <ol>
                        <li>
                            <h4>Determination of personal information of users</h4>
                            <ol>
                                <li>If you are going to use a passage of Lorem Ipsum:
                                    <ol>
                                        <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                            chunks as necessary, making this the first true generator on the Internet.
                                        </li>
                                        <li>It uses a dictionary of over 200 Latin words, combined with a handful of
                                            model sentence structures, to generate Lorem Ipsum which looks reasonable.
                                            The generated Lorem Ipsum is therefore always free from repetition, injected
                                            humour, or non-characteristic words etc.</li>
                                    </ol>
                                </li>
                                <li>There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable.</li>
                                <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem ipsum' will uncover many web sites still
                                    in their infancy. Various versions have evolved over the years, sometimes by
                                    accident, sometimes on purpose (injected humour and the like).</li>
                            </ol>
                        </li>

                        <li>
                            <h4>Reasons for collecting and processing user personal information</h4>
                            <ol>
                                <li>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters.</li>
                                <li>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                    necessary, making this the first true generator on the Internet:
                                    <ol>
                                        <li>It has survived not only five centuries, but also the leap into electronic
                                            typesetting, remaining essentially unchanged;</li>
                                        <li>It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages;</li>
                                        <li>Various versions have evolved over the years, sometimes by accident,
                                            sometimes on purpose (injected humour and the like);</li>
                                        <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                            their default model text;</li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-5 col-lg-4 col-xl-3">
            <!-- sidebox -->
            <div class="sidebox sidebox--desk">
                <h4 class="sidebox__title">FAQ</h4>
                <div class="sidebox__content">
                    <div class="sidebox__faq">
                        <h5>Is there a fee to post a project?</h5>
                        <p>There are pricing plans monthly and yearly for project on skillpark. It is a paid service that
                            we offer bith for the employer and the freelancer.</p>
                    </div>
                    <div class="sidebox__faq">
                        <h5>How do I find freelancers for my project?</h5>
                        <p>Posting a project on skillpark will get your project in front of the most qualified
                            freelancers and agencies by bids. You will then get bids for the project with the
                            applicant’s details and reasons why they are the best fit for the projects. You can also
                            search for freelancers and invite them to apply.</p>
                    </div>
                    <div class="sidebox__faq">
                        <h5>How do I pay freelancers & agencies?</h5>
                        <p>You’re free to pay your freelancer and agencies. you can pay automatically for their work
                            through Paypal, Payoneer, or (which allows you to pay via credit card, debit card).</p>
                    </div>
                </div>
                <a href="#" class="sidebox__more">View more</a>
            </div>
            <!-- end sidebox -->
        </div>
    </div>
</div>
</main>
<!-- end main content -->



@endsection