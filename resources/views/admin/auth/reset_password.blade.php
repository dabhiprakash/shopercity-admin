@extends('admin.layouts.auth_master')
@section('content')
<div class="">
    <div class="login_box pt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body mt-4 mb-4">
                        <div class="text-center">
                            <h1 class="mb-2">Reset Password</h1>
                            <p class="text-muted">Set new password for your account</p>
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
                        <form class="" action="{{ admin_url('reset-password') }}" id="admin-reset-password-form" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ isset($token) ? $token : '' }}">
                            <input type="hidden" name="email" value="{{ isset($email) ? $email : '' }}">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input class="form-control" placeholder="Password" id="password" type="password" name="password">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control" placeholder="Password" type="password" name="confirm_password">
                            </div>
                            <div class="submit">
                                <button class="btn theme-bg-color btn-animation d-block w-100"  type="submit">Save Password</button>
                            </div>
                        </form>
                        @if (isset($password_changed) && $password_changed === true)
                            <div class="text-center mt-4">
                                <p class="mb-0"><a class="text-dark ml-1" href="{{ admin_url('/') }}">Back to Login</a></p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
