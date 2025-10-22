@extends('admin.layouts.master')
@section('content')
    <div class="main-proifle mt-5">
        <div class="row">
            <div class="col-xl-7">
                <div class="box-widget widget-user">
                    <div class="widget-user-image d-sm-flex">
                        <div class="ml-sm-4 mt-4">
                            <h3 class="pro-user-username mb-3 font-weight-semibold"><span class="fa fa-user icons"></span> {{ $user?->name }}<i
                                    class="ri-checkbox-circle-line text-success ml-1 fs-14"></i></h3>
                            <div class="d-flex mb-2">
                                <span class="fa fa-envelope icons"></span>
                                <div class="h6 mb-0 ml-3 mt-1">{{ $user?->email }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-auto">
                <div>
                    <div class="main-profile-contact-list row">
                        <div class="media col-sm-4">
                            <div class="media-icon bg-primary  mr-3 mt-1">
                                <i class="fa fa-edit fs-20 text-white"></i>
                            </div>
                            <div class="media-body">
                                <span class="text-muted">List</span>
                                <div class="font-weight-semibold fs-25">
                                    328
                                </div>
                            </div>
                        </div>
                        <div class="media col-sm-4">
                            <div class="media-icon bg-success mr-3 mt-1">
                                <i class="fa fa-users fs-20 text-white"></i>
                            </div>
                            <div class="media-body">
                                <span class="text-muted">Followers</span>
                                <div class="font-weight-semibold fs-25">
                                    937k
                                </div>
                            </div>
                        </div>
                        <div class="media col-sm-4">
                            <div class="media-icon bg-orange mr-3 mt-1">
                                <i class="fa fa-wifi fs-20 text-white"></i>
                            </div>
                            <div class="media-body">
                                <span class="text-muted">Following</span>
                                <div class="font-weight-semibold fs-25">
                                    2,876
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-cover">
            <div class="wideget-user-tab">
                <div class="tab-menu-heading p-0">
                    <div class="tabs-menu1 px-3">
                        <ul class="nav">
                            <li><a href="#tab-7" class="active" data-toggle="tab">About</a></li>
                            <li><a href="#tab-8" data-toggle="tab" class="">List</a></li>
                            <li><a href="#tab-9" data-toggle="tab" class="">Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- /.profile-cover -->
    </div>
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="border-0">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-7">
                        <div class="card">
                            <div class="card-body border-top">
                                <h5 class="font-weight-semibold">About Us</h5>
                                <div class="main-profile-contact-list d-lg-flex">
                                    <div class="col-md-4 media">
                                        <div class="media-icon bg-primary text-white mr-3 mt-1">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Mobile</small>
                                            <div class="font-weight-semibold">
                                                {{ $user?->phone }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 media">
                                        <div class="media-icon bg-info text-white mr-3 mt-1">
                                            <i class="fa fa-map"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Current Address</small>
                                            <div class="font-weight-semibold">
                                                {{ $user?->address }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 media">
                                        <div class="media-icon bg-danger text-white mr-3 mt-1">
                                            <i class="fa fa-id-card"></i>
                                        </div>
                                        <div class="media-body">
                                            <small class="text-muted">Business name</small>
                                            <div class="font-weight-semibold">
                                                {{ $user?->business_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- main-profile-contact-list -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-8">
                        <div class="card p-5">
                            <div class="row">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-9">
                        <div class="card p-5">
                            <div class="row">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
