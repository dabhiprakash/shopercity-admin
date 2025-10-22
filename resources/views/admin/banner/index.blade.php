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
                        <div class="alert alert-success alert-dismissible fade show d-none" id="toster_div" role="alert">
                            <strong id="tost_message">Message</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="title d-flex">
                            <h2>Banner Management</h2>
                        </div>
                        <div class="row g-3 mb-5 half_size">
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Active Banner</h5>
                                        <h3>2</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/primary-image.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Total Impressions</h5>
                                        <h3>47024</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/blue-eye.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Total Clicks</h5>
                                        <h3>5560</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/click.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Average CTR</h5>
                                        <h3>11.82%</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/avarage.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex action_header mb-3">
                            <div class="left_actions">
                                <div class="box_title d-flex mt-2">
                                    <img src="{{ asset_url('images/icons/primary-image.svg') }}" class="" alt="">
                                    <h4>Banner Overview</h4>
                                </div>
                            </div>
                            <div class="custom-search-wrapper searchbox_group w-30">
                                <input type="search" class="form-control" id="bannerSearch" placeholder="Search...">
                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                            </div>
                            <div class="right_actions top_filtered_menu">
                                <div class="form-floating theme-form-floating-2 search-box">
                                    <select id="status" class="form-select theme-form-select">
                                        <option value="">All Status</option>
                                    </select>
                                </div>
                                <div class="btn_groups">
                                    <a href="#javascript:void(0);" class="btn bg-dark text-white btn-md" data-bs-toggle="modal" data-bs-target="#bannerModal">+ Create Banner</a>
                                </div>
                            </div>
                        </div>
                        <div id="bannerListLoader" class="datatable-loader text-center my-5">
                            <div class="spinner-border text-primary" role="status">
                            </div>
                        </div>
                        <table id="bannerTable" class="display" style="display: none">
                            <thead>
                                <tr>
                                    <th>Banner</th>
                                    <th>Type & Location</th>
                                    <th>Schedule</th>
                                    <th>Performance</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/gray-image.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>Holiday Equipment Sale</h4>
                                                <p>Priority 1</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span class="status bg-light-outline">Promotional</span>
                                            <p>Homepage Hero</p>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    <i class="fas fa-calendar"></i>
                                                    2025-08-01
                                                </h5>
                                                <p>
                                                    <i class="fas fa-clock"></i>
                                                    2025-08-31
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    12890 views
                                                </h5>
                                                <p>
                                                    1247 clicks
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-success">Active</span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/gray-image.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>New Manufacturer Partnership</h4>
                                                <p>Priority 2</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span class="status bg-light-outline">Announcement</span>
                                            <p>Homepage Banner</p>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    <i class="fas fa-calendar"></i>
                                                    2025-08-01
                                                </h5>
                                                <p>
                                                    <i class="fas fa-clock"></i>
                                                    2025-08-31
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    12890 views
                                                </h5>
                                                <p>
                                                    1247 clicks
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-scheduled">Scheduled</span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/gray-image.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>Winter Maintenance Tips</h4>
                                                <p>Priority 3</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span class="status bg-light-outline">Educational</span>
                                            <p>Blog Sidebar</p>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    <i class="fas fa-calendar"></i>
                                                    2025-08-01
                                                </h5>
                                                <p>
                                                    <i class="fas fa-clock"></i>
                                                    2025-08-31
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    12890 views
                                                </h5>
                                                <p>
                                                    1247 clicks
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-light">Ended</span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/gray-image.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4>Black Friday Deals</h4>
                                                <p>Priority 4</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span class="status bg-light-outline">Promotional</span>
                                            <p>Category Pages</p>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    <i class="fas fa-calendar"></i>
                                                    2025-08-01
                                                </h5>
                                                <p>
                                                    <i class="fas fa-clock"></i>
                                                    2025-08-31
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>
                                                    12890 views
                                                </h5>
                                                <p>
                                                    1247 clicks
                                                </p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-success">Active</span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                <i class="fas fa-trash"></i>
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
</section>
<div class="modal fade custom-modal theme-modal" id="bannerModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header d-flex">
                <span class="data_group">
                    <span>
                        <h2>Create New Banner</h2>
                    </span>
                </span>
                <button type="button" class="btn modal-close-btn" data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <!-- //action="" method="POST" enctype="multipart/form-data" -->
                <form id="banner_form" class="form banner-form-cls" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="banner_id" class="banner_id" value="<?php echo (isset($banner_id) && $banner_id != '' ? $banner_id : ''); ?>" />
                    <div class="row g-4">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="alert alert-success alert-dismissible fade show" id="model_toster_div" role="alert">
                                <strong id="model_tost_message">Message</strong>
                                <button type="button" class="btn-close custom-alert-btn" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="p-3">
                                <div class="row g-4">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="form-floating theme-form-floating-2">
                                            <label for="title" class="form-label">Banner Title <span class="text-red">*</span></label>
                                            <input type="text" class="form-control blog-title" placeholder="Enter banner title" name="title" id="title">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <label for="type" class="form-label">Banner Type <span class="text-red">*</span></label>
                                            <select class="form-control" placeholder="Select banner type" name="type" id="type">
                                                <option value="">Select banner type</option>
                                                <option value="promotional">Promotional</option>
                                                <option value="announcement">Announcement</option>
                                                <option value="educational">Educational</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <label class="form-label">Display Location <span class="text-red">*</span></label>
                                            <select class="form-control" placeholder="Select display location" name="location" id="location">
                                                <option value="">Select display location</option>
                                                <option value="homepage-hero">Homepage Hero</option>
                                                <option value="homepage-banner">Homepage Banner</option>
                                                <option value="blog-sidebar">Blog Sidebar</option>
                                                <option value="category-pages">Category Pages</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <label class="form-label">Priority <span class="text-red">*</span></label>
                                            <select class="form-control" placeholder="Select banner priority" name="priority" id="priority">
                                                <option value="">Select banner priority</option>
                                                <option value="1">Priority 1</option>
                                                <option value="2">Priority 2</option>
                                                <option value="3">Priority 3</option>
                                                <option value="4">Priority 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <label class="form-label">Start date <span class="text-red">*</span></label>
                                            <input type="text" class="form-control blog-title" placeholder="mm.dd.yyyy" name="start_date">
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <label class="form-label">End date <span class="text-red">*</span></label>
                                            <input type="text" class="form-control blog-title" placeholder="mm.dd.yyyy" name="end_date">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                        <div class="upload_box">
                                            <div class="upload_content text-center">
                                                <img src="{{ asset_url('images/icons/upload.svg') }}" class="" alt="">
                                                <h5>Upload</h5>
                                            </div>
                                            <input class="file-uploader" type="file" name="image" id="image" accept="image/*" />
                                        </div>
                                        <div id="custom-image-error"></div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                        <div class="form-floating theme-form-floating-2">
                                            <label for="title" class="form-label">Link <span class="text-red">*</span></label>
                                            <input type="text" class="form-control blog-title" placeholder="Enter banner link" name="link" id="link">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <label class="form-label">Description (Optional)</label>
                                            <input type="text" class="form-control blog-title" placeholder="Enter banner description or note" name="description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer footer_action">
                <button type="button" class="btn btn-outline btn-md" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn theme-bg-color btn-animation btn-lg" id="btnSave">
                    Save&nbsp;
                    <div id="blogbuttonLoader" class="datatable-loader d-none">
                        <div class="spinner-border spinner-border-sm text-light" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>
@stop
