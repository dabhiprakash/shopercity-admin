@extends('admin.layouts.master')
@section('content')
<section class="pt-0">
        <div class="container-fluid p-0">
            <div class="custom-row">
                <div class="sidebar-col">
                    @include('admin.layouts.sidebar')
                </div>
                <div class="content-col">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <!-- <button type="button" class="close" data-dismiss="alert">X</button> -->
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <!-- <button type="button" class="close" data-dismiss="alert">X</button> -->
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form  id="profile-form" class="form" action="{{ admin_url('update-profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="user_id" value="{{ $current_user->id }}" name="id">
                        <div class="card">
                            <div class="card-body">
                                <div class="title d-flex">
                                    <h2>Admin Profile</h2>
                                </div>
                                <div class="row g-4 mt-2">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating theme-form-floating-2 search-box">
                                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="{{ $current_user->name }}">
                                                    <label for="name">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating theme-form-floating-2 search-box">
                                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $current_user->email }}">
                                                    <label for="name">Email address</label>
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
                                    <button type="submit" class="btn theme-bg-color btn-animation btn-md">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="content-col">
                    <div class="accordion change-password mb-3" id="accordionChangePassword">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="changePassword">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Change Password
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="changePassword" data-bs-parent="#accordionChangePassword">
                                <div class="accordion-body">
                                    <form  id="update-password-form" action="{{ admin_url('update-password') }}" method="POST">
                                        @csrf
                                        <div class="title">
                                            <h2>Change Password</h2>
                                        </div>
                                        <div class="row g-3 mt-1 px-1 pb-2">
                                            <!-- <div class="col-lg-3">
                                                <div class="form-floating theme-form-floating-2 search-box">
                                                    <input type="password" class="form-control" id="password">
                                                    <label for="name">Old Password</label>
                                                </div>
                                            </div> -->
                                            <div class="col-lg-3">
                                                <div class="form-floating theme-form-floating-2 search-box">
                                                    <input type="password" class="form-control" name="new_password" id="new_password">
                                                    <label for="name">New Password</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-floating theme-form-floating-2 search-box">
                                                    <input type="password" class="form-control" name="confirm_password">
                                                    <label for="name">Confirm Password</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <button id="submit-update-password" class="btn theme-bg-color btn-animation btn-md" type="submit">Save New Password</button>
                                            </div>
                                        </form>
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
