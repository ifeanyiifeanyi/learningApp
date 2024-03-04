<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name') }} -  @yield('title')</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset("") }}user/assets/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/line-awesome.css">
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/fancybox.css">
    <link rel="stylesheet" href="{{ asset("") }}user/assets/css/style.css">
    <!-- end inject -->
    @yield('css')
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
@include('user.layouts.header')
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->


<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    @include('user.layouts.navbar')
    <div class="dashboard-content-wrap">
        <div class="mb-4 ml-3 dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent">
            <i class="mr-1 la la-bars"></i> Dashboard Nav
        </div>
@yield('user')
        
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
@include('user.layouts.modal')
<!-- end modal -->

<!-- template js files -->
<script src="{{ asset("") }}user/assets/js/jquery-3.4.1.min.js"></script>
<script src="{{ asset("") }}user/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset("") }}user/assets/js/bootstrap-select.min.js"></script>
<script src="{{ asset("") }}user/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset("") }}user/assets/js/isotope.js"></script>
<script src="{{ asset("") }}user/assets/js/jquery.counterup.min.js"></script>
<script src="{{ asset("") }}user/assets/js/fancybox.js"></script>
<script src="{{ asset("") }}user/assets/js/chart.js"></script>
<script src="{{ asset("") }}user/assets/js/doughnut-chart.js"></script>
<script src="{{ asset("") }}user/assets/js/bar-chart.js"></script>
<script src="{{ asset("") }}user/assets/js/line-chart.js"></script>
<script src="{{ asset("") }}user/assets/js/datedropper.min.js"></script>
<script src="{{ asset("") }}user/assets/js/emojionearea.min.js"></script>
<script src="{{ asset("") }}user/assets/js/animated-skills.js"></script>
<script src="{{ asset("") }}user/assets/js/jquery.MultiFile.min.js"></script>
<script src="{{ asset("") }}user/assets/js/main.js"></script>
@yield('js')
</body>
</html>