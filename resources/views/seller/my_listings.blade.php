@extends('seller.layouts.master')
@section('content')
<section class="pt-0">
    <div class="container-fluid p-0">
        <div class="custom-row">
            <div class="sidebar-col">
                @include('seller.layouts.sidebar')
            </div>
            <div class="content-col">
                <div class="card">
                    <div class="card-body">
                        <div class="title d-flex">
                            <h2>My Listings</h2>
                        </div>
                        <div class="action_header">
                            <div class="left_actions">
                                <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="Actives">
                                        <button class="nav-link active" id="actives-tab" data-bs-toggle="tab"
                                            data-bs-target="#actives" type="button" role="tab">Active (4)</button>
                                    </li>
                                    <li class="nav-item" role="pending">
                                        <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending"
                                            type="button" role="tab">Pending (1)</button>
                                    </li>
                                    <li class="nav-item" role="Draft">
                                        <button class="nav-link" id="draft-tab" data-bs-toggle="tab" data-bs-target="#draft"
                                            type="button" role="tab">Draft (1)</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="right_actions">
                                <div class="view_switch">
                                    <a href="javascript:void(0);">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.96163 30.75C7.20387 30.75 6.5625 30.4875 6.0375 29.9625C5.5125 29.4375 5.25 28.7961 5.25 28.0384V7.96163C5.25 7.20387 5.5125 6.5625 6.0375 6.0375C6.5625 5.5125 7.20387 5.25 7.96163 5.25H28.0384C28.7961 5.25 29.4375 5.5125 29.9625 6.0375C30.4875 6.5625 30.75 7.20387 30.75 7.96163V28.0384C30.75 28.7961 30.4875 29.4375 29.9625 29.9625C29.4375 30.4875 28.7961 30.75 28.0384 30.75H7.96163ZM7.5 12.9923H28.5V7.96163C28.5 7.84613 28.4519 7.74037 28.3556 7.64437C28.2596 7.54812 28.1539 7.5 28.0384 7.5H7.96163C7.84613 7.5 7.74038 7.54812 7.64438 7.64437C7.54813 7.74037 7.5 7.84613 7.5 7.96163V12.9923ZM7.5 20.7578H28.5V15.2423H7.5V20.7578ZM7.96163 28.5H28.0384C28.1539 28.5 28.2596 28.4519 28.3556 28.3556C28.4519 28.2596 28.5 28.1539 28.5 28.0384V23.0078H7.5V28.0384C7.5 28.1539 7.54813 28.2596 7.64438 28.3556C7.74038 28.4519 7.84613 28.5 7.96163 28.5ZM9.57713 11.5905V8.87888H12.2884V11.5905H9.57713ZM9.57713 19.3556V16.6444H12.2884V19.3556H9.57713ZM9.57713 27.1211V24.4095H12.2884V27.1211H9.57713Z" fill="#DCDBDD"/>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);" class="active">
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.57713 16.9616V9.57713H16.9616V16.9616H9.57713ZM9.57713 26.4229V19.0384H16.9616V26.4229H9.57713ZM19.0384 16.9616V9.57713H26.4229V16.9616H19.0384ZM19.0384 26.4229V19.0384H26.4229V26.4229H19.0384ZM11.8268 14.7116H14.7116V11.8268H11.8268V14.7116ZM21.2884 14.7116H24.1733V11.8268H21.2884V14.7116ZM11.8268 24.1733H14.7116V21.2884H11.8268V24.1733ZM21.2884 24.1733H24.1733V21.2884H21.2884V24.1733ZM7.96163 30.75C7.20387 30.75 6.5625 30.4875 6.0375 29.9625C5.5125 29.4375 5.25 28.7961 5.25 28.0384V7.96163C5.25 7.20387 5.5125 6.5625 6.0375 6.0375C6.5625 5.5125 7.20387 5.25 7.96163 5.25H28.0384C28.7961 5.25 29.4375 5.5125 29.9625 6.0375C30.4875 6.5625 30.75 7.20387 30.75 7.96163V28.0384C30.75 28.7961 30.4875 29.4375 29.9625 29.9625C29.4375 30.4875 28.7961 30.75 28.0384 30.75H7.96163ZM7.96163 28.5H28.0384C28.1539 28.5 28.2596 28.4519 28.3556 28.3556C28.4519 28.2596 28.5 28.1539 28.5 28.0384V7.96163C28.5 7.84613 28.4519 7.74037 28.3556 7.64437C28.2596 7.54812 28.1539 7.5 28.0384 7.5H7.96163C7.84613 7.5 7.74038 7.54812 7.64438 7.64437C7.54813 7.74037 7.5 7.84613 7.5 7.96163V28.0384C7.5 28.1539 7.54813 28.2596 7.64438 28.3556C7.74038 28.4519 7.84613 28.5 7.96163 28.5Z" fill="#DCDBDD"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="btn_groups">
                                    <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">List Equipment</a>
                                    <a href="{{ url("/seller/new-listing") }}" class="btn bg-dark text-white btn-md">+ Create New Listing</a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section mt-2">
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <div class="product-image">
                                            <span class="status">Active</span>
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
                                        <hr>
                                        <div class="edit_btns">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">View</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Edit</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Duplicate</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <div class="product-image">
                                            <span class="status">Active</span>
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
                                        <hr>
                                        <div class="edit_btns">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">View</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Edit</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Duplicate</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <div class="product-image">
                                            <span class="status">Active</span>
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
                                        <hr>
                                        <div class="edit_btns">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">View</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Edit</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Duplicate</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="product-box h-100">
                                    <div class="product-header">
                                        <div class="product-image">
                                            <span class="status">Active</span>
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
                                        <hr>
                                        <div class="edit_btns">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">View</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Edit</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Duplicate</a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
