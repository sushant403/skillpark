@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="/css/teamstyle.css">


<body background="images/team/teambg.jpg">
    <!-- partial:index.partial.html -->
    <!-- START TEAM -->
    <section id="team">
        <div class="container">
            <div style="margin-top: 30px;"></div>
            <div class="row">
                <div class="col-md-5 col-sm-12 pull-right">
                    <div class="team-section-text">
                        <div class="section-count">
                            <span>07</span>
                        </div>
                        <!-- END section-count-->
                        <div class="section-text">
                            <h2 class="section-title">Team Alpha</h2>
                            <p style="font: 18px;">
                                The team that created KonnectFord, Enigma Club, OKTraders, OVS and much much more.
                            </p>
                        </div>
                        <!-- END section-text-->
                    </div>
                    <!-- END team-section-text-->
                </div>
                <!-- END col-md-5 col-sm-12 pull-right-->
                <div class="col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="team-list">
                                <ul>
                                    <li class="active wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
                                        <a href="#team-1" data-team="team-1">
                                            <figure>
                                                <img src="images/team/sushant.jpg" alt="Team Member image three">
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="wow zoomIn" data-wow-duration="1s" data-wow-delay=".1s">
                                        <a href="#team-2" data-team="team-2">
                                            <figure>
                                                <img src="images/team/nitika.jpg" alt="Team Member image One">
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                                        <a href="#team-3" data-team="team-3">
                                            <figure>
                                                <img src="images/team/divesh.jpg" alt="Team Member image two">
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END team-list-->
                        </div>
                        <!-- END col-sm-4-->
                        <div class="col-md-9 col-sm-8">

                            <div id="team-1" class="team-single active">
                                <div class="team-img">
                                    <img src="images/team/sushant.jpg" alt="">
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="https://facebook.com/sushantpdll" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://instagram.com/sushant_pdll" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://twitter.com/sushant_pdll" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="mailto:sushantpaudel@gmail.com" target="_blank"><i class="fab fa-google"></i></a></li>
                                            <li><a href="https://github.com/sushantpoudel98" target="_blank"><i class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END team-social-->
                                </div>
                                <!-- END team-img-->
                                <div class="team-info text-center">
                                    <h4>Sushant Poudel</h4>
                                    <p>Co-Founder, CEO, Developer</p>
                                </div>
                                <!-- END team-info-->
                            </div>
                            <!-- END team-single-->

                            <div id="team-2" class="team-single">
                                <div class="team-img">
                                    <img src="images/team/nitika.jpg" alt="">
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="https://facebook.com/nitika.bhatta.56" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/nitikabhatta" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="mailto:nitikabhatta0901@gmail.com" target="_blank"><i class="fab fa-google"></i></a></li>
                                            <li><a href="https://instagram.com/nitikabhatta" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END team-social-->
                                </div>
                                <!-- END team-img-->
                                <div class="team-info text-center">
                                    <h4>Nitika Bhatta</h4>
                                    <p>Co-Founder, CTO</p>
                                </div>
                                <!-- END team-info-->
                            </div>
                            <!-- END team-single-->


                            <div id="team-3" class="team-single">
                                <div class="team-img">
                                    <img src="/images/team/divesh.jpg" alt="">
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="https://facebook.com/dbasechhetri" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/dbasechhetri" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="mailto:dthapa007@gmail.com" target="_blank"><i class="fab fa-google"></i></a></li>
                                            <li><a href="https://kasari678290104.wordpress.com/" target="_blank"><i class="fab fa-wordpress"></i></a></li>
                                            <li><a href="https://github.com/dbasechhetri" target="_blank"><i class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END team-social-->
                                </div>
                                <!-- END team-img-->
                                <div class="team-info text-center">
                                    <h4>Divesh Thapa</h4>
                                    <p>Co-Founder, Designer, COO</p>
                                </div>
                                <!-- END team-info-->
                            </div>
                            <!-- END team-single-->

                        </div>
                        <!-- END col-sm-8-->
                    </div>
                    <!-- END row-->
                </div>
                <!-- END col-md-7 col-sm-12 -->
            </div>
            <!-- END row-->
        </div>
        <!-- END container-->
    </section>
    <!-- END team-->
    <!-- END TEAM -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="/css/teamscript.js"></script>


    <script>
        document.title = 'Skillpark Inc - Creators';
    </script>
    @endsection