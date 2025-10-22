@extends('admin.layouts.auth_master')
@section('content')
    <div class="">
        <div class="login_box pt-5">
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body mt-4 mb-4">
                            <div class="text-center">
                                <h1 class="mb-2">Forgot Password</h1>
                                <p class="text-muted">Enter registered email address</p>
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
                            <form class="" action="{{ admin_url('forgot-password') }}" id="admin-forgot-password-form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                                <div class="submit">
                                    <button type="submit" id="submit-admin-forgot-password" class="btn theme-bg-color btn-animation d-block w-100" >
                                        <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                                        Proceed
                                    </button>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="mb-0"><a class="text-dark ml-1" href="{{ admin_url('/') }}">Back to Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
