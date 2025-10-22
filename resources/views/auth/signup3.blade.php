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
                                <div class="step-content completed">
                                    <div class="step">2</div>
                                    <div class="step-label">Step 2</div>
                                </div>
                                <div class="step-content completed">
                                    <div class="step">3</div>
                                    <div class="step-label">Step 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="signup-success-content">
                            <h3 class="fw-bold px-5">Welcome to RestaurantBuyouts.com!</h3>
                            <img src="{{ asset_url('images/check.svg') }}" class="img-fluid" alt="">
                            <p class="px-5">Your account has been successfully created.</p>
                        </div>

                        <div class="row g-4 mt-4">
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <button class="btn theme-bg-color btn-animation btn-md w-100 d-flex justify-content-between align-items-center">
                                    <span class="w-100">Go to my account</span>
                                    <i class="fas fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
