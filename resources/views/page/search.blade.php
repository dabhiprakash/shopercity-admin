@extends('layouts.master')
@section('content')
<section class="section-b-space shop-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-custom-3">
                    <div class="left-box">
                        <div class="shop-left-sidebar">
                            <div class="page_title">
                                <h2>Filter</h2>
                                <button class="btn-close filter-close desktop-display-none" id="filterToggle" type="button"></button>
                            </div>
                            <div class="accordion custom-accordion" id="accordionExample">
                                <div class="accordion-item no_arrow mobile-display-none">
                                    <h2 class="accordion-header" id="headingz">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#headingzero">
                                            <span>Keyword Search</span>
                                        </button>
                                    </h2>
                                    <div id="headingzero" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="searchbox_group">
                                                <input type="search" class="form-control" id="search" placeholder="Search by keyword...">
                                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search" ></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            <span>Category</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="category-list">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Cooking Equipment</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Refrigeration Equipment</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Beverage Equipment</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Commercial Ovens</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Food Prep Equipment</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Dishwashing & Sanitation</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Serving & Holding Equipment</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Storage, Tables & Shelving</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="category">
                                                        <label class="form-check-label" for="category">
                                                            <span class="name">Restaurant Furniture</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            <span>Condition</span>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="category-list">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Like New</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Excellent</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Very Good</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Good</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Fair</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">For Parts Only</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="accordion-item no_arrow">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#heading3">
                                            <span>Price Range</span>
                                        </button>
                                    </h2>
                                    <div id="heading3" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <input type="search" class="form-control mb-3" id="search" placeholder="Minimum Price">
                                            <input type="search" class="form-control" id="search" placeholder="Maximum Price">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading8">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#heading4">
                                            <span>Brand</span>
                                        </button>
                                    </h2>
                                    <div id="heading4" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="searchbox_group mb-3">
                                                <input type="search" class="form-control" id="search" placeholder="Search brand...">
                                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search" ></i></button>
                                            </div>
                                            <ul class="category-list">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Brand 1</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Brand 2</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Brand 3</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Brand 4</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Brand 5</span>
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="condition">
                                                        <label class="form-check-label" for="condition">
                                                            <span class="name">Brand 6</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="accordion-item no_arrow">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#heading3">
                                            <span>Zip Code & Radius Filter</span>
                                        </button>
                                    </h2>
                                    <div id="heading3" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <input type="search" class="form-control mb-3" id="search" placeholder="ZIP">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-custom-">
                    <div class="search_results">
                        <div class="search-box mobile_search">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search by keyword...">
                                <button class="btn" type="button" id="button-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="top_filtered_menu">
                            <p>Showing <b>1 - 60 items</b> out of <b>105 possible</b> search results for <b>"Ovens"</b></p>
                            <div class="sorting">
                                <button class="btn filter_toggle btn-theme-outline" id="filterToggleShow"><i class="fa fa-filter"></i></button>
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <select class="form-select theme-form-select">
                                        <option value="city1">High Price</option>
                                        <option value="city1">Private</option>
                                    </select>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-outline btn-md"><img src="{{ asset_url('images/icons/grid.svg') }}" class="" alt=""></a>
                                <a href="javascript:void(0);" class="btn btn-outline btn-md"><img src="{{ asset_url('images/icons/list.svg') }}" class="" alt=""></a>
                            </div>
                        </div>
                        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <button class="btn btn-outline favourit_btn"><i class="fa fa-heart"></i></button>
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
                                            <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                            <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                            <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="product-section-3 pb-5">
                        <div class="title d-flex">
                            <h2>Featured Listings</h2>
                            <a href="javascript:void(0);" class="view_more">View More <img src="{{ asset_url('images/icons/more.svg') }}" class="read-more-icon" alt=""></a>
                        </div>
                        <div class="search_results">
                            <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                                <div class="first_box">
                                    <div class="first_item bg_light_gray">
                                        <h3>Now it's Easier to Sell Your Used Restaurant Equipment</h3>
                                        <p>List your equipment in minutes and make it available to buyers locally and across the country.</p>
                                        <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">List Equipment</a>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-box h-100">
                                        <div class="product-header">
                                            <div class="product-image">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset_url('images/product/2.jpg') }}" class="img-fluid blur-up lazyloaded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-footer">
                                            <div class="product-detail">
                                                <a href="javascript:void(0);">
                                                    <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                                </a>
                                                <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                                    Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                                    cheese macaroni cheese croque monsieur.</p>
                                                <h6 class="unit"><img src="{{ asset_url('images/condition.svg') }}" alt=""> Good</h6>
                                                <h6 class="unit"><img src="{{ asset_url('images/location.svg') }}" alt=""> 98039 - Seattle, WA</h6>
                                                <h5 class="price"><span class="theme-color">$4295.00</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="first_item bg_light_gray mobile_calltoaction">
                                <h3>Now it's Easier to Sell Your Used Restaurant Equipment</h3>
                                <p>List your equipment in minutes and make it available to buyers locally and across the country.</p>
                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">List Equipment</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@stop
