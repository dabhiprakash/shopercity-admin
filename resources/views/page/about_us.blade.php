@extends('layouts.master')
@section('content')
    <section class="cms_page pb-5">
        <div class="container box_container">
            <div class="title d-flex">
                <h2>About</h2>
            </div>
            <p>
                RestaurantBuyouts.com was created by industry veterans with experience in the restaurant equipment and service industry, alongside seasoned business executives who understand what it takes to build a platform that serves a           real-world need. While there are plenty of general-purpose websites that sell everything from cars to clothing, RestaurantBuyouts.com exists for one reason: to be the Marketplace for Used Commercial Restaurant Equipment.
            </p>
            <p>
                Whether you are closing a restaurant, upgrading to newer equipment, or just have a single item to sell, this platform was built with you in mind. Selling used equipment is not a negative — it is often a smart, strategic move. Equipment can hold value, and there should be a reliable, focused place to sell it. That is what we are here to provide.
            </p>
            <div class="about_platform bg_light_gray">
                <div class="row g-4">
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <img src="{{ asset_url('images/about_us.png') }}" class="img-fluid blur-up lazyload" alt="">
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <p><b>The platform is open to the public. You do not need to be a dealer, chain, or even currently in the restaurant business to use RestaurantBuyouts.com. If you have quality equipment to sell — whether it is a full kitchen or just one mixer—you are welcome to list your equipment.</b></p>
                    </div>
                </div>
            </div>
            <div class="about_imginfo">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <img src="{{ asset_url('images/about1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <p>Every year, the food service industry spends billions of dollars on new equipment, which means tens of thousands of high-quality used items are replaced, relocated, or stored away. Much of that equipment still has a long life ahead of it.</p>
                        <p>We built RestaurantBuyouts.com to make it easier for that equipment to stay in circulation—matching sellers with motivated buyers on a platform that actually understands the industry.</p>
                        <p><b>We built RestaurantBuyouts.com to give people a practical, reliable way to list and find commercial equipment without the noise of unrelated marketplaces.</b></p>
                    </div>
                </div>
            </div>
            <div class="calltoaction bg_light_gray">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="left_content">
                            <div class="title">
                                <h2>Do You Have Used Restaurant Equipment to Sell?</h2>
                            </div>
                            <p>List your equipment in minutes and make it available to buyers locally and across the country.</p>
                            <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md fw-bold w-auto">List Equipment</a>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <img src="{{ asset_url('images/about2.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
