@extends('layouts.auth_master')
@section('content')
    <section class="log-in-section">
        <div class="row w-100">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="auth_info">
                    <div class="page_title">
                        <h2>Welcome back to <br>RestaurantBuyouts.com</h2>
                        <p>The Marketplace for Used Restaurant Equipment</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="auth_form form_box">
                    <div class="right-sidebar-box">
                        <div class="auth_header">
                            <div class="title d-flex">
                                <h2>Sign in</h2>
                            </div>
                            <p>New user? <a href="javascript:void(0);">Create an account</a></p>
                        </div>
                        <div class="row g-4">
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="text" class="form-control" id="name" >
                                    <label for="name">Email address</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <input type="password" class="form-control" id="password" >
                                    <label for="password">Password</label>
                                    <!-- <span class="input-group-text input-group-append show-password">
                                        <i class="fas fa-eye"></i>
                                    </span> -->
                                </div>
                                <p class="simple_link"><a href="javascript:void(0);">Forgot Password?</a></p>
                            </div>
                            <div class="col-xxl-7 col-lg-12 col-sm-6">
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
                            <div class="col-xxl-5 col-lg-12 col-sm-6">
                                <p>Captcha Will be here</p>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                <button class="btn theme-bg-color btn-animation btn-md w-100">Sign in</button>
                            </div>
                        </div>
                        <p class="terms_protected">Protected by reCAPTCHA and subject to the <a href="javascript:void(0);">RestaurantBuyouts.com</a> <a href="javascript:void(0);">Privacy Policy</a> and <a href="javascript:void(0);">Terms of Service</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
