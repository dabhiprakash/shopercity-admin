@extends('admin.layouts.auth_master')
@section('content')
<div class="login_box pt-5">
    <div class="row justify-content-center align-items-center h-full">
        <div class="col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body mt-4 mb-4">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if ($errors->has('captcha'))
                    @foreach ($errors->get('captcha') as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $error }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form class="" id="admin-login-form" name="login" action="{{ route('admin.login.submit') }}" method="POST">
                        <!-- <form class="" id="admin-login-form" name="login" action="{{ admin_url('login') }}" method="POST"> -->
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input class="form-control" placeholder="" type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input class="form-control" placeholder="" type="password" name="password">
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Danger Code</label>
                                    <input class="form-control" placeholder="" type="text" name="danger_code">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Magic Number</label>
                                    <input class="form-control" placeholder="" type="text" name="magic_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Captcha</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="mr-2">{!! captcha_img('flat') !!}</span>
                                        <button type="button" class="btn" id="refresh-captcha">↻</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Enter Captcha</label>
                                    <input class="form-control mt-2" placeholder="" id="captcha" type="text" name="captcha">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember_me" value="option1" {{ (isset($_COOKIE['remember_admin'])) && $_COOKIE['remember_admin'] != '' ? 'checked' : '' }}>
                                    <span class="custom-control-label">Remember Me</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <!-- <a href="{{ admin_url('forgot-password') }}">Forgot Password?</a> -->
                                <a href="{{ route('admin.password.forgot') }}">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit mt-3 text-center">
                            <button type="submit" id="submit-admin-login" class="btn theme-bg-color btn-animation d-block w-100">
                                <i class="fa fa-circle-o-notch fa-spin hide mr-2"></i>
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('refresh-captcha').addEventListener('click', function() {
        fetch(admin_url + 'captcha-refresh')
            .then(res => res.json())
            .then(data => {
                document.querySelector('span').innerHTML = data.captcha;
            });
    });
</script>

@stop