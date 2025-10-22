@extends('layouts.master')
@section('content')
<section class="home-section-2 home-section-bg pt-0 overflow-hidden mb-5">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="slider-animate">
                    <div>
                        <div class="home-contain rounded-0 p-0">
                            <img src="{{ asset_url('images/hero_image.jpg') }}" class="img-fluid bg-img blur-up lazyload" alt="">
                            <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                                <div class="container">
                                    <div class="search_hero">
                                        <h1 class="heding-2">The Marketplace for Used Restaurant Equipment</h1>
                                        <h5 class="text-content">Search listings or browse by category to get started</h5>
                                        <div class="search-box">
                                            <div class="input-group">
                                                <input type="search" class="form-control" placeholder="Search by equipment, brand, or category....">
                                                <button class="btn" type="button" id="button-addon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <ul class="quick_keywords">
                                            <li><a href="javascript:void(0)">Cooking Equipment</a></li>
                                            <li><a href="javascript:void(0)">Refrigeration Equipment</a></li>
                                            <li><a href="javascript:void(0)">Beverage Equipment</a></li>
                                            <li><a href="javascript:void(0)">Commercial Ovens</a></li>
                                            <li><a href="javascript:void(0)">Food Prep Equipment</a></li>
                                            <li><a href="javascript:void(0)">Dishwashing & Sanitation</a></li>
                                            <li><a href="javascript:void(0)">Serving & Holding Equipement</a></li>
                                            <li><a href="javascript:void(0)">Storage, Table & Shelving</a></li>
                                            <li><a href="javascript:void(0)">Restaurant Furniture</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-section-3 pb-5">
    <div class="container box_container">
        <div class="title d-flex">
            <h2>Featured Listings</h2>
            <a href="javascript:void(0);" class="view_more">View More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
        </div>
        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box h-100">
                    <div class="product-header">
                        <div class="product-image">
                            <a href="{{ url("/product-detail") }}">
                                <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="product-footer">
                        <div class="product-detail">
                            <a href="{{ url("/product-detail") }}">
                                <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                            </a>
                            <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                cheese macaroni cheese croque monsieur.</p>
                            <h6 class="unit">Good</h6>
                            <h6 class="unit">98039 - Seattle, WA</h6>
                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ratio_65 pb-5">
    <div class="container box_container">
        <div class="title d-flex">
            <h2>Category</h2>
            <a href="javascript:void(0);" class="view_more">View More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
        </div>
        <div class="row g-sm-3 g-3 row-cols-xxl-3 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2">
            <div>
                <div class=" banner-contain-3 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset_url('images/product/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                        <div>
                            <h4 class="fw-bold mb-0">Cooking Equipment</h4>
                            <a href="" class="btn shop-now-button mt-3 ps-0 mend-auto">Shop Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=" banner-contain-3 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset_url('images/product/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                        <div>
                            <h4 class="fw-bold mb-0">Cooking Equipment</h4>
                            <a href="" class="btn shop-now-button mt-3 ps-0 mend-auto">Shop Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=" banner-contain-3 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset_url('images/product/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                        <div>
                            <h4 class="fw-bold mb-0">Cooking Equipment</h4>
                            <a href="" class="btn shop-now-button mt-3 ps-0 mend-auto">Shop Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=" banner-contain-3 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset_url('images/product/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                        <div>
                            <h4 class="fw-bold mb-0">Cooking Equipment</h4>
                            <a href="" class="btn shop-now-button mt-3 ps-0 mend-auto">Shop Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=" banner-contain-3 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset_url('images/product/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                        <div>
                            <h4 class="fw-bold mb-0">Cooking Equipment</h4>
                            <a href="" class="btn shop-now-button mt-3 ps-0 mend-auto">Shop Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class=" banner-contain-3 hover-effect">
                    <a href="javascript:void(0)">
                        <img src="{{ asset_url('images/product/2.jpg') }}" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                        <div>
                            <h4 class="fw-bold mb-0">Cooking Equipment</h4>
                            <a href="" class="btn shop-now-button mt-3 ps-0 mend-auto">Shop Now <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calltoaction pb-5">
    <div class="container box_container">
        <div class="bg_light_gray">
            <div class="row align-items-center">
                <div class="col-xxl-7 col-xl-7 col-lg-7">
                    <div class="left_content">
                        <div class="title">
                            <h2>Do You Have Used Restaurant Equipment to Sell?</h2>
                        </div>
                        <p>List your equipment in minutes and make it available to buyers locally and across the country.</p>
                        <ul>
                            <li><img src="{{ asset_url('images/check.svg') }}" class="" alt="checkmark"> Free to list during our launch period</li>
                            <li><img src="{{ asset_url('images/check.svg') }}" class="" alt="checkmark"> Upload photos and item details in minutes</li>
                            <li><img src="{{ asset_url('images/check.svg') }}" class="" alt="checkmark"> Intuitive platform built specifically for restaurant equipment</li>
                            <li><img src="{{ asset_url('images/check.svg') }}" class="" alt="checkmark"> Listings are searchable by category and location</li>
                            <li><img src="{{ asset_url('images/check.svg') }}" class="" alt="checkmark"> Option to include a video to showcase your equipment</li>
                        </ul>
                        <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md fw-bold w-auto">List Equipment</a>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5">
                    <img src="{{ asset_url('images/home_calltoaction.jpg') }}" class="img-fluid blur-up lazyload" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-section pb-5">
    <div class="container box_container">
        <div class="title d-flex">
            <h2>Recent Blog Posts</h2>
            <a href="javascript:void(0);" class="view_more">View More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
        </div>
        <div class="row g-4">
            <div class="col-xxl-12 col-xl-8 col-lg-7 order-lg-2">
                <div class="row g-4 ratio_60">
                    <div class="col-xxl-4 col-sm-6">
                        <div class="blog-box">
                            <div class="blog-image">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset_url('images/blog.jpg') }}" class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>
                            <div class="blog-contain">
                                <a href="javascript:void(0);" class="mb-3 d-block">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h3>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </a>
                                <a href="javascript:void(0);" class="read_more">Read More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6">
                        <div class="blog-box">
                            <div class="blog-image">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset_url('images/blog.jpg') }}" class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>
                            <div class="blog-contain">
                                <a href="javascript:void(0);" class="mb-3 d-block">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h3>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </a>
                                <a href="javascript:void(0);" class="read_more">Read More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-sm-6">
                        <div class="blog-box">
                            <div class="blog-image">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset_url('images/blog.jpg') }}" class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>
                            <div class="blog-contain">
                                <a href="javascript:void(0);" class="mb-3 d-block">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h3>
                                    <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </a>
                                <a href="javascript:void(0);" class="read_more">Read More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
