<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>@if (isset($title)) {{ $title }} @endif | Pixadmin - Shada Pixel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Adminto - Tailwind HTML Admin Dashboard Template, A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admindash/asset/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('admindash/asset/css/app.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('admindash/asset/css/icons.min.css')}}" rel="stylesheet" type="text/css">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme Config Js -->
    <script src="{{asset('admindash/asset/js/config.js')}}"></script>
</head>

<body>

    <div class="flex wrapper">

        <!-- Menu -->
        @include('layouts.adminmenu')
        <!-- Sidenav Menu End  -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- Topbar Start -->
            @include('layouts.adminheader')
            <!-- Topbar End -->

            <main class="p-6">
                {{ $slot }}
            </main>

            <!-- Footer Start -->
            @include('layouts.adminfooter')
            <!-- Footer End -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!-- Theme Settings -->


    <!-- Plugin Js -->
    <script src="{{asset('admindash/asset/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admindash/asset/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admindash/asset/libs/lucide/umd/lucide.min.js')}}"></script>
    <script src="{{asset('admindash/asset/libs/%40frostui/tailwindcss/frostui.js')}}"></script>

    <!-- App Js -->
    <script src="{{asset('admindash/asset/js/app.js')}}"></script>

    <!-- knob plugin -->
    <script src="{{asset('admindash/asset/libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{asset('admindash/asset/libs/morris.js06/morris.min.js')}}"></script>
    <script src="{{asset('admindash/asset/libs/raphael/raphael.min.js')}}"></script>

    

    @if (isset($script))
    {{ $script }}
    @endif



</body>

</html>
