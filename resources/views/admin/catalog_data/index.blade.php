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
                                <h2>Catalog Data Management</h2>
                            </div>
                            <div class="row g-3 mb-5 half_size">
                                <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                    <div class="state_card">
                                        <div class="total-detail">
                                            <h5>Total Manufacturers</h5>
                                            <h3>5</h3>
                                        </div>
                                        <img src="{{ asset_url('images/icons/manufacturers.svg') }}" class="" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                    <div class="state_card">
                                        <div class="total-detail">
                                            <h5>Categories</h5>
                                            <h3>5</h3>
                                        </div>
                                        <img src="{{ asset_url('images/icons/catagory.svg') }}" class="" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                    <div class="state_card">
                                        <div class="total-detail">
                                            <h5>Total Models</h5>
                                            <h3>5</h3>
                                        </div>
                                        <img src="{{ asset_url('images/icons/green-box.svg') }}" class="" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                    <div class="state_card">
                                        <div class="total-detail">
                                            <h5>Active SKUs</h5>
                                            <h3>5</h3>
                                        </div>
                                        <img src="{{ asset_url('images/icons/purple-box.svg') }}" class="" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex action_header mb-5">
                                <div class="left_actions">
                                    <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                                        <li class="nav-item" role="Actives">
                                            <button class="nav-link active" id="manufacturers-tab" data-bs-toggle="tab" data-bs-target="#actives" type="button" role="tab">
                                                Manufacturers
                                            </button>
                                        </li>
                                        <li class="nav-item" role="Categories">
                                            <button class="nav-link" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab">
                                                Categories
                                            </button>
                                        </li>
                                        <li class="nav-item" role="Models">
                                            <button class="nav-link" id="models-tab" data-bs-toggle="tab" data-bs-target="#models" type="button" role="tab">
                                                Models
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="custom-search-wrapper searchbox_group w-30">
                                    <input type="search" class="form-control" id="catalogSearch" placeholder="Search...">
                                    <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search" ></i></button>
                                </div>
                                <div class="right_actions">
                                    <div class="btn_groups">
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md">
                                           <i class="fa fa-upload"></i>
                                            Import CSV
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-outline btn-md"><i class="fa fa-download"></i> Export CSV</a>
                                        <a href="#javascript:void(0);" class="btn bg-dark text-white btn-md" id="addNewBtn" >+ Add New</a>
                                    </div>
                                </div>
                            </div>
                            <div id="catalogLoader" class="datatable-loader text-center my-5">
                                <div class="spinner-border text-primary" role="status">
                                </div>
                            </div>
                            <table id="catalogTable" class="display" style="display: none">
                                <thead>
                                    <tr>
                                        <th>Manufacturer</th>
                                        <th>Country</th>
                                        <th>Categories</th>
                                        <th>Models</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="data_group">
                                                <h5>Hobart</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>USA</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>15</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>247</h5>
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
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data_group">
                                                <h5 >Vulcan</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5 >USA</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>12</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>189</h5>
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
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data_group">
                                                <h5 >Rational</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5 >Germany</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>8</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>95</h5>
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
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="data_group">
                                                <h5 >Hobart</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5 >USA</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>15</h5>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="data_group">
                                                <h5>247</h5>
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
                                                <a href="javascript:void(0);" class="btn btn-danger-outline btn-md action-box-btn">
                                                    <i class="fas fa-times danger"></i>
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
    <div class="modal fade custom-modal theme-modal" id="manufaturerModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <span class="data_group">
                        <span>
                            <h2>Add New Manufaturer</h2>
                        </span>
                    </span>
                    <button type="button" class="btn modal-close-btn" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="banner_form" class="form banner-form-cls" action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-4">
                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="p-3">
                                    <div class="row g-4">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2">
                                                <label for="title" class="form-label">Manufacturer Name <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Manufacturer Name" name="manufacturerName" id="title">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="type" class="form-label">Country <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Country" name="country" id="country">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="type" class="form-label">Description <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Description" name="description" id="description">
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
                    <button type="submit" class="btn theme-bg-color btn-animation btn-lg">
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
    <div class="modal fade custom-modal theme-modal" id="categoryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <span class="data_group">
                        <span>
                            <h2>Add New Category</h2>
                        </span>
                    </span>
                    <button type="button" class="btn modal-close-btn" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="banner_form" class="form banner-form-cls" action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-4">
                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="p-3">
                                    <div class="row g-4">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2">
                                                <label for="categoryName" class="form-label">Category Name <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Category Name" name="categoryName" id="categoryName">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="parentCategory" class="form-label">Parent Category <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Parent Category" name="parentCategory" id="parentCategory">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="type" class="form-label">Description<span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Description" name="categoryDescription" id="categoryDescription">
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
                    <button type="button" class="btn theme-bg-color btn-animation btn-lg">
                        Save&nbsp;
                        <div id="blogbuttonLoader" class="datatable-loader text-center d-none">
                            <div class="spinner-border spinner-border-sm text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade custom-modal theme-modal" id="modelModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header d-flex">
                    <span class="data_group">
                        <span>
                            <h2>Add New Model</h2>
                        </span>
                    </span>
                    <button type="button" class="btn modal-close-btn" data-bs-dismiss="modal">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="banner_form" class="form banner-form-cls" action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-4">
                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="p-3">
                                    <div class="row g-4">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2">
                                                <label for="categoryName" class="form-label">Model Name <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Modal Name" name="modalName" id="modalName">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="sku" class="form-label">SKU <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter SKU" name="sku" id="sku">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2">
                                                <label for="manufacturerName" class="form-label">Manufacturer <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Manufacturer Name" name="manufacturerName" id="manufacturerName">
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="category" class="form-label">Category <span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Select Category" name="category" id="category">
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <label for="specification" class="form-label">Specification<span class="text-red">*</span></label>
                                                <input type="text" class="form-control blog-title" placeholder="Enter Specification" name="specification" id="specification">
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
                    <button type="button" class="btn theme-bg-color btn-animation btn-lg">
                        Save&nbsp;
                        <div id="blogbuttonLoader" class="datatable-loader text-center d-none">
                            <div class="spinner-border spinner-border-sm text-light" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </section>
    <script>
        document.getElementById("addNewBtn").addEventListener("click", function() {
            let activeTab = document.querySelector("#myTab .nav-link.active");
            if (!activeTab) return;
            let tabId = activeTab.id; // actives-tab, categories-tab, models-tab
            if (tabId === "manufacturers-tab") {
                new bootstrap.Modal(document.getElementById('manufaturerModal')).show();
            } else if (tabId === "categories-tab") {
                new bootstrap.Modal(document.getElementById('categoryModal')).show();
            } else if (tabId === "models-tab") {
                new bootstrap.Modal(document.getElementById('modelModal')).show();
            }
        });
    </script>
@stop
