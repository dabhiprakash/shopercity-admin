@extends('admin.layouts.master')
@section('content')

<div class="row pt-5">
    <div class="col-xl-8 col-lg-7">
        <div class="card">
            <div class="alert alert-success alert-block">
                    <!-- <button type="button" class="close" data-dismiss="alert">X</button> -->
                    <strong>Success</strong>
                </div>
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
                <div class="card-header border-bottom-0">
                    <div class="card-title">Profile Info</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $current_user->name }}">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $current_user->email }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button id="submit-profile" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card">
            <div class="card-header border-bottom-0">
                <div class="card-title">Edit Password</div>
            </div>
            <form  id="update-password-form" action="{{ admin_url('update-password') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" name="new_password" id="new_password">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password">
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button id="submit-update-password" class="btn btn-primary" type="submit">
                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

</script>
@stop
