<!DOCTYPE html>
<html>
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@yield('page-title')</title>

        <meta name="keywords" content="BotanicalsPlus Botanicals Plus extracts blends manufacturing" />
        <meta name="author" content="BotanicalsPlus Inc">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/img/jeenIcon.ico') }}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{  asset('assets/img/apple-touch-icon.png') }} ">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('/vendor/animate/animate.compat.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/theme-shop.css') }}">

        <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />

        <!-- Revolution Slider CSS -->
        <link rel="stylesheet" href="{{ asset('/vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/rs-plugin/css/navigation.css') }}">
        <!-- Demo CSS -->
        <link rel="stylesheet" href="{{ asset('/css/demos/demo-law-firm.css') }}">
        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('/css/skins/jeen.css') }}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

        @yield('page-css')

        <!-- Head Libs -->
        <script src="{{ asset('/vendor/modernizr/modernizr.min.js') }}"></script>
        <style>
            .subNav {
                padding: 8px 35px !important;
                white-space: nowrap;
            }
        </style>
    </head>
    <body>

        <div class="body">
            @include('layout.header')
            <div role="main" class="main">
            @if(Auth::check())
            <nav class="navbar navbar-expand-md navbar-dark p-0 " style="
            background-color: darkgray;
            ">
            <div class="d-flex w-50 order-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                <ul class="navbar-nav subNavUl">
                    <li class="nav-item">
                        <a class="nav-link subNav" href="#">Orders</a>
                    </li>
                    <li class="nav-item active" style="
                        ">
                        <a class="nav-link nav-link subNav" href="#" style="">Saved Products<span class="sr-only">Saved Products</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link subNav" href="//codeply.com">Product Documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link subNav" href="#">Request Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link subNav" href="#">Quote Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link subNav" href="#">My Account
                        </a>
                    </li>
                </ul>
            </div>
            <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
            </nav>
            @endif
            @yield('page-content')
            </div>
            @include('layout.footer')
        </div>
        <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
        <script src="{{ asset('/vendor/popper/umd/popper.min.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('/vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/vendor/vide/jquery.vide.min.js') }}"></script>
        <script src="{{ asset('/vendor/vivus/vivus.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('/js/theme.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('/js/views/view.contact.js') }}"></script>

        <!-- Demo -->
        <script src="{{ asset('/js/demos/demo-law-firm.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('/js/custom.js') }}"></script>


        <!-- Theme Initialization Files -->
        <script src="{{ asset('/js/theme.init.js') }}"></script>
        @yield('page-js')
    </body>
</html>
