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
                            <h2>Messaging Moderation</h2>
                        </div>
                        <div class="row g-3 mb-5 half_size">
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Pending Review</h5>
                                        <h3>3</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/pending.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>High Risk</h5>
                                        <h3 class="text-danger">1</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/warning.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Flagged</h5>
                                        <h3>1</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/delete.svg') }}" class="" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-3 col-lg-6 col-md-4 col-sm-6">
                                <div class="state_card">
                                    <div class="total-detail">
                                        <h5>Today's Reviews</h5>
                                        <h3>24</h3>
                                    </div>
                                    <img src="{{ asset_url('images/icons/check.svg') }}" class="" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-space-between top_filtered_menu">
                            <div class="custom-search-wrapper searchbox_group w-30">
                                <input type="search" class="form-control" id="search" placeholder="Search...">
                                <button type="submit" class="btn theme-bg-color btn-animation btn-md"><i class="fa-solid fa-search"></i></button>
                            </div>
                            <div class="form-floating theme-form-floating-2 search-box">
                                <select id="allmessages" class="form-select theme-form-select">
                                    <option value="">All Messages</option>
                                </select>
                            </div>
                        </div>
                        <div id="messageLoader" class="datatable-loader text-center my-5">
                            <div class="spinner-border text-primary" role="status">
                            </div>
                        </div>
                        <table id="messageTable" class="display" style="display: none">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Subject</th>
                                    <th>Risk</th>
                                    <th>Submitted</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4 class="text-black">John Smith</h4>
                                                <p>john.buyer@email.com</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4 class="text-black">Mario's Kitchen</h4>
                                                <p>mario@marioskitchen.com</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>Interest in Pizza Oven</h5>
                                                <p>Hi! I'm very interested in your Blodgett pizza o…</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-light">Low Risk</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>28.08.2025</h5>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn" data-bs-toggle="modal" data-bs-target="#viewMessageModal">
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
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4 class="text-black">John Smith</h4>
                                                <p>john.buyer@email.com</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4 class="text-black">Mario's Kitchen</h4>
                                                <p>mario@marioskitchen.com</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>Bulk Purchase Inquiry</h5>
                                                <p>I'm looking to purchase... </p>
                                                <span class="status bg-danger tag fw-normal">contact me</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status bg-pending">Medium Risk</span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>28.08.2025</h5>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn" data-bs-toggle="modal" data-bs-target="#viewMessageModal">
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
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4 class="text-black">John Smith</h4>
                                                <p>john.buyer@email.com</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <img src="{{ asset_url('images/icons/letter_avatar.svg') }}" class="img-fluid" alt="">
                                            <span>
                                                <h4 class="text-black">Mario's Kitchen</h4>
                                                <p>mario@marioskitchen.com</p>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>Cash Deal</h5>
                                                <p>I want to buy this immediately...</p>
                                                <div class="d-flex gap-2">
                                                    <span class="status bg-danger tag fw-normal">cash</span>
                                                    <span class="status bg-danger tag fw-normal">meet</span>
                                                    <span class="status bg-ex-light tag fw-normal">+1</span>
                                                </div>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <span class="status bg-danger">High Risk</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="data_group">
                                            <span>
                                                <h5>28.08.2025</h5>
                                            </span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="d-flex gap-2">
                                            <a href="javascript:void(0);" class="btn btn-outline btn-md action-box-btn" data-bs-toggle="modal" data-bs-target="#viewMessageModal">
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
</section>

<div class="modal message-review-modal fade theme-modal" id="viewMessageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center justify-content-center header-title">
                        <img src="{{ asset_url('images/icons/message-circle.svg') }}" class="img-fluid" alt="">
                        <h4 class="mb-0 ms-3">Message Review</h4>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-md bg-danger p-2">High Risk</a>
                </div>
                <div class="pb-4 mt-5">
                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <div class="border_box">
                                <div class="message_data_group">
                                    <h6 class="mb-3">From</h6>
                                    <h4 class="mb-1">Suspicious User</h4>
                                    <span>fake@suspicious.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border_box">
                                <div class="message_data_group">
                                    <h6 class="mb-3">To</h6>
                                    <h4 class="mb-1">Quick Serve Co</h4>
                                    <span>contact@quickserve.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="border_box">
                            <div class="d-flex justify-content-between align-items-center header-title">
                                <h4 class="mb-0">Message Content</h4>
                                <small class="text-muted">28.12.2024, 12:45:00</small>
                            </div>
                            <span class="data_group mt-3">
                                <span>
                                    <span>Subject</span>
                                    <h4 class="mt-2">Cash Deal</h4>
                                </span>
                            </span>
                            <span class="data_group mt-3">
                                <span>
                                    <span>Content</span>
                                    <span class="bg-gray p-3 mt-2 rounded">I want to buy this immediately. I have cash ready. Meet me tomorrow at the parking lot behind the mall. No questions asked.</span>
                                </span>
                            </span>
                            <span class="data_group mt-2 mt-3">
                                <span class="d-flex flex-column">
                                    <span>Related Listing</span>
                                    <a href="javascript:void(0)" class="link-text mt-2">Industrial Deep Fryer</a>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="header-title">
                                <h4 class="mb-4">Risk Analysis</h4>
                            </div>
                            <span class="data_group mb-3">
                                <span class="d-flex justify-content-between align-items-center w-100">
                                    <span>Risk Score</span>
                                    <a href="javascript:void(0);" class="btn btn-md bg-danger p-2">High Risk</a>
                                </span>
                            </span>
                            <span class="data_group">
                                <span class="d-flex flex-column">
                                    <span>Flagged Words/Phrases</span>
                                    <div class="d-flex gap-2 mt-2 flex-wrap">
                                        <a href="javascript:void(0);" class="status bg-danger tag fw-normal">cash</a>
                                        <a href="javascript:void(0);" class="status bg-danger tag fw-normal">meet</a>
                                        <a href="javascript:void(0);" class="status bg-danger tag fw-normal">no questions</a>
                                    </div>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="footer-actions">
                    <div class="d-flex justify-content-between align-items-center gap-2">
                        <a href="javascript:void(0);" class="btn btn-outline btn-sm action-box-btn py-1" data-bs-dismiss="modal">
                            <i class="fas fa-eye me-1"></i>
                            Close
                        </a>
                        <div class="d-flex gap-2">
                            <a href="javascript:void(0);" class="btn btn-danger-outline btn-sm action-box-btn py-1">
                                <i class="fas fa-times me-1"></i>
                                Deny & Block
                            </a>
                            <a href="javascript:void(0);" class="btn theme-bg-color btn-animation btn-sm py-2">
                                <i class="fas fa-check me-1"></i>
                                Approve
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop