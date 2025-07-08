<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/imageRevealHover.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>

<body>
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="popup-search-box">
        <button class="searchClose"><img src="assets/img/icon/close.svg" alt="img"></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><img src="assets/img/icon/search-white.svg" alt="img"></button>
        </form>
    </div>

    <header class="nav-header header-layout1">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="active menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">HOME</span>
                                                <span class="effect-1">HOME</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Digital Agency</a></li>
                                            <li><a href="home-2.html">Creative Agency</a></li>
                                            <li><a href="home-3.html">Design Studio</a></li>
                                            <li><a href="home-4.html">Digital Marketing</a></li>
                                            <li><a href="home-5.html">Modern Agency</a></li>
                                            <li><a href="home-6.html">Creative Studio</a></li>
                                            <li><a href="home-7.html">Startup Agency</a></li>
                                            <li><a href="home-8.html">Personal Portfolio</a></li>
                                            <li><a href="home-9.html">Portfolio Showcase</a></li>
                                            <li><a href="home-10.html">Interactive Link</a></li>
                                            <li><a href="home-11.html">Showcase Carousel</a></li>
                                            <li><a href="home-12.html">Fullscreen Slideshow</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PAGES</span>
                                                <span class="effect-1">PAGES</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Page</a></li>
                                            <li class="menu-item-has-children"><a href="service.html">Service Page</a>
                                                <ul class="sub-menu">
                                                    <li><a href="service.html">Service Version 1</a></li>
                                                    <li><a href="service-2.html">Service Version 2</a></li>
                                                    <li><a href="service-3.html">Service Version 3</a></li>
                                                    <li><a href="service-details.html">Service Details Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="team.html">Team Page</a>
                                            </li>
                                            <li><a href="team-details.html">Team Details Page</a></li>
                                            <li><a href="pricing.html">Pricing Page</a></li>
                                            <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="faq.html">FAQ Page</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">PORTFOLIO</span>
                                                <span class="effect-1">PORTFOLIO</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="project.html">Portfolio Masonary</a></li>
                                            <li><a href="project-2.html">Portfolio Pinterest</a></li>
                                            <li><a href="project-3.html">Portfolio Gallery</a></li>
                                            <li><a href="project-4.html">Portfolio Full Width</a></li>
                                            <li><a href="project-5.html">Portfolio Slider</a></li>
                                            <li><a href="project-6.html">Portfolio Interactive</a></li>
                                            <li><a href="project-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="link-effect">
                                                <span class="effect-1">BLOG</span>
                                                <span class="effect-1">BLOG</span>
                                            </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog Standard</a></li>
                                            <li><a href="blog-2.html">Blog 2 Column</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="link-effect">
                                                <span class="effect-1">CONTACT</span>
                                                <span class="effect-1">CONTACT</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle sidebar-btn">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <button type="button" class="search-btn searchBoxToggler"><img src="assets/img/icon/search.svg" alt="icon">
                                    <span class="link-effect">
                                        <span class="effect-1">SEARCH</span>
                                        <span class="effect-1">SEARCH</span>
                                    </span>
                                </button>
                                <button type="button" class="sidebar-btn sideMenuToggler">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="hero-wrapper hero-1" id="hero">
        <div class="container">
            <div class="hero-style1">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1s">Next Generation</h1>

                        <h1 class="hero-title text-lg-end wow img-custom-anim-right" data-wow-duration="1.7s" data-wow-delay="0.1s">Digital Agency</h1>
                    </div>
                    <div class="col-lg-6 offset-lg-6">
                        <p class="hero-text wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">We are digital agency that helps businesses develop immersive and engaging user experiences that drive top level growth</p>
                        <div class="btn-group fade_right">
                            <a href="project.html" class="btn wow img-custom-anim-right" >
                                <span class="link-effect">
                                    <span class="effect-1">VIEW OUR WORKS</span>
                                    <span class="effect-1">VIEW OUR WORKS</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hero-year-tag wow img-custom-anim-left">
                    <img src="assets/img/icon/worldwide.svg" alt="img">
                    <h6>Agency of this year worldwide</h6>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>


    <script src="{{ asset('assets/frontend/js/twinmax.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
