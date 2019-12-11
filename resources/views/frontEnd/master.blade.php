<!DOCTYPE html>
<html class="no-js">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/png" href="{{ asset('public/front/images/favicon.png')}}">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template CSS Files
    ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href="{{ asset('public/front/css/bootstrap.min.css')}}">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href="{{ asset('public/front/css/ionicons.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('public/front/css/animate.css')}}">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href="{{ asset('public/front/css/slider.css')}}">
    <!-- owl craousel css -->
    <link rel="stylesheet" href="{{ asset('public/front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/jquery.fancybox.css')}}">
    <!-- template main css file -->
    <link rel="stylesheet" href="{{ asset('public/front/css/main.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('public/front/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('public/front/css/slick-theme.css')}}">

    <!-- Template Javascript Files
    ================================================== -->
    <!-- modernizr js -->
    <script src="{{ asset('public/front/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <!-- jquery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- owl carouserl js -->
    <script src="{{ asset('public/front/js/owl.carousel.min.js')}}"></script>
    <!-- bootstrap js -->

    <script src="{{ asset('public/front/js/bootstrap.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('public/front/js/wow.min.js')}}"></script>
    <!-- slider js -->
    <script src="{{ asset('public/front/js/slider.js')}}"></script>
    <script src="{{ asset('public/front/js/jquery.fancybox.js')}}"></script>
    <!-- template main js -->
    <script src="{{ asset('public/front/js/main.js')}}"></script>
</head>
<body>
<!--
==================================================
Header Section Start
================================================== -->
@include('frontEnd.includes.header')

<!--
==================================================
Slider Section Start
================================================== -->
@yield('mainContent')

<!--
==================================================
Call To Action Section Start
================================================== -->
@include('frontEnd.includes.contact')
<!--
==================================================
Footer Section Start
================================================== -->
@include('frontEnd.includes.footer')

<script src="{{ asset('frontEnd')}}"></script>
<script src="{{ asset('public/front/js/plugin.js')}}"></script>
<script src="{{ asset('frontEnd')}}"></script>

</body>
</html>