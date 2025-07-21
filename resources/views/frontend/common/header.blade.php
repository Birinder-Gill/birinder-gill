<div class="popup-search-box">
    <button class="searchClose"><img src="{{ asset('assets/img/icon/close.svg') }}" alt="img"></button>
    <form action="#">
        <input type="text" placeholder="Search Here..">
        <button type="submit"><img src="{{ asset('assets/img/icon/search-white.svg') }}" alt="img"></button>
    </form>
</div>

{{-- Sidebar --}}
<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><img src="assets/img/icon/close.svg" alt="icon"></button>
        <div class="widget footer-widget">
            <div class="widget-about">
                <div class="footer-logo">
                    <a href="index.html"><img src="assets/img/logo-white.svg" alt="Ovation"></a>
                </div>
                <p class="about-text">We are digital agency that helps businesses develop immersive and engaging</p>
                <div class="sidebar-wrap">
                    <h6>27 Division St, New York,</h6>
                    <h6>NY 10002, USA</h6>
                </div>
                <div class="sidebar-wrap">
                    <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
                    <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
                </div>
                <div class="social-btn style2">
                    <a href="https://www.facebook.com/">
                        <span class="link-effect">
                            <span class="effect-1"><i class="fab fa-facebook"></i></span>
                            <span class="effect-1"><i class="fab fa-facebook"></i></span>
                        </span>
                    </a>
                    <a href="https://instagram.com/">
                        <span class="link-effect">
                            <span class="effect-1"><i class="fab fa-instagram"></i></span>
                            <span class="effect-1"><i class="fab fa-instagram"></i></span>
                        </span>
                    </a>
                    <a href="https://twitter.com/">
                        <span class="link-effect">
                            <span class="effect-1"><i class="fab fa-twitter"></i></span>
                            <span class="effect-1"><i class="fab fa-twitter"></i></span>
                        </span>
                    </a>
                    <a href="https://dribbble.com/">
                        <span class="link-effect">
                            <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                            <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="contact.html" class="chat-btn gsap-magnetic">Let’s Talk with us</a>
        </div>
    </div>
</div>

{{-- Mobile Menu --}}
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-area">
        <button class="menu-toggle"><i class="fas fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.html"><img src="assets/img/logo.svg" alt="Ovation"></a>
        </div>
        <div class="mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="#">Home</a>
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
                    <a href="#">Pages</a>
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
                        <li><a href="team.html">Team Page</a></li>
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
                    <a href="#">Portfolio</a>
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
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog Standard</a></li>
                        <li><a href="blog-2.html">Blog 2 Column</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="sidebar-wrap">
            <h6>27 Division St, New York,</h6>
            <h6>NY 10002, USA</h6>
        </div>
        <div class="sidebar-wrap">
            <h6><a href="tel:1800123654987">+1 800 123 654 987 </a></h6>
            <h6><a href="mailto:frisk.agency@mail.com">frisk.agency@mail.com</a></h6>
        </div>
        <div class="social-btn style3">
            <a href="https://www.facebook.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                    <span class="effect-1"><i class="fab fa-facebook"></i></span>
                </span>
            </a>
            <a href="https://instagram.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                    <span class="effect-1"><i class="fab fa-instagram"></i></span>
                </span>
            </a>
            <a href="https://twitter.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                    <span class="effect-1"><i class="fab fa-twitter"></i></span>
                </span>
            </a>
            <a href="https://dribbble.com/">
                <span class="link-effect">
                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                    <span class="effect-1"><i class="fab fa-dribbble"></i></span>
                </span>
            </a>
        </div>
    </div>
</div>

{{-- Header --}}
<header class="nav-header header-layout1">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="/">
                                        <span class="link-effect">
                                            <span class="effect-1">HOME</span>
                                            <span class="effect-1">HOME</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="link-effect">
                                            <span class="effect-1">SERVICES</span>
                                            <span class="effect-1">SERVICES</span>
                                        </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="/ui-ux-design">UI/UX Design</a></li>
                                        <li><a href="/web-development">Web Development</a></li>
                                        <li><a href="/">Mobile Development</a></li>
                                        <li><a href="/">Digital Marketing</a></li>
                                    </ul>
                                </li>
                                {{-- <li class="menu-item-has-children">
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
                                </li> --}}
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
                                    <a href="/contact">
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
                            <button type="button" class="search-btn searchBoxToggler"><img
                                    src="{{ asset('assets/img/icon/search.svg') }}" alt="icon">
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
