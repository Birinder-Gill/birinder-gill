@extends('frontend')

@push('body-class', 'digital-marketing-page')

@section('content')
    <div class="hero-wrapper hero-5" id="hero">
        <div class="global-carousel" id="heroSlider5" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="false">
            <div class="hero-slider" data-bg-src="{{ asset('assets/img/hero/digital-marketing-hero-1.webp') }}">
                <div class="hero-overlay" data-overlay="title" data-opacity="5"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="hero-style5">
                                <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Digital Marketing</h1>
                                <p class="hero-text" data-ani="slideindown" data-ani-delay="0.2s">We are a digital marketing
                                    agency that helps businesses grow with strategic campaigns, engaging content, and
                                    data-driven results.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 align-self-end text-lg-end">
                            <div class="text-lg-end" data-ani="slideindown" data-ani-delay="0.3s">
                                <a class="circle-btn style2 btn bg-theme text-title gsap-magnetic" href="/contact">
                                    <span class="link-effect">
                                        <span class="effect-1">LET'S TALK <br> WITH US</span>
                                        <span class="effect-1">LET'S TALK <br> WITH US</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider" data-bg-src="{{ asset('assets/img/hero/digital-marketing-hero-2.webp') }}">
                <div class="hero-overlay" data-overlay="title" data-opacity="5"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="hero-style5">
                                <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Growth Marketing</h1>
                                <p class="hero-text" data-ani="slideindown" data-ani-delay="0.2s">Transform your brand with
                                    powerful digital strategies that drive traffic, generate leads, and boost conversions
                                    across all channels.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 align-self-end text-lg-end">
                            <div class="text-lg-end" data-ani="slideindown" data-ani-delay="0.3s">
                                <a class="circle-btn style2 btn bg-theme text-title gsap-magnetic" href="/contact">
                                    <span class="link-effect">
                                        <span class="effect-1">LET'S TALK <br> WITH US</span>
                                        <span class="effect-1">LET'S TALK <br> WITH US</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    <div class="space digital-marketing-services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center mb-60">
                        <h2 class="sec-title">Our Digital Marketing Services</h2>
                        <p class="sec-text">Comprehensive digital marketing solutions to grow your business and reach your
                            target audience effectively.</p>
                    </div>
                </div>
            </div>

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 class="feature-card-title">
                            <a href="#">Search Engine Optimization</a>
                        </h4>
                        <p class="feature-card-text">Improve your website's visibility and ranking on search engines to
                            drive organic traffic and increase conversions.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h4 class="feature-card-title">
                            <a href="#">Social Media Marketing</a>
                        </h4>
                        <p class="feature-card-text">Build brand awareness and engage with your audience across all major
                            social media platforms.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fas fa-ad"></i>
                        </div>
                        <h4 class="feature-card-title">
                            <a href="#">Pay-Per-Click Advertising</a>
                        </h4>
                        <p class="feature-card-text">Drive immediate traffic and leads with targeted Google Ads and social
                            media advertising campaigns.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4 class="feature-card-title">
                            <a href="#">Email Marketing</a>
                        </h4>
                        <p class="feature-card-text">Nurture leads and retain customers with personalized email campaigns
                            that drive engagement and sales.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        <h4 class="feature-card-title">
                            <a href="#">Content Marketing</a>
                        </h4>
                        <p class="feature-card-text">Create valuable, relevant content that attracts and engages your
                            target audience while building brand authority.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="feature-card-title">
                            <a href="#">Analytics & Reporting</a>
                        </h4>
                        <p class="feature-card-text">Track performance and optimize campaigns with detailed analytics and
                            comprehensive reporting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Benefits Section --}}
    <div class="service-details-page-area space bg-smoke">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8">
                    <h3 class="sec-title">Why Choose Our Digital Marketing Services?</h3>
                    <p class="sec-text mt-3">Partner with us to leverage proven strategies and cutting-edge tools that
                        deliver measurable results for your business growth.</p>

                    <div class="row gy-4 mt-3">
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="#">Data-Driven Strategies</a>
                                </h5>
                                <p class="feature-card-text mb-n2">We use advanced analytics and market research to create
                                    strategies that deliver real, measurable results for your business.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="#">Multi-Channel Approach</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Reach your audience across multiple touchpoints with
                                    integrated campaigns that maximize your marketing reach and impact.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="#">ROI-Focused Campaigns</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Every campaign is designed with clear objectives and
                                    KPIs to ensure maximum return on your marketing investment.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-card bg-white">
                                <h5 class="feature-card-title">
                                    <a href="#">Expert Team</a>
                                </h5>
                                <p class="feature-card-text mb-n2">Work with certified digital marketing professionals who
                                    stay updated with the latest trends and best practices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Solution for Every Stage --}}
    <div class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center mb-60">
                        <h2 class="sec-title">Solution for Every Stage</h2>
                        <p class="sec-text">Tailored digital marketing strategies that grow with your business, from startup to market leader.</p>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="solution-stage-accordion" id="solutionAccordion">
                        <div class="solution-stage-item">
                            <div class="solution-stage-header" data-bs-toggle="collapse" data-bs-target="#visionaries" aria-expanded="false" aria-controls="visionaries">
                                <h4 class="solution-stage-title">Visionaries & Innovators</h4>
                                <div class="solution-stage-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="visionaries" class="collapse solution-stage-content" data-bs-parent="#solutionAccordion">
                                <div class="solution-stage-body">
                                    <p>Transform your innovative ideas into market-ready digital presence. We help visionaries establish their brand foundation with strategic digital marketing that positions you as an industry pioneer.</p>
                                    <ul class="solution-features">
                                        <li>Brand identity and positioning strategy</li>
                                        <li>Thought leadership content marketing</li>
                                        <li>Industry-specific SEO foundation</li>
                                        <li>Social media presence establishment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="solution-stage-item">
                            <div class="solution-stage-header" data-bs-toggle="collapse" data-bs-target="#localheroes" aria-expanded="false" aria-controls="localheroes">
                                <h4 class="solution-stage-title">Local Heroes</h4>
                                <div class="solution-stage-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="localheroes" class="collapse solution-stage-content" data-bs-parent="#solutionAccordion">
                                <div class="solution-stage-body">
                                    <p>Dominate your local market with targeted strategies that connect you with nearby customers. Perfect for businesses ready to become the go-to choice in their community.</p>
                                    <ul class="solution-features">
                                        <li>Local SEO and Google My Business optimization</li>
                                        <li>Geo-targeted advertising campaigns</li>
                                        <li>Community engagement strategies</li>
                                        <li>Local review management and reputation building</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="solution-stage-item">
                            <div class="solution-stage-header" data-bs-toggle="collapse" data-bs-target="#trailblazers" aria-expanded="false" aria-controls="trailblazers">
                                <h4 class="solution-stage-title">Growth Trailblazers</h4>
                                <div class="solution-stage-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="trailblazers" class="collapse solution-stage-content" data-bs-parent="#solutionAccordion">
                                <div class="solution-stage-body">
                                    <p>Scale rapidly with data-driven growth strategies. We accelerate your expansion with advanced marketing techniques that capture new markets and maximize conversions.</p>
                                    <ul class="solution-features">
                                        <li>Advanced conversion optimization</li>
                                        <li>Multi-channel campaign management</li>
                                        <li>Marketing automation and funnel optimization</li>
                                        <li>Performance analytics and growth hacking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="solution-stage-item">
                            <div class="solution-stage-header" data-bs-toggle="collapse" data-bs-target="#marketleaders" aria-expanded="false" aria-controls="marketleaders">
                                <h4 class="solution-stage-title">Market Leaders</h4>
                                <div class="solution-stage-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="marketleaders" class="collapse solution-stage-content" data-bs-parent="#solutionAccordion">
                                <div class="solution-stage-body">
                                    <p>Maintain your competitive edge and expand your market dominance. Sophisticated strategies for established businesses looking to innovate and stay ahead of the competition.</p>
                                    <ul class="solution-features">
                                        <li>Enterprise-level marketing strategies</li>
                                        <li>Brand authority and market positioning</li>
                                        <li>Advanced analytics and competitive intelligence</li>
                                        <li>Innovation-driven content and campaign strategies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
