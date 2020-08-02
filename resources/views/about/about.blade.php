@extends('layouts.master')

@section('content')

<style>
    .circular--portrait {
        position: relative;
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 50%;
        margin-left: 25%;
        margin-bottom: 3%;
    }

    .circular--portrait img {
        width: 100%;
        height: auto;
    }
</style>

<!-- Body Start -->
<main class="browse-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-heading">
                    <h2>About Us</h2>
                    <div class="line-shape1">
                        <img src="images/line.svg" alt="">
                    </div>
                </div><!-- About -->
                <section class="py-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="pl-4 col-lg-5 col-md-5 pr-4">
                                <img class="rounded img-fluid" src="/images/add/about.jpg" alt="Card image cap">
                            </div>
                            <div class="col-lg-6 col-md-6 pl-5 pr-5">
                                <h2 class="mb-5">The leading global marketplace for learning and instructions.
                                </h2>
                                <h5 class="mt-2">Our Vision</h5>
                                <p>SKILLPARK INC. is a incorporated company which is legally acceptable nationwide. The application is a Nepal National Payment Gateway Verified website. Trusted by the Government of Nepal. © Skillpark Inc.
                                    </p>
                                <h5 class="mt-4">Our Goal</h5>
                                <p>When looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here,</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About -->
            </div>
        </div>
    </div>
    <div class="choose_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="choose_left">
                        <div class="main-heading bids_heading">
                            <h2>Why Choose Us</h2>
                            <div class="line-shape1">
                                <img src="images/line.svg" alt="">
                            </div>
                        </div>
                        <div class="choose_des">
                            <p>Fusce dictum mauris nec magna consequat, ut semper leo pulvinar. Cras rhoncus lorem
                                lorem, a fermentum lacus congue vehicula. Nullam luctus mi eget nisl tincidunt lobortis.
                            </p>
                            <ul>
                                <li>
                                    <div class="abt142">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Cras rhoncus lorem lorem, a fermentum lacus congue vehicula. Nullam luct us
                                            mi eget nisl tincidunt lobortis.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="abt142">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Cras rhoncus lorem lorem, a fermentum lacus congue vehicula. Nullam luct us
                                            mi eget nisl tincidunt lobortis.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/h2JcePh7vls" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our_team">
        <div class="container">
            <div class="row">
                <!-- Trusted Agents -->
                <section class="py-5">
                    <div class="section-title text-center mb-5">
                        <h2>Team Members</h2>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                        <p>Creators, Developers and Owners of Skillpark Inc.</p>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="agents-card text-center">
                                    <div class="circular--portrait">
                                        <img class="mb-4" src="/images/team/divesh.jpg" alt="">
                                    </div>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been.</p>
                                    <h6 class="mb-0 text-success">- Divesh Thapa</h6>
                                    <small>Designer</small>
                                    <ul class="team_links">
                                        <li><a href="https://facebook.com/dbasechhetri" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/dbasechhetri" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="mailto:dthapa007@gmail.com" target="_blank"><i class="fab fa-google"></i></a></li>
                                        <li><a href="https://kasari678290104.wordpress.com/" target="_blank"><i class="fab fa-wordpress"></i></a></li>
                                        <li><a href="https://github.com/dbasechhetri" target="_blank"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="agents-card text-center">
                                    <div class="circular--portrait">
                                        <img class="mb-4" src="/images/team/nitika.jpg" alt="">
                                    </div>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been.</p>
                                    <h6 class="mb-0 text-success">- Nitika Bhatta</h6>
                                    <small>Database Engineer</small>
                                    <ul class="team_links">
                                        <li><a href="https://facebook.com/nitika.bhatta.56" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/nitikabhatta" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="mailto:nitikabhatta0901@gmail.com" target="_blank"><i class="fab fa-google"></i></a></li>
                                        <li><a href="https://instagram.com/nitikabhatta" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="agents-card text-center">
                                    <div class="circular--portrait">
                                        <img class="mb-4" src="/images/team/sushant.jpg" alt="">
                                    </div>
                                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. Lorem Ipsum has been.</p>
                                    <h6 class="mb-0 text-success">- Sushant Poudel</h6>
                                    <small>Developer</small>
                                    <ul class="team_links">
                                        <li><a href="https://facebook.com/sushantpdll" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://instagram.com/sushant_pdll" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://twitter.com/sushant_pdll" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="mailto:sushantpaudel@gmail.com" target="_blank"><i class="fab fa-google"></i></a></li>
                                        <li><a href="https://github.com/sushantpoudel98" target="_blank"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Trusted Agents -->
            </div>
        </div>
    </div>
</main>
<!-- Body End -->



@endsection