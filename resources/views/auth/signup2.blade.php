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
                    <div class="right-sidebar-box step-signup">
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
                                <div class="step-content">
                                    <div class="step">3</div>
                                    <div class="step-label">Step 3</div>
                                </div>
                            </div>
                        </div>
                        <h3>Fill in your information</h3>
                        <div class="row g-4">
                            <div class="col-xxl-6 col-lg-6 col-sm-6">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="text" class="form-control" id="first-name" >
                                    <label for="name">First Name</label>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-sm-6">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="text" class="form-control" id="last-name" >
                                    <label for="name">Last Name</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="text" class="form-control" id="email">
                                    <label for="name">Email address</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="input-group form-floating theme-form-floating-2 input-custom-prefix search-box">
                                    <input type="password" class="form-control input-with-append" id="password" placeholder="Password">
                                    <span class="input-group-text input-group-append show-password">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <!-- <label for="name">Password</label> -->
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="input-group form-floating theme-form-floating-2 search-box input-custom-prefix">
                                    <input type="password" class="form-control input-with-append" id="confirm-password" placeholder="Confirm Password">
                                    <span class="input-group-text input-group-append show-password">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <!-- <label for="name">Confirm Password</label> -->
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="input-group form-floating theme-form-floating-2 search-box input-custom-prepend">
                                    <select name="country" class="form-select input-group-prepend" style="max-width: 70px;">
                                        <option value="us" selected>🇺🇸</option>
                                        <option value="in">🇮🇳</option>
                                        <option value="uk">🇬🇧</option>
                                    </select>
                                    <input type="text" class="form-control input-with-prepend" id="number" placeholder="Phone number">
                                    <!-- <label for="name">Phone Number</label> -->
                                </div>
                                <span class="verify-text">Users must verify their email address via a confirmation link before gaining access to the platform. Verification of the phone number may be added in future development phases..</span>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="text" class="form-control" id="name" placeholder="Optional">
                                    <label for="name">Business Name</label>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-lg-12 col-sm-6">
                                <div class="form-check ps-0 m-0 d-flex">
                                    <input class="checkbox_animated" type="checkbox" id="condition">
                                    <label class="form-check-label" for="condition">
                                        <span class="name">
                                            I agree to the User Agreement and Privacy Policy.
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-12 col-sm-6">
                                <p>Captcha Will be here</p>
                            </div>
                        </div>
                        <div class="row g-4 mt-4">
                            <div class="col-xxl-4 col-lg-4 col-sm-12 col-4">
                                <a href="{{ url("/signup") }}" class="btn btn-outline btn-md w-100">Back</a>
                            </div>
                            <div class="col-xxl-8 col-lg-8 col-sm-12 col-8">
                                <a href="{{ url("/signup3") }}" class="btn theme-bg-color btn-animation btn-md w-100">Sign up</a>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center already-account-area">
                            <p>Already have a RestaurantBuyouts.com account? <a href="{{ url("/login") }}" class="text">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
