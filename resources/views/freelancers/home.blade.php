@extends('layouts.freelancers.freelancermaster')

@section('content')

<link rel="stylesheet" href="/css/main.css">
<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>

<main class="bg-light" role="main" id="content">
<div class="container" style="padding-top: 20px;">
    <div class="row">
        <div class="col-12 col-md-5 col-lg-4 col-xl-3">

        </div>

        <div class="col-12 col-md-7 col-lg-8 col-xl-6">

            <!-- post -->
            <div class="post">
                <div class="post__head">
                    <a href="#" class="post__head-img">
                        <img src="/images/uploads/default.png" alt="">
                    </a>
                    <div class="post__head-title">
                        <h5><a href="#">Divesh Thapa</a></h5>
                        <p>11 min ago</p>
                    </div>

                    <div class="post__dropdown">
                        <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu"
                            aria-labelledby="dropdownMenu3">
                            <li><a href="#">Hide</a></li>
                        </ul>
                    </div>
                </div>

                <div class="post__wrap">
                    <div class="post__company">
                        <i class="fa fa-briefcase fa-sm"></i>
                        <span>Skillpark-end Developer</span>
                    </div>

                    <div class="post__actions">
                        <a class="post__actions-btn post__actions-btn--green" href="#">
                            <i class="fa fa-bookmark fa-sm"></i>
                        </a>
                        <a class="post__actions-btn post__actions-btn--red" href="#">
                            <i class="fa fa-envelope fa-sm"></i>
                        </a>
                        <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                    </div>
                </div>

                <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                <div class="post__options">
                    <p>Rs. 400 - Rs. 450</p>
                </div>

                <div class="post__description">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</p>
                </div>

                <div class="post__tags">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">JS</a>
                    <a href="#">PSD</a>
                </div>

                <div class="post__stats">
                    <div>
                        <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                        <a class="post__comments" data-toggle="collapse" href="#collapse3" role="button"
                            aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                            <span>0</span></a>
                    </div>
                </div>

                <div class="collapse post__collapse" id="collapse3">
                    <form action="#" class="post__form">
                        <input type="text" placeholder="Type your comment...">
                        <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                    </form>
                </div>
            </div>
            <!-- end post -->

            <!-- post -->
            <div class="post">
                <div class="post__head">
                    <a href="#" class="post__head-img">
                        <img src="/images/uploads/default.png" alt="">
                    </a>
                    <div class="post__head-title">
                        <h5><a href="#">Aditi Budathoki</a></h5>
                        <p>22 min ago</p>
                    </div>

                    <div class="post__dropdown">
                        <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu"
                            aria-labelledby="dropdownMenu2">
                            <li><a href="#">Hide</a></li>
                        </ul>
                    </div>
                </div>

                <div class="post__wrap">
                    <div class="post__company">
                        <i class="fa fa-briefcase fa-sm"></i>
                        <span>Skillpark-end Developer</span>
                    </div>

                    <div class="post__actions">
                        <a class="post__actions-btn post__actions-btn--green" href="#">
                            <i class="fa fa-bookmark fa-sm"></i>
                        </a>
                        <a class="post__actions-btn post__actions-btn--red" href="#">
                            <i class="fa fa-envelope fa-sm"></i>
                        </a>
                        <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                    </div>
                </div>

                <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                <div class="post__options">
                    <p>Rs. 400 - Rs. 500</p>
                </div>

                <div class="post__description">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</p>
                </div>

                <div class="post__tags">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">JS</a>
                    <a href="#">PSD</a>
                </div>

                <div class="post__stats">
                    <div>
                        <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                        <a class="post__comments" data-toggle="collapse" href="#collapse2" role="button"
                            aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                            <span>0</span></a>
                    </div>
                </div>

                <div class="collapse post__collapse" id="collapse2">
                    <form action="#" class="post__form">
                        <input type="text" placeholder="Type your comment...">
                        <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                    </form>
                </div>
            </div>
            <!-- end post -->

            <!-- post -->
            <div class="post">
                <div class="post__head">
                    <a href="#" class="post__head-img">
                        <img src="/images/uploads/default.png" alt="">
                    </a>
                    <div class="post__head-title">
                        <h5><a href="#">Bibek Dhungana</a></h5>
                        <p>37 min ago</p>
                    </div>

                    <div class="post__dropdown">
                        <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu"
                            aria-labelledby="dropdownMenu1">
                            <li><a href="#">Hide</a></li>
                        </ul>
                    </div>
                </div>

                <div class="post__wrap">
                    <div class="post__company">
                        <i class="fa fa-briefcase fa-sm"></i>
                        <span>Skillpark-end Developer</span>
                    </div>

                    <div class="post__actions">
                        <a class="post__actions-btn post__actions-btn--green" href="#">
                            <i class="fa fa-bookmark fa-sm"></i>
                        </a>
                        <a class="post__actions-btn post__actions-btn--red" href="#">
                            <i class="fa fa-envelope fa-sm"></i>
                        </a>
                        <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                    </div>
                </div>

                <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                <div class="post__options">
                    <p>Rs. 100 - Rs. 150</p>
                </div>

                <div class="post__description">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</p>
                </div>

                <div class="post__tags">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">JS</a>
                    <a href="#">PSD</a>
                </div>

                <div class="post__stats">
                    <div>
                        <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                        <a class="post__comments" data-toggle="collapse" href="#collapse1" role="button"
                            aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                            <span>0</span></a>
                    </div>
                </div>

                <div class="collapse post__collapse" id="collapse1">
                    <form action="#" class="post__form">
                        <input type="text" placeholder="Type your comment...">
                        <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                    </form>
                </div>
            </div>
            <!-- end post -->

            <!-- post -->
            <div class="post">
                <div class="post__head">
                    <a href="#" class="post__head-img">
                        <img src="/images/uploads/default.png" alt="">
                    </a>
                    <div class="post__head-title">
                        <h5><a href="#">Aanchal Sharma</a></h5>
                        <p>58 min ago</p>
                    </div>

                    <div class="post__dropdown">
                        <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu0"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu"
                            aria-labelledby="dropdownMenu0">
                            <li><a href="#">Hide</a></li>
                        </ul>
                    </div>
                </div>

                <div class="post__wrap">
                    <div class="post__company">
                        <i class="fa fa-briefcase fa-sm"></i>
                        <span>Skillpark-end Developer</span>
                    </div>

                    <div class="post__actions">
                        <a class="post__actions-btn post__actions-btn--green" href="#">
                            <i class="fa fa-bookmark fa-sm"></i>
                        </a>
                        <a class="post__actions-btn post__actions-btn--red" href="#">
                            <i class="fa fa-envelope fa-sm"></i>
                        </a>
                        <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                    </div>
                </div>

                <h2 class="post__title"><a href="project">PSD to HTML</a></h2>

                <div class="post__options">
                    <p>Rs. 1000 - Rs. 1200</p>
                </div>

                <div class="post__description">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or randomised words which don't look even slightly
                        believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text.</p>
                </div>

                <div class="post__tags">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">JS</a>
                    <a href="#">PSD</a>
                </div>

                <div class="post__stats">
                    <div>
                        <a class="post__likes" href="#"><i class="fa fa-heart fa-sm"></i> <span>15</span></a>
                        <a class="post__comments" data-toggle="collapse" href="#collapse0" role="button"
                            aria-expanded="false" aria-controls="collapse1"><i class="fa fa-comment fa-sm"></i>
                            <span>0</span></a>
                    </div>
                </div>

                <div class="collapse post__collapse" id="collapse0">
                    <form action="#" class="post__form">
                        <input type="text" placeholder="Type your comment...">
                        <button type="button"><i class="fas fa-paper-plane fa-sm"></i></button>
                    </form>
                </div>
            </div>
            <!-- end post -->

            <!-- view more -->
            <button class="main__btn" type="button"><span>load more</span></button>
            <!-- end view more -->
        </div>

        <div class="col-12 col-md-5 col-lg-4 col-xl-3">

        </div>
    </div>
    <!-- end main content -->
</div>
</main>
<script>
    document.title = 'Home - {{ Auth::user()->name }}';
</script>
@endsection