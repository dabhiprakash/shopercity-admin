@extends('admin.layouts.master')
@section('content')
<section class="pt-0">
    <div class="container-fluid p-0">
        <div class="custom-row">
            <div class="sidebar-col">
                @include('admin.layouts.sidebar')
            </div>
            <div class="content-col user-listing">
                <div class="card no_card">
                    <div class="card-body">
                        <div class="title table-search-content mb-4">
                            <h2>User Management</h2>
                            <div class="custom-search-wrapper searchbox_group">
                                <input type="search" class="form-control" id="search" placeholder="Search...">
                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                            </div>
                        </div>
                        <div id="userListLoader" class="datatable-loader text-center my-5">
                            <div class="spinner-border text-primary" role="status">
                            </div>
                        </div>
                        <!-- <div class="custom-search-wrapper">
                                <input type="text" id="customSearch" class="form-control custom-search" placeholder="Search records...">
                            </div> -->
                        <table id="userListTable" class="display" style="display:none;">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Activity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>John Smith</h4>
                                                <p>Seller</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h4>john.smith@restaurant.com</h4>
                                                <p>(555) 123-4567 </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-success">Active</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h4>15 listings</h4>
                                                <p>5 messages</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td><a href="javascript:void(0);" class="btn btn-default btn-md" data-bs-toggle="modal" data-bs-target="#userModal">View Profile</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>Neo</h4>
                                                <p>Seller</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h4>john.smith@restaurant.com</h4>
                                                <p>(555) 444-333 </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-danger">Suspended</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h4>13 listings</h4>
                                                <p>7 messages</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td><a href="javascript:void(0);" class="btn btn-default btn-md">View Profile</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>Tailer Miller</h4>
                                                <p>Seller</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h4>john.smith@restaurant.com</h4>
                                                <p>(555) 123-4567 </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-success">Active</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h4>8 listings</h4>
                                                <p>24 messages</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td><a href="javascript:void(0);" class="btn btn-default btn-md">View Profile</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script></script>
<div class="modal user-modal fade theme-modal" id="userModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="border_box mb-4">
                    <span class="data_group">
                        <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                        <span>
                            <h4>john.smith@restaurant.com</h4>
                        </span>
                        <span class="status bg-success">Active</span>
                    </span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="row g-4">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="border_box">
                            <div class="row g-5">
                                <div class="col-xxl-8 col-xl-8 col-lg-4">
                                    <span class="data_group">
                                        <span>
                                            <h4>Email</h4>
                                            <p>john.smith@restaurant.com</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4">
                                    <span class="data_group">
                                        <span>
                                            <h4>Phone</h4>
                                            <p>(555) 123-4567</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <span class="data_group">
                                        <span>
                                            <h4>Address</h4>
                                            <p>123 Main St, New York, NY</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-xxl-8 col-xl-8 col-lg-4">
                                    <span class="data_group">
                                        <span>
                                            <h4>Join Date</h4>
                                            <p>2024-01-15</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-4">
                                    <span class="data_group">
                                        <span>
                                            <h4>Role</h4>
                                            <p>Seller</p>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12">
                                    <div class="btn_groups small_btns">
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-edit"></i> Edit Profile</a>
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-plus"></i> Create Listing</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary btn-md"><i class="fa fa-user-plus"></i> Suspend User</a>
                                        <a href="javascript:void(0);" class="btn btn-outline-primary btn-md"><i class="fa fa-user"></i> Ban Email</a>
                                        <a href="javascript:void(0);" class="btn btn-md bg-danger"><i class="fa fa-user"></i> Delete User</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="border_box">
                            <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                <li class="nav-item" role="Actives">
                                    <button class="nav-link active" id="actives-tab" data-bs-toggle="tab"
                                        data-bs-target="#actives" type="button" role="tab">Listing (4)</button>
                                </li>
                                <li class="nav-item" role="pending">
                                    <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending"
                                        type="button" role="tab">Messages (24)</button>
                                </li>
                            </ul>
                            <ul class="listings_items">
                                <li>
                                    <span class="item_info">
                                        <h5>AutoFry MTI-10X-Automatic Ventless Fryer</h5>
                                        <p>
                                            <span>Listed 2 days ago</span>
                                        </p>
                                    </span>
                                    <span class="item_actions">
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="item_info">
                                        <h5>AutoFry MTI-10X-Automatic Ventless Fryer</h5>
                                        <p>
                                            <span>Listed 2 days ago</span>
                                        </p>
                                    </span>
                                    <span class="item_actions">
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="item_info">
                                        <h5>AutoFry MTI-10X-Automatic Ventless Fryer</h5>
                                        <p>
                                            <span>Listed 2 days ago</span>
                                        </p>
                                    </span>
                                    <span class="item_actions">
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-eye"></i></a>
                                    </span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="btn btn-outline blue btn-lg mt-4">View All Listings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop