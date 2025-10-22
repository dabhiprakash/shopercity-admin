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
    <link rel="icon" href="{{ asset_url('images/favicon/1.png') }}" type="image/x-icon">
    <title>RestaurantBuyOuts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/vendors/bootstrap.css') }}">
    <link href="{{ asset_url('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset_url('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset_url('css/sweetalert.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset_url('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/style.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset_url('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset_url('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset_url('css/responsive.css') }}">
    <meta name="csrf-token" content="{{$csrf_token}}">
    <script>
        var admin_url = "{{route('admin')}}/";
        var public_url = "{{asset_url()}}/";
        var csrf_token = "{{$csrf_token}}";
    </script>

</head>

<body class="bg-effect">
    @include('admin.layouts.header')
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
    <script src="{{ asset_url('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset_url('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset_url('js/sweetalert.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatableLoader').show();
            $('#dummyTable').hide();

            const table = $('#dummyTable').DataTable({
                processing: true, // internal DataTables processing loader (optional)
                initComplete: function(settings, json) {
                    // Hide loader when table is fully initialized
                    $('#datatableLoader').hide();
                    $('#dummyTable').fadeIn();
                }
            });

        });
    </script>
    <script src="{{ asset_url('js/admin/custom.js') }}"></script>
    @if(isset($js_files))
    @foreach($js_files as $key => $js_value)
    <script src="{{ asset_url($js_value) }}?{{ time();}}"></script>
    @endforeach
    @endif

</body>


</html>
