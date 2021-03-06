<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mi Bodega Web || @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{URL}}images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{URL}}css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{URL}}css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{URL}}css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{URL}}css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{URL}}css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{URL}}css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{URL}}css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{URL}}css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{URL}}css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{URL}}css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{URL}}css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{URL}}css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{URL}}css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{URL}}style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{URL}}css/responsive.css">
        <!-- Modernizr js -->
        <script src="{{URL}}js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            @include('layouts.partials.header')
            <!-- Header Area End Here -->
            <!-- Begin Slider With Banner Area -->

            @yield('content')

            {{--@include('layouts.partials.slider')--}}
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
            {{--@include('layouts.partials.product')--}}
            <!-- Product Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            {{--@include('layouts.partials.staticbanner')--}}
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            {{--@include('layouts.partials.laptop')--}}
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            {{-- @include('layouts.partials.tvaudio') --}}
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            {{--@include('layouts.partials.statichome')--}}
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->
            {{--@include('layouts.partials.trending')--}}
            <!-- Li's Trending Product Area End Here -->
            <!-- Begin Li's Trendding Products Area -->
            {{--@include('layouts.partials.trendding')--}}
            <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->
            @include('layouts.partials.footer')
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            @include('layouts.partials.modal') 
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{URL}}js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="{{URL}}js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{URL}}js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="{{URL}}js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="{{URL}}js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="{{URL}}js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="{{URL}}js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{URL}}js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="{{URL}}js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="{{URL}}js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="{{URL}}js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="{{URL}}js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="{{URL}}js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="{{URL}}js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="{{URL}}js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="{{URL}}js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="{{URL}}js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="{{URL}}js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="{{URL}}js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="{{URL}}js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="{{URL}}js/main.js"></script>
</body>

<!-- index30:23-->
</html>