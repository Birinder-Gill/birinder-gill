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
                    <a href="/"><img src="{{ asset('assets/img/logo-dark.svg') }}" alt="Ovation"></a>
                </div>
                <p class="about-text">We craft digital experiences that captivate users and transform ideas into powerful, innovative solutions that drive business growth.</p>
                <div class="sidebar-wrap">
                    <h6>27 Division St, New York,</h6>
                    <h6>NY 10002, USA</h6>
                </div> 
                <div class="sidebar-wrap">
                    <h6><a href="tel:+91 70091 54010">+91 70091 54010</a></h6>
                    <h6><a href="mailto:birindergill53@gmail.com">birindergill53@gmail.com</a></h6>
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
            <a href="/"><img src="assets/img/logo.svg" alt="Logo"></a>
        </div>
        <div class="mobile-menu">
            <ul>
                <li>
                    <a href="/">
                        Home
                    </a>
                </li> 
                <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                        <li><a href="/ui-ux-design">UI/UX Design</a></li>
                        <li><a href="/web-development">Web Development</a></li>
                        <li><a href="/mobile-development">Mobile Development</a></li>
                        <li><a href="/digital-marketing">Digital Marketing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="/about">About</a>
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
            <h6><a href="tel:+91 70091 54010">+91 70091 54010</a></h6>
            <h6><a href="mailto:birindergill53@gmail.com">birindergill53@gmail.com</a></h6>
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
                            <a href="/"><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"></a>
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
                                <li>
                                    <a href="/about">
                                        <span class="link-effect">
                                            <span class="effect-1">ABOUT</span>
                                            <span class="effect-1">ABOUT</span>
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
                                        <li><a href="/mobile-development">Mobile Development</a></li>
                                        <li><a href="/digital-marketing">Digital Marketing</a></li>
                                    </ul>
                                </li>
                                 
                                <li>
                                    <a href="/portfolio">
                                        <span class="link-effect">
                                            <span class="effect-1">PORTFOLIO</span>
                                            <span class="effect-1">PORTFOLIO</span>
                                        </span>
                                    </a>
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
