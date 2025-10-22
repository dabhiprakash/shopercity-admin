@extends('admin.layouts.master')
@section('content')
<section class="pt-0">
    <div class="container-fluid p-0">
        <div class="custom-row">
            <div class="sidebar-col">
                @include('admin.layouts.sidebar')
            </div>
            <div class="content-col">
                <div class="card  no_card">
                    <div class="card-body">
                        <div class="pending-list ">
                            <div class="title d-flex">
                                <h2>Review Listing</h2>
                            </div>
                            <div class="box_title mt-2 table-search-content">
                                <div class="d-flex gap-2">
                                    <img src="{{ asset_url('images/icons/pending.svg') }}" class="" alt="">
                                    <h4> Pending Listings </h4>
                                </div>
                                <div class="custom-search-wrapper searchbox_group">
                                    <input type="search" class="form-control" id="reviewSearch" placeholder="Search...">
                                    <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                                </div>
                            </div>

                            <div id="reviewListLoader" class="datatable-loader text-center my-5">
                                <div class="spinner-border text-primary" role="status">
                                </div>
                            </div>
                            <table id="reviewPendingListTable" class="display" style="display: none">
                                <thead>
                                    <tr>
                                        <th>Listing</th>
                                        <th>Seller</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Submitted</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="data_group review-list">
                                                <img src="{{ asset_url('images/review-list/review-list.svg') }}" class="img-fluid" alt="">
                                                <span>
                                                    <h4>Commercial Pizza Oven - Blodgett 1048</h4>
                                                    <p>Used - Good</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Mario's Kitchen</h5>
                                                    <p>New York, NY </p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Cooking Equipment</h5>
                                                    <p>Grills & Griddles</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>$12 500</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>28.08.2025</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md flex gap-2">
                                                    <i class="fas fa-check"></i>
                                                    Approve
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data_group review-list">
                                                <img src="{{ asset_url('images/review-list/review-list.svg') }}" class="img-fluid" alt="">
                                                <span>
                                                    <h4>Industrial Deep Fryer -Frymaster H50</h4>
                                                    <p>Used - Good</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Mario's Kitchen</h5>
                                                    <p>New York, NY </p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Cooking Equipment</h5>
                                                    <p>Grills & Griddles</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>$12 500</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>28.08.2025</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md flex gap-2">
                                                    <i class="fas fa-check"></i>
                                                    Approve
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data_group review-list">
                                                <img src="{{ asset_url('images/review-list/review-list.svg') }}" class="img-fluid" alt="">
                                                <span>
                                                    <h4>Stainless Steel Prep Table with Storage</h4>
                                                    <p>Used - Good</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Equipment Plus</h5>
                                                    <p>Chicago, IL </p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Storage, Tables & Shelving</h5>
                                                    <p>Grills & Griddles</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>$450</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>28.08.2025</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md flex gap-2">
                                                    <i class="fas fa-check"></i>
                                                    Approve
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pending-list pt-5">
                            <div class="box_title mt-2 table-search-content">
                                <div class="d-flex gap-2">
                                    <img src="{{ asset_url('images/icons/flag.svg') }}" class="" alt="">
                                    <h4>Flagged Listings</h4>
                                </div>
                                <div class="custom-search-wrapper searchbox_group">
                                    <input type="search" class="form-control" id="reviewFlagSearch" placeholder="Search...">
                                    <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                                </div>
                            </div>
                            <div id="reviewFlaggedListLoader" class="datatable-loader text-center my-5">
                                <div class="spinner-border text-primary" role="status">
                                </div>
                            </div>
                            <table id="reviewFlaggedListTable" class="display" style="display: none">
                                <thead>
                                    <tr>
                                        <th>Listing</th>
                                        <th>Seller</th>
                                        <th>Flag Reason</th>
                                        <th>Reports</th>
                                        <th>Submitted</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="data_group">
                                                <span>
                                                    <h4>Commercial Refrigerator - <span class="text-orange custom-line">Suspicious Pricing</span></h4>
                                                    <p>$500 . Used . Good</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Discount Equip</h5>
                                                    <p>deals@discount.com </p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <span class="d-flex gap-2 align-items-center">
                                                    <i class="fas fa-exclamation-triangle danger"></i>
                                                    <h6>
                                                        Price significantly below market value
                                                    </h6>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span class="status bg-danger">3</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>28.08.2025</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md flex gap-2">
                                                    <i class="fas fa-check"></i>
                                                    Approve
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data_group">
                                                <span>
                                                    <h4>Restaurant Furniture Set - <span class="text-orange custom-line">Duplicate Content</span></h4>
                                                    <p>$2500 . Used . Good</p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>Furniture Resale</h5>
                                                    <p>info@fresale.com </p>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <span class="d-flex gap-2 align-items-center">
                                                    <i class="fas fa-exclamation-triangle danger"></i>
                                                    <h6>
                                                        Identical listing posted multiple times
                                                    </h6>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <span class="status bg-danger">3</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group review-list">
                                                <span>
                                                    <h5>28.08.2025</h5>
                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="d-flex gap-2">
                                                <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-md flex gap-2">
                                                    <i class="fas fa-check"></i>
                                                    Approve
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script></script>
@stop