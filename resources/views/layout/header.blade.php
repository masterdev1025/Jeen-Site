<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 98, 'stickySetTop': '-142px', 'stickyChangeLogo': true}">
    <div class="header-body border-color-primary border-top-0 box-shadow-none">
        <div class="header-container container z-index-2">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Jeen International" width="300" height="108"  data-sticky-width="111" data-sticky-height="40" data-sticky-top="135" src="{{ asset('assets/img/jeen_logo_home.png') }}" style="max-width: 100%;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end d-none d-sm-block">
                    <div class="header-row h-100">
                        <ul class="header-extra-info d-flex h-100 align-items-center">
                            <li class="align-items-center h-100 py-4 pr-4 d-none d-md-inline-flex">
                                <div class="header-extra-info-text  py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <i class="far fa-envelope text-7 p-relative"></i>
                                        </div>
                                        <div class="feature-box-info pl-1">
                                            <label>SEND US AN EMAIL</label>
                                            <strong><a href="mailto:info@jeen.com">INFO@JEEN.COM</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="align-items-center h-100 py-4">
                                <div class="header-extra-info-text py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <i class="fab fa-whatsapp text-7 p-relative"></i>
                                        </div>
                                        <div class="feature-box-info pl-1">
                                            <label>CALL US NOW</label>
                                            <strong><a href="tel:+19734391401">973-439-1401</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar bg-primary" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'background-color': 'transparent'}" data-sticky-header-style-deactive="{'background-color': '#0088cc'}">
            <div class="container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-nav header-nav-stripe header-nav-divisor header-nav-force-light-text justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '230px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown dropdown-full-color dropdown-light">
                                                    <a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="/">
                                                        Home
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-full-color dropdown-light">
                                                    <a class="dropdown-item {{ Request::segment(1) == 'about' ? 'active' : '' }}" href="/about">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-full-color dropdown-light">
                                                    <a class="dropdown-item {{ Request::segment(1) == 'products' ? 'active' : '' }}" href="/products">
                                                        Products
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-full-color dropdown-light">
                                                    <a class="dropdown-item {{ Request::segment(1) == 'formulary' ? 'active' : '' }}" href="/formulary">
                                                        Formulary
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-full-color dropdown-light">
                                                    <a class="dropdown-item {{ Request::segment(1) == 'brochures' ? 'active' : '' }}" href="/brochures">
                                                        Brochures
                                                    </a>
                                                </li>
                                                <li class="dropdown dropdown-full-color dropdown-light">
                                                    <a class="dropdown-item {{Request::segment(1) == 'contact' ? 'active' : '' }}" href="/contact">
                                                        Contact Us
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column ">
                                <div class="header-row justify-content-end">
                                    <div class="header-nav header-nav-stripe header-nav-divisor header-nav-force-light-text justify-content-end" data-sticky-header-style="{'minResolution': 991}"  data-sticky-header-style-deactive="{'margin-left': '0'}" style="margin-left: 0px;">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                            <nav class="collapse show" style="">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown dropdown-full-color dropdown-light dropdown-reverse">
                                                    @if(!Auth::check())
                                                    <a class="dropdown-item " href="/login">Login
                                                    </a>
                                                    @else
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                    @endif
                                                </li>
                                            </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="header-nav-features header-nav-features-no-border w-75">
                                        <form role="search" class=" w-100 d-none d-sm-flex" method="get" action="/products">
                                            <div class="simple-search input-group w-100">
                                            <input class="form-control border-0 border-radius-0 text-2" id="headerSearch" name="s" type="search" value="" placeholder="Search..." autocomplete="off">
                                            <span class="input-group-append bg-light border-0 border-radius-0">
                                            <button class="btn" type="submit">
                                            <i class="fa fa-search header-nav-top-icon"></i>
                                            </button>
                                            </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

