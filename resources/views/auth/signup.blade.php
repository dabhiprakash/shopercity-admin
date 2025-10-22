@extends('layouts.auth_master')
@section('content')
<section class="log-in-section">
        <div class="row w-100">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="auth_info">
                    <div class="center_content">
                        <div class="page_title">
                            <h2>Create<br> an account</h2>
                            <p>Start listing used restaurant equipment in minutes. RestaurantBuyouts.com makes it easy to connect with serious buyers.</p>
                        </div>
                        <div class="features mt-5">
                            <div class="row gy-4 row-cols-xxl-1 row-cols-xl-1 row-cols-lg-1 row-cols-md-1 row-cols-1">
                                <div>
                                    <img src="{{ asset_url('images/icons/signup1.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Free to List</h4>
                                        <p>No fees to post during our launch period.</p>
                                    </span>
                                </div>
                                <div>
                                    <img src="{{ asset_url('images/icons/signup2.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Purpose-Built Platform</h4>
                                        <p>Designed specifically for buying and selling restaurant equipment.</p>
                                    </span>
                                </div>
                                <div>
                                    <img src="{{ asset_url('images/icons/signup3.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Fast and Simple Listings</h4>
                                        <p>Upload photos, enter item details, and go live quickly.</p>
                                    </span>
                                </div>
                                <div>
                                    <img src="{{ asset_url('images/icons/signup4.svg') }}" class="" alt="">
                                    <span>
                                        <h4>Monitored Listings</h4>
                                        <p>All listings are reviewed, and buyer-seller messages stay on-platform for a safer experience.</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="auth_form form_box">
                    <div class="right-sidebar-box">
                        <div class="auth_header d-flex justify-content-between">
                            <div class="title  order-detail">
                                <h2>Sign up</h2>
                            </div>
                            <div class="stepper">
                                <div class="step-content completed">
                                    <div class="step">1</div>
                                    <div class="step-label">Step 1</div>
                                </div>
                                <div class="step-content">
                                    <div class="step">2</div>
                                    <div class="step-label">Step 2</div>
                                </div>
                                <div class="step-content">
                                    <div class="step">3</div>
                                    <div class="step-label">Step 3</div>
                                </div>
                            </div>
                        </div>
                        <h3>Choose your type of account</h3>
                        <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="dealer">
                                <button class="nav-link active" id="dealer-tab" data-bs-toggle="tab"
                                    data-bs-target="#dealer" type="button" role="tab">Equipment Dealer</button>
                            </li>
                            <li class="nav-item" role="restaurant">
                                <button class="nav-link" id="restaurant-tab" data-bs-toggle="tab" data-bs-target="#restaurant"
                                    type="button" role="tab">Restaurant / Eatery Owner</button>
                            </li>
                            <li class="nav-item" role="private">
                                <button class="nav-link" id="private-tab" data-bs-toggle="tab" data-bs-target="#private"
                                    type="button" role="tab">Private Individual</button>
                            </li>
                        </ul>
                        <div class="row g-4">
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <a href="{{ url("/signup2") }}" class="btn theme-bg-color btn-animation btn-md w-100">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
