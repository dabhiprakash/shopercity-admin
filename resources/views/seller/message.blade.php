@extends('seller.layouts.master')
@section('content')
<section class="pt-0 message-section">
    <div class="container-fluid p-0">
        <div class="custom-row">
            <div class="sidebar-col">
                @include('seller.layouts.sidebar')
            </div>
            <div class="content-col">
                <div class="card">
                    <div class="card-body">
                        <div class="title d-flex">
                            <h2>Messages</h2>
                        </div>
                        <div class="row gx-3 overflow-hidden">
                            <div class="col-12 col-md-4">
                                <div class="p-3 border_box chat-left-section ">
                                    <div class="search-section">
                                        <div class="theme-form-floating-2 search-box px-3">
                                            <input type="text" class="form-control" id="search" placeholder="Search Contacts...">
                                        </div>
                                        <ul class="nav nav-tabs border-0 bg-transparent" id="chatTab" role="tablist">
                                            <li class="nav-item" role="All">
                                                <button class="nav-link active" id="all-tab" data-bs-toggle="tab"
                                                    data-bs-target="#all" type="button" role="tab">All
                                                </button>
                                            </li>
                                            <li class="nav-item" role="read">
                                                <button class="nav-link" id="read-tab" data-bs-toggle="tab" data-bs-target="#read"
                                                    type="button" role="tab">Read
                                                </button>
                                            </li>
                                            <li class="nav-item" role="unread">
                                                <button class="nav-link" id="unread-tab" data-bs-toggle="tab" data-bs-target="#unread"
                                                    type="button" role="tab">Unread
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="chatTabContent">
                                        <ul class="list-group chat-user-list flex-column" id="all" role="tabpanel">
                                            <li class="d-flex justify-content-between align-items p-4 py-3 border-top cursor-pointer">
                                                <div class="d-flex align-items-center">
                                                    <div class="position-relative me-3">
                                                        <img src="{{asset_url('images/message-user/user.png')}}" class="rounded-circle" alt="User Avatar" width="40" height="40">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Floris Molenaar</h6>
                                                        <span>Et harum quidem rerum ...</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted">Thursday</span>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between align-items p-4 border-top cursor-pointer">
                                                <div class="d-flex align-items-center">
                                                    <div class="position-relative me-3">
                                                        <img src="{{asset_url('images/message-user/user.png')}}" class="rounded-circle" alt="User Avatar" width="40" height="40">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Floris Molenaar</h6>
                                                        <span>Et harum quidem rerum ...</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted">Thursday</span>
                                                </div>
                                            </li>
                                            <li class="d-flex justify-content-between align-items p-4 border-top cursor-pointer">
                                                <div class="d-flex align-items-center">
                                                    <div class="position-relative me-3">
                                                        <img src="{{asset_url('images/message-user/user.png')}}" class="rounded-circle" alt="User Avatar" width="40" height="40">
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Floris Molenaar</h6>
                                                        <span>Et harum quidem rerum ...</span>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted">Thursday</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 g-2x-0">
                                <div class="d-flex flex-column mb-3 col-md-12 border_box">
                                    <div class="chat-message-section">
                                        <div class="chat_header px-4 pt-4 pb-3 border-bottom">
                                            <h5 class="mb-1 fw-bold">Floris Molenaar</h5>
                                            <p class="mb-0 small ">Customer</p>
                                        </div>

                                        <div class="flex-grow-1 overflow-auto p-4 mh-100 chat-message-box">
                                            <div class="d-flex align-items-start my-2 single-message-box">
                                                <div class="d-flex header-section">
                                                    <img src="{{asset_url('images/message-user/user.png')}}" class="rounded-circle me-2" alt="Floris Avatar" width="40" height="40">
                                                    <span class="border rounded-circle bg-success position-relative chat-active-user"></span>
                                                    <div class="d-flex flex-column profile-details">
                                                        <h5 class="fw-bold me-3">Floris Molenaar</h5>
                                                        <span class="text-muted">Delivered: September 16, 2025, 3:55 pm</span>
                                                    </div>
                                                </div>
                                                <div class="w-100 message-content">
                                                    <div class="d-flex pb-2 profile-details">
                                                        <h5 class="fw-bold me-3">Floris Molenaar</h5>
                                                        <span class="text-muted">Delivered: September 16, 2025, 3:55 pm</span>
                                                    </div>
                                                    <div class="message-box">
                                                        <p class="mb-1 lh-base">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                                                        <div class="d-flex border_box product-detail-box">
                                                            <div class="d-flex p-2 align-items-center">
                                                                <img src="{{asset_url('images/about2.jpg')}}" class="rounded me-3 product-image" alt="Product Image">
                                                                <div class="d-flex flex-column justify-content-between">
                                                                    <h4 class="mb-1 fw-bolder">Univex M20 - Planetary Mixer 20qt.</h4>
                                                                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                                        <div class="d-flex flex-column gap-2">
                                                                            <h5 class="fw-500">
                                                                                <img src="{{asset_url('images/icons/note-checked.svg')}}" class="me-1">Very Good
                                                                            </h5>
                                                                            <h5 class="fw-500">
                                                                                <img src="{{asset_url('images/icons/location.svg')}}" class="me-2">27321-Nashville, TN
                                                                            </h5>
                                                                        </div>
                                                                        <h3 class="fw-bold mt-1" style="color: #fd7e14;">$2,300.00</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start my-2 mt-4 single-message-box">
                                                <div class="d-flex header-section">
                                                    <img src="{{asset_url('images/message-user/user.png')}}" class="rounded-circle me-2" alt="Floris Avatar" width="40" height="40">
                                                    <span class="border rounded-circle bg-gray position-relative chat-active-user"></span>
                                                    <div class="d-flex flex-column profile-details">
                                                        <h5 class="fw-bold me-3">Floris Molenaar</h5>
                                                        <span class="text-muted">Delivered: September 16, 2025, 3:55 pm</span>
                                                    </div>
                                                </div>
                                                <div class="w-100 message-content">
                                                    <div class="d-flex pb-2 profile-details">
                                                        <h5 class="fw-bold me-3">Floris Molenaar</h5>
                                                        <span class="text-muted">Delivered: September 16, 2025, 3:55 pm</span>
                                                    </div>
                                                    <div class="message-box">
                                                        <p class="mb-1 lh-base">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_box col-md-12 message-footer">
                                    <div class="flex-column align-items-center h-100">
                                        <textarea type="text" class="form-control border-0" placeholder="Write your message..."></textarea>
                                        <div class="d-flex justify-content-end align-items-center mt-2 message-footer-icon">
                                            <div class="d-flex border-end">
                                                <button class="mx-2 border-0 bg-transparent" type="button border-0"><img src="{{asset_url('images/icons/@.svg')}}"></button>
                                                <button class="mx-2 border-0 bg-transparent" type="button border-0"><img src="{{asset_url('images/icons/u-pin.svg')}}"></button>
                                                <button class="mx-2 border-0 bg-transparent me-4" type="button border-0"><img src="{{asset_url('images/icons/emoji.svg')}}"></button>
                                            </div>
                                            <button class="ms-5 theme-bg-color btn-animation rounded-circle text-white send-message-btn" type="button"><img src="{{asset_url('images/icons/send.svg')}}" class="h-75 w-75" alt="" srcset=""></button>
                                        </div>
                                    </div>
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
@stop