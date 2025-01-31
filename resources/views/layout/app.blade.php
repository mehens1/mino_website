<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('company.fullName') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" media="all">
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}" type="text/css" media="all">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" type="text/css" media="all">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-default.css') }}" type="text/css" media="all">
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all">
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}" type="text/css" media="all">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assests/venobox/venobox.css') }}" type="text/css" media="all">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all">

    <link rel="stylesheet" href="{{ asset('venobox/fontawesome/css/all.css') }}" type="text/css" media="all">

    <!-- modernizr js -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>

    <div class="loader-wrapper">
        <span class="loader"></span>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    @include('layout.toparea')

    <div class="header-area" id="sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="/"><img src="{{ asset('assets/images/home1/logo_white.png') }}"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header-menu">
                        <ul>
                            @include('layout.navbar')
                        </ul>
                        <div class="header-secrch-icon search-box-outer">
                            <a href="#"><i class="bi bi-search"></i></a>
                        </div>
                        <div class="header-button">
                            <a href="https://mino.com.ng/client">Login</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="header-menu">
                <ul class="nav_scroll">
                    @include('layout.navbar')

                    <li><a href="https://mino.com.ng/client" class="bg-success text-light">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>

    @yield('pageContent')

    @include('layout.footer')

    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="bi bi-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>

    <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 0;">
            </path>
        </svg>
    </div>

    <!-- jquery js -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('assets/venobox/venobox.js') }}"></script>

    <!--  animated-text js -->
    <script src="{{ asset('assets/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script src="{{ asset('venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

    <!-- jquery scrollup js -->
    <script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
    <!-- theme js -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <!-- coustom js -->
    <script src="{{ asset('assets/js/coustom.js') }}"></script>
    <!-- barfiller -->
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <!-- barfiller -->
    <script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/silik-slider.js') }}"></script>

</body>

</html>
