@extends('layouts.master')
@section('content')
<section class="static_page pb-5">
        <div class="container box_container">
            <div class="title d-flex">
                <h2>Promote Your Business Where Buyers Are Looking</h2>
            </div>
            <p>Reach restaurant owners, operators, and resellers actively searching for equipment. RestaurantBuyouts.com offers targeted ad placements designed to connect your business with a high-intent audience. Whether you provide equipment, services, or financing, our platform gives you direct access to decision-makers in the food service industry.</p>
            <div class="bg_light_gray mt-5 mb-5">
                <div class="row">
                    <div class="col-xxl-4 col-lg-4 col-sm-4">
                        <div class="title">
                            <h2>Why Advertise<br> With Us?</h2>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-lg-8 col-sm-8">
                        <div class="features">
                            <div class="row gx-5 gy-5 row-cols-xxl-2 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 row-cols-1">
                                <div>
                                    <img src="{{ asset_url('images/icons/check_green.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Targeted Audience </h4>
                                        <p>Reach restaurant owners, chefs, and hospitality professionals   actively searching for equipment.</p>
                                    </span>
                                </div>
                                <div>
                                    <img src="{{ asset_url('images/icons/check_green.svg') }}" class="" alt="">
                                    <span>
                                        <h4>High Visibility</h4>
                                        <p>Our website gets heavy traffic from buyers across the country.</p>
                                    </span>
                                </div>
                                <div>
                                    <img src="{{ asset_url('images/icons/check_green.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Affordable Rates </h4>
                                        <p>Competitive pricing for banners of all sizes.</p>
                                    </span>
                                </div>
                                <div>
                                    <img src="{{ asset_url('images/icons/check_green.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Boost Sales</h4>
                                        <p>Drive more leads and conversions for your business.</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <h2>Banner Ad Options & Sizes</h2>
                <p>We offer flexible banner ad placements to suit your marketing needs:</p>
            </div>
            <div class="banner_options">
                <div class="option_item">
                    <p>Header Banner (Top of Page) – Best for Maximum Exposure</p>
                    <ul>
                        <li>Size: 728x90 px (Leaderboard)</li>
                        <li>Placement: Appears on all pages for high visibility.</li>
                    </ul>
                </div>
                <div class="option_item">
                    <p>Sidebar Banner – Great for Ongoing Promotions</p>
                    <ul>
                        <li>Size: 250x250 px (Medium Square)</li>
                        <li>Placement: Displayed on the side of key pages.</li>
                    </ul>
                </div>
                <div class="option_item">
                    <p>Footer Banner – Cost-Effective Option</p>
                    <ul>
                        <li>Size: 468x60 px (Full Banner)</li>
                        <li>Placement: Appears at the bottom of every page.</li>
                    </ul>
                </div>
            </div>
            <div class="form_box bg_light_gray mb-5 mt-5">
                <div class="row g-lg-5 g-3">
                    <div class="col-lg-6">
                        <div class="left-sidebar-box">
                            <div class="title mb-4">
                                <h2>Inquire About<br> Advertising</h2>
                            </div>
                            <p>
                                Interested in promoting your business to our growing audience of restaurant buyers and sellers?
                            </p>
                            <p>
                                Fill out the form below, and a member of our team will follow up with details on pricing and available placements.
                            </p>
                            <p>
                                Reach active buyers when it matters most—advertise with RestaurantBuyouts.com.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-sidebar-box">
                            <div class="row g-4">
                                <div class="col-xxl-6 col-lg-12 col-sm-6">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name" >
                                        <label for="name">First Name</label>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-sm-6">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name" >
                                        <label for="name">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-lg-12 col-sm-12">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <input type="text" class="form-control" id="name" >
                                        <label for="name">Email address</label>
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-lg-12 col-sm-12">
                                    <div class="form-floating theme-form-floating-2 search-box">
                                        <textarea rows="5" class="form-control"></textarea>
                                        <label for="name">Message</label>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-sm-6">
                                    <div class="form-check ps-0 m-0 d-flex">
                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                        <label class="form-check-label" for="condition">
                                            <span class="name">I agree to the RestaurantBuyouts.com
                                                Terms and Conditions and Privacy
                                                Policy.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-sm-6">
                                    <p>Captcha Will be here</p>
                                </div>
                                <div class="col-xxl-12 col-lg-12 col-sm-12">
                                    <button class="btn theme-bg-color btn-animation btn-md w-100">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
