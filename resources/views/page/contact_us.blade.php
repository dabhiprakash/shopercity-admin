@extends('layouts.master')
@section('content')
    <section class="contact-box-section pb-5">
        <div class="container box_container">
            <div class="form_box bg_light_gray">
                <div class="row g-lg-5 g-3">
                    <div class="col-lg-6">
                        <div class="left-sidebar-box">
                            <div class="page_title">
                                <h2>Contact us</h2>
                            </div>
                            <p class="mb-5">
                                Interested in advertising?<br>
                                Fill out the form below, and our team will contact you with pricing and availability.
                            </p>
                            <p>
                                Don’t miss out on reaching thousands of potential buyers—advertise with Restaurantbuyouts.com today!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="alert alert-success d-none" id="responseMessage" role="alert">
                            This is a success alert—check it out!
                        </div>
                        <form  id="contact_form" class="form" action="contact-us" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="right-sidebar-box">
                                <div class="row g-4">
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control" name="first_name" id="first_name" >
                                            <label for="first_name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control" name="last_name" id="last_name" >
                                            <label for="last_name">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-lg-12 col-sm-12">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="text" class="form-control" name="email" id="email" >
                                            <label for="email">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-lg-12 col-sm-12">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <textarea rows="5" class="form-control" placeholder="Type your message here" name="message" id="message" ></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-lg-12 col-sm-6">
                                        <div class="form-check ps-0 m-0 d-flex">
                                            <input class="checkbox_animated" type="checkbox" name="condition" id="condition">
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
                                    <div id="condition-error-area"></div>
                                    <div class="col-xxl-12 col-lg-12 col-sm-12">
                                        <button type="submit" class="btn theme-bg-color btn-animation btn-md w-100">
                                            Submit&nbsp;
                                            <div id="contactButtonLoader" class="d-none">
                                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
