@php
//$admin = Auth::guard('admin')->user();
$csrf_token = csrf_token();
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/vendors/bootstrap.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset_url('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/style.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/custom.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/responsive.css') }}">
    <script>
        var public_url = "{{asset_url()}}/";
        var csrf_token = "{{$csrf_token}}";
    </script>
</head>

<body class="">
    @include('layouts.auth_header')
    @yield('content')

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{ asset_url('js/jquery-3.6.0.min.js') }}"></script>

    <!-- jquery ui-->
    <script src="{{ asset_url('js/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset_url('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset_url('js/bootstrap/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset_url('js/bootstrap/popper.min.js') }}"></script>

    <!-- Lazyload Js -->
    <script src="{{ asset_url('js/lazysizes.min.js') }}"></script>

    <!-- Auto Height Js -->
    <script src="{{ asset_url('js/auto-height.js') }}"></script>

    <!-- script js -->
    <script src="{{ asset_url('js/script.js') }}"></script>
    <!-- dynamic js -->
    @if(isset($js_files))
    @foreach($js_files as $key => $js_value)
    <script src="{{ asset_url($js_value) }}?{{ time();}}"></script>
    @endforeach
    @endif
</body>


</html>