<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
{{--        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">--}}

<!-- all css here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/simple-line-icons.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/meanmenu.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

@yield('styles')

<body>

@include('layouts.header')





@yield('content')
@include('layouts.footer')
<script src="/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="/js/vendor/jquery-1.12.0.min.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/elevetezoom.js"></script>
<script src="/js/ajax-mail.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/main.js"></script>

@yield('scrits')
</body>

</html>
