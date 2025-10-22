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
                            <div class="user_info">
                                <img src="{{ asset_url('images/avatar.jpg') }}" class="" alt="">
                                <span>
                                    <h5>Rick Singer</h5>
                                    <h6>RestaurantBuyOuts</h6>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title d-flex">
                                <h2>Personal Information</h2>
                            </div>
                            <div class="row g-4 mg-0 mt-2">
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">Last Name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">Email address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">Business Name</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-1 col-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <select class="form-select theme-form-select">
                                                    <option value="city1">CA</option>
                                                    <option value="city1">VAN</option>
                                                </select>
                                                <label for="name">State</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">ZIP</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="text" class="form-control" id="name">
                                                <label for="name">Telephone</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="footer_action">
                                <a href="javascript:void(0);" class="btn btn-outline btn-default btn-md">Cancel</a>
                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
