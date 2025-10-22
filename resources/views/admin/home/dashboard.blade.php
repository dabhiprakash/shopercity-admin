@extends('admin.layouts.master')
@section('content')
<section class="pt-0">
    <div class="container-fluid p-0">
        <div class="custom-row">
            <div class="sidebar-col">
                @include('admin.layouts.sidebar')
            </div>
            <div class="content-col">
                <div class="card no_card">
                    <div class="card-body">
                        <div class="title d-flex">
                            <h2>Dashboard Overview</h2>
                        </div>
                        <div class="row g-3 half_size">
                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Live Listings</h5>
                                        <h3>1247</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/live_listings.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Total Users</h5>
                                        <div class="count_group">
                                            <h3>892</h3>
                                            <p><span>234</span> active sellers • <span>658</span> no listings</p>
                                        </div>
                                    </div>
                                    <img src="{{ asset_url('images/icons/active_users.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Total Listing Value</h5>
                                        <h3>$ 2.8M</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/cart.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Messages Sent</h5>
                                        <h3>5632</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/chat.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Items Sold</h5>
                                        <h3>189</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/cartr.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Platform Health</h5>
                                        <div class="count_group">
                                            <h3>Excellent</h3>
                                            <p>All systems operational</p>
                                        </div>
                                    </div>
                                    <img src="{{ asset_url('images/icons/health.svg') }}" class="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 no_card">
                    <div class="card-body">
                        <div class="title d-flex">
                            <h2>Moderation Queues</h2>
                        </div>
                        <div class="row g-3">
                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="border_box">
                                    <div class="box_title d-flex">
                                        <img src="{{ asset_url('images/icons/pending.svg') }}" class="" alt="">
                                        <h4>Pending Listings</h4>
                                        <span class="badge">3</span>
                                    </div>
                                    <ul class="listings_items">
                                        <li>
                                            <span class="item_info">
                                                <h5>AutoFry MTI-10X-Automatic Ventless Fryer</h5>
                                                <p>
                                                    <span>Seller: Mario's Kitchen</span>
                                                    <span><img src="{{ asset_url('images/icons/clock.svg') }}" class="" alt=""> 2 hours ago</span>
                                                </p>
                                            </span>
                                            <span class="item_actions">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Approve</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="item_info">
                                                <h5>AutoFry MTI-10X-Automatic Ventless Fryer</h5>
                                                <p>
                                                    <span>Seller: Mario's Kitchen</span>
                                                    <span><img src="{{ asset_url('images/icons/clock.svg') }}" class="" alt=""> 2 hours ago</span>
                                                </p>
                                            </span>
                                            <span class="item_actions">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Approve</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="border_box">
                                    <div class="box_title d-flex">
                                        <img src="{{ asset_url('images/icons/pending.svg') }}" class="" alt="">
                                        <h4>Pending Messages</h4>
                                        <span class="badge">3</span>
                                    </div>
                                    <ul class="listings_items">
                                        <li>
                                            <span class="item_info">
                                                <h5>john.doe@email.com -> seller@restaurant.com</h5>
                                                <p>
                                                    <span class="one_line">Is this still available?</span>
                                                    <span class="d-block mt-1"><img src="assets/images/icons/clock.svg" class="" alt=""> 1 hour ago</span>
                                                </p>
                                            </span>
                                            <span class="item_actions">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Approve</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="border_box">
                                    <div class="box_title d-flex">
                                        <img src="{{ asset_url('images/icons/flag.svg') }}" class="" alt="">
                                        <h4>Flagged Listings</h4>
                                        <span class="badge">3</span>
                                    </div>
                                    <ul class="listings_items">
                                        <li>
                                            <span class="item_info">
                                                <h5>Restaurant Furniture Set</h5>
                                                <p>
                                                    <span class="one_line">Reason: Duplicate pricing</span>
                                                    <span class="d-block mt-1"><img src="assets/images/icons/clock.svg" class="" alt=""> 1 hour ago</span>
                                                </p>
                                            </span>
                                            <span class="item_actions">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md">Approve</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop