@extends('layouts.security')

@section('content')

<!-- Body Start -->
<main class="browse-section" style="padding: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="choose_profile">
                    <h3>Choose Your Profile</h3>
                    <p>Which type of profile fits you best?</p>
                </div>
                <form method="POST" action="{{ route('addprofile') }}">
                    @csrf
                    <div class="plans150">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="plan_item">
                                    <div class="plan_icon1">
                                        <div class="cfp_icon">
                                            <img src="/images/cp_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <h4>Freelancer</h4>
                                    <div class="plan_price1">
                                        <span>Start a Freelancer Profile</span>
                                    </div>
                                    <ul class="plan_dt1">
                                        <li>
                                            <p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p>
                                        </li>
                                        <li>
                                            <p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit amet felis nec nulla imperdiet varius.</p>
                                        </li>
                                    </ul>
                                    <div class="plan_btn">
                                        <button type="submit" name="role_id" value="1">Signup Freelancer Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="plan_item">
                                    <div class="plan_icon1">
                                        <div class="cfp_icon">
                                            <img src="/images/fp_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <h4>Employer</h4>
                                    <div class="plan_price1">
                                        <span>Start a Employer Profile</span>
                                    </div>
                                    <ul class="plan_dt1">
                                        <li>
                                            <p>01. Phasellus ac vulputate erat, sit amet tristique elit.</p>
                                        </li>
                                        <li>
                                            <p>2. Ut sed ex nec tellus fermentum rhoncus et eget massa. Pellentesque sit amet felis nec nulla imperdiet varius.</p>
                                        </li>
                                    </ul>
                                    <div class="plan_btn">
                                        <button type="submit" name="role_id" value="2">Signup Company Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- Body End -->


@endsection