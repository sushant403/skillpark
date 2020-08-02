@extends('layouts.clients.clientmaster')

@section('content')

<div class="third-menu border-top">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div class="col-lg-9 left">
                <ul>
                    <li class="nav-overview selected"><a href="#overview">Overview</a></li>
                    <li class="nav-description"><a href="#description">Description</a></li>
                    <li class="nav-aboutSeller"><a href="#aboutSeller">About The Seller</a></li>
                    <li class="nav-packagesTable"><a href="#packagesTable">Compare Packages</a></li>
                    <li class="nav-recommendations"><a href="#recommendations">Recommendations</a></li>
                    <li class="nav-faq"><a href="#faq">FAQ</a></li>
                    <li class="nav-reviews"><a href="#reviews">Reviews</a></li>
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
                    <li>
                        <span class="collect-count">138</span>
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
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
                <h2>I will do mobile and website wireframes and prototyping</h2>
                <div id="overview" class="seller-overview d-flex align-items-center">
                    <div class="user-profile-image d-flex">
                        <label class="profile-pict" for="profile_image">
                            <img src="images/user/s2.png" class="profile-pict-img img-fluid" alt="">
                        </label>
                        <div class="profile-name">
                            <span class="user-status">
                                <a href="#" class="seller-link">Askbootstrap</a>
                            </span>
                            <div class="seller-level">Level 1 Seller</div>
                        </div>
                    </div>
                    <div class="user-info d-flex">
                        <span class="user-info-rating d-flex">
                            <div class="star-rating-s15-wrapper">
                                <span class="star-rating-s15 rate-10">
                                </span>
                            </div>
                            <span class="total-rating-out-five">5.0</span>
                            <span class="total-rating">(36)</span>
                        </span>
                        <span class="orders-in-queue">2 Orders in Queue</span>
                    </div>
                </div>
                <div class="slider mt-4">
                    <div id="aniimated-thumbnials" class="slider-for slick-slider-single">
                        <a href="images/list/v1.png">
                            <img class="img-fluid" src="images/list/v1.png" />
                        </a>
                        <a href="images/list/v2.png">
                            <img class="img-fluid" src="images/list/v2.png" />
                        </a>
                        <a href="images/list/v3.png">
                            <img class="img-fluid" src="images/list/v3.png" />
                        </a>
                        <a href="images/list/v4.png">
                            <img class="img-fluid" src="images/list/v4.png" />
                        </a>
                        <a href="images/list/v5.png">
                            <img class="img-fluid" src="images/list/v5.png" />
                        </a>
                    </div>
                    <div class="slider-nav slick-slider-single">
                        <div class="item-slick">
                            <img class="img-fluid" src="images/list/v1.png" alt="Alt">
                        </div>
                        <div class="item-slick">
                            <img class="img-fluid" src="images/list/v2.png" alt="Alt">
                        </div>
                        <div class="item-slick">
                            <img class="img-fluid" src="images/list/v3.png" alt="Alt">
                        </div>
                        <div class="item-slick">
                            <img class="img-fluid" src="images/list/v4.png" alt="Alt">
                        </div>
                        <div class="item-slick">
                            <img class="img-fluid" src="images/list/v5.png" alt="Alt">
                        </div>
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
                            <img src="images/user/s2.png" class="profile-pict-img img-fluid" alt="">
                        </label>
                        <div class="right">
                            <div class="profile-name">
                                <span class="user-status">
                                    <a href="#" class="seller-link">Askbootstrap</a>
                                </span>
                                <div class="seller-level">Website and mobile wireframes UI UX </div>
                            </div>
                            <div class="user-info">
                                <span class="user-info-rating d-flex align-items-center">
                                    <div class="star-rating-s15-wrapper">
                                        <span class="star-rating-s15 rate-10">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <span class="total-rating-out-five">5.0</span>
                                    <span class="total-rating">(36 reviews)</span>
                                </span>
                                <a href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="stats-desc">
                        <ul class="user-stats">
                            <li>From<strong>India</strong></li>
                            <li>Member since<strong>Sep 2018</strong></li>
                            <li>Avg. Response Time<strong>1 hour</strong></li>
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
                    <div id="packagesTable" class="table-package">
                        <h3>Compare Packages</h3>
                        <table>
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <tbody>
                                <tr class="package-type">
                                    <th>Package</th>
                                    <td>
                                        <p class="price">$8,029 </p>
                                        <b class="type">Basic</b><b class="title">10 Screens</b>
                                    </td>
                                    <td>
                                        <p class="price">$11,240 </p>
                                        <b class="type">Standard</b><b class="title">15
                                            Screens</b>
                                    </td>
                                    <td>
                                        <p class="price">$16,057 </p>
                                        <b class="type">Premium</b><b class="title">25 Screens
                                        </b>
                                    </td>
                                </tr>
                                <tr class="description">
                                    <th></th>
                                    <td>I will design rough sketches for upto 5 Screens of your website/Mobile app.
                                    </td>
                                    <td>I will design rough sketches for upto 10 Screens of your website/Mobile app.
                                    </td>
                                    <td>I will design rough sketches for upto 20 Screens of your website/Mobile app.
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="fit-popover fit-popover-top fit-tooltip" data-position="top"><span
                                                class="fit-popover-content">Source File</span></div>
                                    </th>
                                    <td class="boolean-pricing-factor included"></td>
                                    <td class="boolean-pricing-factor included"></td>
                                    <td class="boolean-pricing-factor included"></td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="fit-popover fit-popover-top fit-tooltip" data-position="top"><span
                                                class="fit-popover-content">Commercial Use</span></div>
                                    </th>
                                    <td class="boolean-pricing-factor included"></td>
                                    <td class="boolean-pricing-factor included"></td>
                                    <td class="boolean-pricing-factor included"></td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="fit-popover fit-popover-top fit-tooltip" data-position="top"><span
                                                class="fit-popover-content">Interactive Mockup</span></div>
                                    </th>
                                    <td class="boolean-pricing-factor"></td>
                                    <td class="boolean-pricing-factor included"></td>
                                    <td class="boolean-pricing-factor included"></td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="fit-popover fit-popover-top fit-tooltip" data-position="top"><span
                                                class="fit-popover-content"># of Pages / Screens</span></div>
                                    </th>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="fit-popover fit-popover-top fit-tooltip" data-position="top"><span
                                                class="fit-popover-content">Revisions</span></div>
                                    </th>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>2</td>
                                </tr>
                                <tr class="delivery-time">
                                    <th>Delivery Time</th>
                                    <td>
                                        <div class="fake-radio-wrapper">
                                            <div><input type="hidden" name="gig_items[1][4694800919471][gig_item_id]"
                                                    value="117210558"><input type="hidden"
                                                    name="gig_items[1][4694800919471][quantity]" value="0"></div>
                                            <label class="fake-radio"><input type="radio" name="1" value="0"
                                                    checked=""><span class="radio-img"></span><span>3
                                                    days</span></label>
                                            <label class="fake-radio">
                                                <input type="radio" name="1" value="1"><span
                                                    class="radio-img"></span><span>2 days</span>
                                                <p class="faster-price">(+$2,008)</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="fake-radio-wrapper">
                                            <div><input type="hidden" name="gig_items[2][0007284419489][gig_item_id]"
                                                    value="117210558"><input type="hidden"
                                                    name="gig_items[2][0007284419489][quantity]" value="0"></div>
                                            <label class="fake-radio"><input type="radio" name="2" value="0"
                                                    checked=""><span class="radio-img"></span><span>4
                                                    days</span></label>
                                            <label class="fake-radio">
                                                <input type="radio" name="2" value="1"><span
                                                    class="radio-img"></span><span>3 days</span>
                                                <p class="faster-price">(+$4,818)</p>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="fake-radio-wrapper">
                                            <div><input type="hidden" name="gig_items[3][1724678919506][gig_item_id]"
                                                    value="117210558"><input type="hidden"
                                                    name="gig_items[3][1724678919506][quantity]" value="0"></div>
                                            <label class="fake-radio"><input type="radio" name="3" value="0"
                                                    checked=""><span class="radio-img"></span><span>7
                                                    days</span></label>
                                            <label class="fake-radio">
                                                <input type="radio" name="3" value="1"><span
                                                    class="radio-img"></span><span>5 days</span>
                                                <p class="faster-price">(+$8,029)</p>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="select-package">
                                    <th>Total</th>
                                    <td>
                                        <p class="price-label">$8,029</p>
                                        <button type="submit">Select</button>
                                    </td>
                                    <td>
                                        <p class="price-label">$11,240</p>
                                        <button type="submit">Select</button>
                                    </td>
                                    <td>
                                        <p class="price-label">$16,057</p>
                                        <button type="submit">Select</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="recommendations" class="recommended">
                        <h3>Recommended For You</h3>
                        <div class="recommended-slider recommend">
                            <div>
                                <a href="#">
                                    <img class="img-fluid" src="images/list/v1.png" />
                                </a>
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <span class="seller-image">
                                                <img class="img-fluid" src="images/user/s1.png" alt='' />
                                            </span>
                                            <span class="seller-name">
                                                <a href="profile.html">Marcin Kowalski</a>
                                                <span class="level hint--top level-one-seller">
                                                    Level 1 Seller
                                                </span>
                                            </span>
                                        </div>
                                        <h3>I will create professional audio ads or radio commercials for your project
                                        </h3>
                                        <div class="content-info">
                                            <div class="rating-wrapper">
                                                <span class="gig-rating text-body-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                        width="15" height="15">
                                                        <path fill="currentColor"
                                                            d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                        </path>
                                                    </svg>
                                                    5.0
                                                    <span>(7)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <div class="price">
                                                <a href="#">
                                                    Starting At <span> $1,205</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#">
                                    <img class="img-fluid" src="images/list/v2.png" />
                                </a>
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <span class="seller-image">
                                                <img class="img-fluid" src="images/user/s2.png" alt='' />
                                            </span>
                                            <span class="seller-name">
                                                <a href="profile.html">Marcin Kowalski</a>
                                                <span class="level hint--top level-one-seller">
                                                    Level 1 Seller
                                                </span>
                                            </span>
                                        </div>
                                        <h3>I will create professional audio ads or radio commercials for your project
                                        </h3>
                                        <div class="content-info">
                                            <div class="rating-wrapper">
                                                <span class="gig-rating text-body-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                        width="15" height="15">
                                                        <path fill="currentColor"
                                                            d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                        </path>
                                                    </svg>
                                                    5.0
                                                    <span>(7)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <div class="price">
                                                <a href="#">
                                                    Starting At <span> $1,205</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#">
                                    <img class="img-fluid" src="images/list/v3.png" />
                                </a>
                                <div class="inner-slider">
                                    <div class="inner-wrapper">
                                        <div class="d-flex align-items-center">
                                            <span class="seller-image">
                                                <img class="img-fluid" src="images/user/s3.png" alt='' />
                                            </span>
                                            <span class="seller-name">
                                                <a href="profile.html">Marcin Kowalski</a>
                                                <span class="level hint--top level-one-seller">
                                                    Level 1 Seller
                                                </span>
                                            </span>
                                        </div>
                                        <h3>I will create professional audio ads or radio commercials for your project
                                        </h3>
                                        <div class="content-info">
                                            <div class="rating-wrapper">
                                                <span class="gig-rating text-body-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                        width="15" height="15">
                                                        <path fill="currentColor"
                                                            d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                        </path>
                                                    </svg>
                                                    5.0
                                                    <span>(7)</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            <div class="price">
                                                <a href="#">
                                                    Starting At <span> $1,205</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        Collapsible Group Item #1
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
                                        Collapsible Group Item #2
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
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
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
                <div id="reviews" class="review-section">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="m-0"> 37 Reviews </h4>
                        <select class="custom-select custom-select-sm border-0 shadow-sm ml-2">
                            <option>Most Relevant</option>
                            <option>Most Recent</option>
                        </select>
                    </div>
                    <div class=" row">
                        <div class="col-md-6">
                            <table class="stars-counters">
                                <tbody>
                                    <tr class="">
                                        <td>
                                            <span>
                                                <button
                                                    class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5
                                                    Stars</button>
                                            </span>
                                        </td>
                                        <td class="progress-bar-container">
                                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                <div class="fit-progressbar-background">
                                                    <span class="progress-fill" style="width: 97.2973%;"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="star-num">(36)</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <span>
                                                <button
                                                    class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5
                                                    Stars</button>
                                            </span>
                                        </td>
                                        <td class="progress-bar-container">
                                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                <div class="fit-progressbar-background">
                                                    <span class="progress-fill" style="width: 2.2973%;"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="star-num">(2)</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <span>
                                                <button
                                                    class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5
                                                    Stars</button>
                                            </span>
                                        </td>
                                        <td class="progress-bar-container">
                                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                <div class="fit-progressbar-background">
                                                    <span class="progress-fill" style="width: 0;"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="star-num">(0)</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <span>
                                                <button
                                                    class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5
                                                    Stars</button>
                                            </span>
                                        </td>
                                        <td class="progress-bar-container">
                                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                <div class="fit-progressbar-background">
                                                    <span class="progress-fill" style="width: 0;"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="star-num">(0)</td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <span>
                                                <button
                                                    class="fit-button fit-button-color-blue fit-button-fill-ghost fit-button-size-medium stars-filter">5
                                                    Stars</button>
                                            </span>
                                        </td>
                                        <td class="progress-bar-container">
                                            <div class="fit-progressbar fit-progressbar-bar star-progress-bar">
                                                <div class="fit-progressbar-background">
                                                    <span class="progress-fill" style="width: 0;"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="star-num">(0)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="ranking">
                                <h6 class="text-display-7">Rating Breakdown</h6>
                                <ul>
                                    <li>Seller communication level<span>5<span
                                                class="review-star rate-10 show-one"></span></span>
                                    </li>
                                    <li>Recommend to a friend<span>5<span
                                                class="review-star rate-10 show-one"></span></span>
                                    </li>
                                    <li>Service as described<span>4.9<span
                                                class="review-star rate-10 show-one"></span></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-list">
                    <ul>
                        <li>
                            <div class="d-flex">
                                <div class="left">
                                    <span>
                                        <img src="images/user/s5.png" class="profile-pict-img img-fluid" alt="">
                                    </span>
                                </div>
                                <div class="right">
                                    <h4>
                                        Askbootstrap
                                        <span class="gig-rating text-body-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                                height="15">
                                                <path fill="currentColor"
                                                    d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                </path>
                                            </svg>
                                            5.0
                                        </span>
                                    </h4>
                                    <div class="country d-flex align-items-center">
                                        <span>
                                            <img class="country-flag img-fluid" src="images/flag/india.png">
                                        </span>
                                        <div class="country-name font-accent">India</div>
                                    </div>
                                    <div class="review-description">
                                        <p>
                                            The process was smooth, after providing the required info,
                                            Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                                        </p>
                                    </div>
                                    <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                                    <div class="helpful-thumbs">
                                        <div class="helpful-thumb text-body-2">
                                            <span class="fit-icon thumbs-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.5804 7.81165C13.8519 7.45962 14 7 14 6.43858C14 5.40843 13.123 4.45422 12.0114 4.45422H10.0932C10.3316 3.97931 10.6591 3.39024 10.6591 2.54516C10.6591 0.948063 10.022 0 8.39207 0C7.57189 0 7.26753 1.03682 7.11159 1.83827C7.01843 2.31708 6.93041 2.76938 6.65973 3.04005C6.01524 3.68457 5.03125 5.25 4.44013 5.56787C4.38028 5.59308 4.3038 5.61293 4.22051 5.62866C4.06265 5.39995 3.79889 5.25 3.5 5.25H0.875C0.391754 5.25 0 5.64175 0 6.125V13.125C0 13.6082 0.391754 14 0.875 14H3.5C3.98325 14 4.375 13.6082 4.375 13.125V12.886C5.26354 12.886 7.12816 14.0002 9.22728 13.9996C9.37781 13.9997 10.2568 14.0004 10.3487 13.9996C11.9697 14 12.8713 13.0183 12.8188 11.5443C13.2325 11.0596 13.4351 10.3593 13.3172 9.70944C13.6578 9.17552 13.7308 8.42237 13.5804 7.81165ZM0.875 13.125V6.125H3.5V13.125H0.875ZM12.4692 7.5565C12.9062 7.875 12.9062 9.1875 12.3159 9.48875C12.6856 10.1111 12.3529 10.9439 11.9053 11.1839C12.1321 12.6206 11.3869 13.1146 10.3409 13.1246C10.2504 13.1255 9.32247 13.1246 9.22731 13.1246C7.23316 13.1246 5.54296 12.011 4.37503 12.011V6.44287C5.40611 6.44287 6.35212 4.58516 7.27847 3.65879C8.11368 2.82357 7.83527 1.43153 8.3921 0.874727C9.78414 0.874727 9.78414 1.84589 9.78414 2.54518C9.78414 3.69879 8.94893 4.21561 8.94893 5.32924H12.0114C12.6329 5.32924 13.1223 5.88607 13.125 6.44287C13.1277 6.99967 12.9062 7.4375 12.4692 7.5565ZM2.84375 11.8125C2.84375 12.1749 2.54994 12.4688 2.1875 12.4688C1.82506 12.4688 1.53125 12.1749 1.53125 11.8125C1.53125 11.4501 1.82506 11.1562 2.1875 11.1562C2.54994 11.1562 2.84375 11.4501 2.84375 11.8125Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="thumb-title">Helpful</span>
                                        </div>
                                        <div class="helpful-thumb text-body-2 ml-3">
                                            <span class="fit-icon thumbs-icon">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.419563 6.18835C0.148122 6.54038 6.11959e-07 7 5.62878e-07 7.56142C2.81294e-05 8.59157 0.876996 9.54578 1.98863 9.54578L3.90679 9.54578C3.66836 10.0207 3.34091 10.6098 3.34091 11.4548C3.34089 13.0519 3.97802 14 5.60793 14C6.42811 14 6.73247 12.9632 6.88841 12.1617C6.98157 11.6829 7.06959 11.2306 7.34027 10.9599C7.98476 10.3154 8.96875 8.75 9.55987 8.43213C9.61972 8.40692 9.6962 8.38707 9.77949 8.37134C9.93735 8.60005 10.2011 8.75 10.5 8.75L13.125 8.75C13.6082 8.75 14 8.35825 14 7.875L14 0.875C14 0.391754 13.6082 -3.42482e-08 13.125 -7.64949e-08L10.5 -3.0598e-07C10.0168 -3.48226e-07 9.625 0.391754 9.625 0.875L9.625 1.11398C8.73647 1.11398 6.87184 -0.000191358 4.77272 0.00038257C4.62219 0.000300541 3.74322 -0.000438633 3.65127 0.000382472C2.03027 -1.04643e-06 1.12867 0.981667 1.18117 2.45566C0.76754 2.94038 0.564868 3.64065 0.682829 4.29056C0.342234 4.82448 0.269227 5.57763 0.419563 6.18835ZM13.125 0.875L13.125 7.875L10.5 7.875L10.5 0.875L13.125 0.875ZM1.53079 6.4435C1.09375 6.125 1.09375 4.8125 1.6841 4.51125C1.31436 3.88891 1.64713 3.05613 2.09467 2.81605C1.86791 1.37941 2.61313 0.885417 3.65906 0.875355C3.74962 0.874535 4.67753 0.875355 4.77269 0.875355C6.76684 0.875355 8.45704 1.98898 9.62497 1.98898L9.62497 7.55713C8.5939 7.55713 7.64788 9.41484 6.72153 10.3412C5.88632 11.1764 6.16473 12.5685 5.6079 13.1253C4.21586 13.1253 4.21586 12.1541 4.21586 11.4548C4.21586 10.3012 5.05107 9.78439 5.05107 8.67076L1.9886 8.67076C1.36708 8.67076 0.877707 8.11393 0.874973 7.55713C0.872266 7.00033 1.09375 6.5625 1.53079 6.4435ZM11.1563 2.1875C11.1563 1.82506 11.4501 1.53125 11.8125 1.53125C12.1749 1.53125 12.4688 1.82506 12.4688 2.1875C12.4688 2.54994 12.1749 2.84375 11.8125 2.84375C11.4501 2.84375 11.1563 2.54994 11.1563 2.1875Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="thumb-title">Not Helpful</span>
                                        </div>
                                    </div>
                                    <div class="response-item mt-4 d-flex">
                                        <div class="left">
                                            <span>
                                                <img src="images/user/s1.png" class="profile-pict-img img-fluid" alt="">
                                            </span>
                                        </div>
                                        <div class="right">
                                            <h4>
                                                Gurdeep Osahan
                                                <span class="gig-rating text-body-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"
                                                        width="15" height="15">
                                                        <path fill="currentColor"
                                                            d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                                        </path>
                                                    </svg>
                                                    5.0
                                                </span>
                                            </h4>
                                            <div class="country d-flex align-items-center">
                                                <span>
                                                    <img class="country-flag img-fluid" src="images/flag/india.png">
                                                </span>
                                                <div class="country-name font-accent">India</div>
                                            </div>
                                            <div class="review-description">
                                                <p>
                                                    The process was smooth, after providing the required info,
                                                    Pragyesh sent me an outstanding packet of wireframes. Thank you a
                                                    lot!
                                                </p>
                                            </div>
                                            <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                    <ul class="nav nav-tabs">
                        <li><a class="active" data-toggle="tab" href="#basic">Basic</a></li>
                        <li><a data-toggle="tab" href="#standard">Standard</a></li>
                        <li><a data-toggle="tab" href="#Premium">Premium</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="basic" class="tab-pane fade show active">
                            <div class="header">
                                <h3><b class="title">10 Screens</b><span class="price">$8,029</span></h3>
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
                                    <li class="feature"><i class="fa fa-check" aria-hidden="true"></i>Interactive
                                        Mockup
                                    </li>
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>10
                                        Pages
                                    </li>
                                </ul>
                            </article>
                            <button>Continue ($8,029)</button>
                        </div>
                        <div id="standard" class="tab-pane fade">
                            <div class="header">
                                <h3><b class="title">20 Screens</b><span class="price">$16,029</span></h3>
                                <p>I will design rough sketches for upto 5 Screens of your website/Mobile app.
                                </p>
                            </div>
                            <article>
                                <b class="delivery"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 Days
                                    Delivery</b>
                                <ul class="features">
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>Source
                                        File
                                    </li>
                                    <li class="feature included"><i class="fa fa-check"
                                            aria-hidden="true"></i>Commercial
                                        Use
                                    </li>
                                    <li class="feature"><i class="fa fa-check" aria-hidden="true"></i>Interactive
                                        Mockup
                                    </li>
                                    <li class="feature included"><i class="fa fa-check" aria-hidden="true"></i>10
                                        Pages
                                    </li>
                                </ul>
                            </article>
                            <button>Continue ($16,029)</button>
                        </div>
                        <div id="Premium" class="tab-pane fade">
                            <div class="header">
                                <h3><b class="title">30 Screens</b><span class="price">$24,029</span></h3>
                                <p>I will design rough sketches for upto 5 Screens of your website/Mobile app.
                                </p>
                            </div>
                            <article>
                                <b class="delivery"><i class="fa fa-clock-o" aria-hidden="true"></i> 3 Days
                                    Delivery</b>
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
                            <button>Continue ($24,029)</button>
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
        <div class="view_slider recommended">
            <h3>People Who Viewed This Service Also Viewed</h3>
            <div class="view recommended-slider">
                <div>
                    <a href="product-detail.html">
                        <img class="img-fluid" src="images/list/v1.png" />
                    </a>
                    <div class="inner-slider">
                        <div class="inner-wrapper">
                            <div class="d-flex align-items-center">
                                <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s1.png" alt='' />
                                </span>
                                <span class="seller-name">
                                    <a href="profile.html">Marcin Kowalski</a>
                                    <span class="level hint--top level-one-seller">
                                        Level 1 Seller
                                    </span>
                                </span>
                            </div>
                            <h3>I will create professional audio ads or radio commercials for your project</h3>
                            <div class="content-info">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                            height="15">
                                            <path fill="currentColor"
                                                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                        5.0
                                        <span>(7)</span>
                                    </span>
                                </div>
                            </div>
                            <div class="footer">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="price">
                                    <a href="#">
                                        Starting At <span> $1,205</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="product-detail.html">
                        <img class="img-fluid" src="images/list/v2.png" />
                    </a>
                    <div class="inner-slider">
                        <div class="inner-wrapper">
                            <div class="d-flex align-items-center">
                                <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s2.png" alt='' />
                                </span>
                                <span class="seller-name">
                                    <a href="profile.html">Marcin Kowalski</a>
                                    <span class="level hint--top level-one-seller">
                                        Level 1 Seller
                                    </span>
                                </span>
                            </div>
                            <h3>I will create professional audio ads or radio commercials for your project</h3>
                            <div class="content-info">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                            height="15">
                                            <path fill="currentColor"
                                                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                        5.0
                                        <span>(7)</span>
                                    </span>
                                </div>
                            </div>
                            <div class="footer">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="price">
                                    <a href="#">
                                        Starting At <span> $1,205</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="product-detail.html">
                        <img class="img-fluid" src="images/list/v3.png" />
                    </a>
                    <div class="inner-slider">
                        <div class="inner-wrapper">
                            <div class="d-flex align-items-center">
                                <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s3.png" alt='' />
                                </span>
                                <span class="seller-name">
                                    <a href="profile.html">Marcin Kowalski</a>
                                    <span class="level hint--top level-one-seller">
                                        Level 1 Seller
                                    </span>
                                </span>
                            </div>
                            <h3>I will create professional audio ads or radio commercials for your project</h3>
                            <div class="content-info">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                            height="15">
                                            <path fill="currentColor"
                                                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                        5.0
                                        <span>(7)</span>
                                    </span>
                                </div>
                            </div>
                            <div class="footer">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="price">
                                    <a href="#">
                                        Starting At <span> $1,205</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="product-detail.html">
                        <img class="img-fluid" src="images/list/v4.png" />
                    </a>
                    <div class="inner-slider">
                        <div class="inner-wrapper">
                            <div class="d-flex align-items-center">
                                <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s4.png" alt='' />
                                </span>
                                <span class="seller-name">
                                    <a href="profile.html">Marcin Kowalski</a>
                                    <span class="level hint--top level-one-seller">
                                        Level 1 Seller
                                    </span>
                                </span>
                            </div>
                            <h3>I will create professional audio ads or radio commercials for your project</h3>
                            <div class="content-info">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                            height="15">
                                            <path fill="currentColor"
                                                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                        5.0
                                        <span>(7)</span>
                                    </span>
                                </div>
                            </div>
                            <div class="footer">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="price">
                                    <a href="#">
                                        Starting At <span> $1,205</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="product-detail.html">
                        <img class="img-fluid" src="images/list/v5.png" />
                    </a>
                    <div class="inner-slider">
                        <div class="inner-wrapper">
                            <div class="d-flex align-items-center">
                                <span class="seller-image">
                                    <img class="img-fluid" src="images/user/s5.png" alt='' />
                                </span>
                                <span class="seller-name">
                                    <a href="profile.html">Marcin Kowalski</a>
                                    <span class="level hint--top level-one-seller">
                                        Level 1 Seller
                                    </span>
                                </span>
                            </div>
                            <h3>I will create professional audio ads or radio commercials for your project</h3>
                            <div class="content-info">
                                <div class="rating-wrapper">
                                    <span class="gig-rating text-body-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15"
                                            height="15">
                                            <path fill="currentColor"
                                                d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z">
                                            </path>
                                        </svg>
                                        5.0
                                        <span>(7)</span>
                                    </span>
                                </div>
                            </div>
                            <div class="footer">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="price">
                                    <a href="#">
                                        Starting At <span> $1,205</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection