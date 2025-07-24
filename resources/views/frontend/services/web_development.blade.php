@extends('frontend')

@section('content')
    {{-- Hero Section --}}
    <div class="hero-wrapper hero-6" id="hero">
        <div class="container">
            <div class="hero-style6">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="hero-title text-lg-end wow img-custom-anim-right" data-wow-duration="1.5s"
                            data-wow-delay="0.1s">Creating The</h1>

                        <h1 class="hero-title wow img-custom-anim-left" data-wow-duration="1.7s" data-wow-delay="0.1s">Best
                            Web
                        </h1>

                        <h1 class="hero-title text-lg-end wow img-custom-anim-right" data-wow-duration="1.5s"
                            data-wow-delay="0.1s">Solution</h1>
                    </div>
                    <div class="col-lg-6 offset-lg-5">
                        <p class="hero-text wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">We
                            build high-performing websites that are fast, secure, and designed to grow your business online.
                        </p>
                    </div>
                </div>
                <a class="circle-btn style2 btn bg-theme text-title gsap-magnetic wow img-custom-anim-left" href="/contact">
                    <span class="link-effect">
                        <span class="effect-1">LET'S TALK <br> WITH US</span>
                        <span class="effect-1">LET'S TALK <br> WITH US</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="hero-6-thumb wow img-custom-anim-top jarallax"
            data-bg-src="{{ asset('assets/img/hero/hero-6-1.webp') }}">
        </div>
    </div>

    {{-- Counter Area --}}
    <div class="counter-area-1 space overflow-hidden">
        <div class="container">
            <div class="row gy-40 align-items-center justify-content-lg-between justify-content-center">
                <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                    <div class="counter-card">
                        <h3 class="counter-card_number">
                            <span class="counter-number">6</span>+
                        </h3>
                        <h4 class="counter-card_title">Years of Experience</h4>
                        <p class="counter-card_text">Expert web, mobile, and digital solutions backed by years of proven
                            industry experience.</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                    <div class="counter-card">
                        <h3 class="counter-card_number">
                            <span class="counter-number">100</span>+
                        </h3>
                        <h4 class="counter-card_title">Successful Projects</h4>
                        <p class="counter-card_text">Delivering scalable, user-focused software for startups and enterprises
                            alike.</p>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4 col-md-6 counter-divider">
                    <div class="counter-card">
                        <h3 class="counter-card_number">
                            <span class="counter-number">20</span>+
                        </h3>
                        <h4 class="counter-card_title">Satisfied Clients</h4>
                        <p class="counter-card_text">Trusted globally for our strategic approach and measurable results.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Detail Section --}}
    <div class="service-details-page-area space bg-smoke">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8">
                    <h3>Making Websites User-Friendly</h3>
                    <p class="sec-text mt-30">A professional website builds trust and credibility, helping customers feel
                        confident in your brand and services. It ensures that your online presence reflects the quality and
                        professionalism of your business, leaving a lasting impression on visitors.</p>
                    <p class="sec-text mb-40 mt-30">Expand your reach beyond local boundaries—connect with customers
                        anytime, anywhere, and grow your business faster. A user-friendly website not only attracts more
                        visitors but also keeps them engaged, leading to higher conversion rates and customer satisfaction.
                    </p>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="service.html">Builds Authenticity</a>
                                </h5>
                                <p class="feature-card-text mb-n2">A professional website creates trust and credibility,
                                    ensuring your business appears reliable and trustworthy.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="service.html">Unlimited Reach</a>
                                </h5>
                                <p class="feature-card-text mb-n2">An online presence allows you to connect with customers
                                    globally, breaking geographical barriers.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="service.html">Increases Growth</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Expand your business by attracting new customers online
                                    and increasing engagement.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="service.html">Simplifies Operations</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Streamline daily tasks with web-based software, improving
                                    efficiency and productivity.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="service.html">Improves Customer Service</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Enhance customer satisfaction with faster responses and
                                    better support through your website.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="service.html">Data-Driven Decisions</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Leverage web software to analyze business performance and
                                    make informed decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tab Section --}}
    <div class="custom-tab-section space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <h2 class="custom-tab-title">Our Services</h2>
                    <ul class="custom-nav-tabs" id="serviceTabs" role="tablist">
                        <li class="custom-nav-item" role="presentation">
                            <button class="custom-nav-link active" id="tab-custom-code" data-tab-target="custom-code"
                                type="button" role="tab" aria-controls="custom-code" aria-selected="true">
                                Custom Code Development
                            </button>
                        </li>
                        <li class="custom-nav-item" role="presentation">
                            <button class="custom-nav-link" id="tab-no-code" data-tab-target="no-code" type="button"
                                role="tab" aria-controls="no-code" aria-selected="false">
                                No-Code Development
                            </button>
                        </li>
                    </ul>
                    <div class="custom-tab-content" id="serviceTabsContent">
                        <div class="custom-tab-pane active" id="custom-code" role="tabpanel"
                            aria-labelledby="tab-custom-code">
                             @include('frontend.services.web-development.no_code_tab')
                            @include('frontend.services.web-development.custom_code_tab')
                        </div>
                        <div class="custom-tab-pane" id="no-code" role="tabpanel" aria-labelledby="tab-no-code">
                            @include('frontend.services.web-development.no_code_tab')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Include Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    {{-- Simple Tab JavaScript --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.custom-nav-link');
            const tabPanes = document.querySelectorAll('.custom-tab-pane');
            const navTabs = document.querySelector('.custom-nav-tabs');

            // Tab switching functionality
            tabButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('data-tab-target');

                    // Remove active class from all buttons and panes
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Add active class to clicked button and target pane
                    this.classList.add('active');
                    document.getElementById(targetId).classList.add('active');
                });
            });

            // Sticky shadow functionality
            if (navTabs) {
                const navTabsRect = navTabs.getBoundingClientRect();
                const originalTop = navTabsRect.top + window.pageYOffset;

                function checkSticky() {
                    const scrollTop = window.pageYOffset;
                    const isSticky = scrollTop >= (originalTop - 110);

                    if (isSticky) {
                        navTabs.classList.add('sticky-shadow');
                    } else {
                        navTabs.classList.remove('sticky-shadow');
                    }
                }

                // Check on scroll
                window.addEventListener('scroll', checkSticky);

                // Initial check
                checkSticky();
            }
        });
    </script>
@endsection
