@extends('frontend')

@section('content')
    {{-- Hero Section --}}
    <div class="hero-wrapper hero-3" id="hero">
        <div class="container">
            <div class="hero-style3">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="hero-title wow img-custom-anim-left">UI/UX Design</h1>
                        <div class="hero-3-thumb wow img-custom-anim-top">
                            <img class="w-100" src="{{ asset('assets/img/hero/ui-ux-hero.webp') }}" alt="img">
                        </div>
                        <h1 class="hero-title text-end wow img-custom-anim-right">with Experience</h1>
                    </div>
                    <div class="col-lg-6 offset-lg-6">
                        <p class="hero-text wow img-custom-anim-right">We are digital agency that helps businesses develop
                            immersive and engaging user experiences that drive top level growth</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Counter Area --}}
    <div class="counter-area-1 space-bottom overflow-hidden">
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


    {{-- Why Choose Us Area --}}
    <div class="why-area-1 space bg-theme">
        <div class="why-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.2s"
            data-right="0" data-top="-100px" data-bottom="140px">
            <img src="{{ asset('assets/img/normal/ui-ux-banner.webp') }}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area mb-45">
                        <h2 class="sec-title">Design is how it works—and inspires.</h2>
                    </div>
                    <h4>We Love What We Do</h4>
                    <p>We believe great UI/UX is about understanding people. Our team blends creativity and strategy to
                        design experiences that engage, build trust, and inspire action.</p>
                    <h4 class="mt-35">Why Work With Us</h4>
                    <p class="mb-n1">We simplify digital journeys—crafting clear, intuitive interfaces that connect your
                        brand and drive real results.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="feature-area-1 space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Why UI/UX Matters for Your Business</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('assets/img/icon/feature-icon1-1.svg') }}" alt="icon">
                        </div>
                        <h4 class="feature-card-title">
                            Why It’s Important
                        </h4>
                        <p class="feature-card-text">We guide you from brand identity to seamless user experiences, making
                            UI/UX simple and effective.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('assets/img/icon/feature-icon1-2.svg') }}" alt="icon">
                        </div>
                        <h4 class="feature-card-title">
                            Why Invest in It
                        </h4>
                        <p class="feature-card-text">Great UI/UX drives growth—boosting leads, loyalty, and brand strength
                            with every interaction.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="{{ asset('assets/img/icon/feature-icon1-3.svg') }}" alt="icon">
                        </div>
                        <h4 class="feature-card-title">
                            How We Help
                        </h4>
                        <p class="feature-card-text">We analyze, design, and deliver intuitive solutions tailored to your
                            users and business goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-area-3 space bg-smoke ui-ux-service-do">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xxl-4 col-xl-5 position-relative">
                    <div class="sec_title_static">
                        <div class="sec_title_wrap">
                            <div class="title-area">
                                <h2 class="sec-title">What Service Do We Offer</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7">
                    <div class="blog-grid-static-wrap">
                        <div class="blog-grid-static">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/normal/brand-identity-design.webp') }}"
                                        alt="Brand Identity Design">

                                </div>
                                <div class="blog-content">
                                    <h4 class="blog-title">Brand Identity Design</h4>
                                    <div class="post-meta-item blog-meta">
                                        Craft memorable branding that clearly communicates your unique story and appeals
                                        directly to your target audience.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-static">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/normal/custom-logo-design.webp') }}"
                                        alt="Custom Logo Design">

                                </div>
                                <div class="blog-content">
                                    <h4 class="blog-title">Custom Logo Design</h4>
                                    <div class="post-meta-item blog-meta">
                                        Design distinctive logos that create immediate recognition and trust, perfectly
                                        tailored to your business.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-static">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/normal/mobile-app-ui-ux.webp') }}"
                                        alt="Software & Mobile App UI/UX">

                                </div>
                                <div class="blog-content w-100">
                                    <h4 class="blog-title">Software & Mobile App UI/UX</h4>
                                    <div class="post-meta-item blog-meta">
                                        Create intuitive, visually appealing interfaces for software and mobile apps,
                                        ensuring seamless user experiences.​
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-grid-static">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/normal/web-design-development.webp') }}"
                                        alt="Web Design & Development">

                                </div>
                                <div class="blog-content">
                                    <h4 class="blog-title">Web Design & Development</h4>
                                    <div class="post-meta-item blog-meta">
                                        Deliver modern, responsive websites optimized for conversion, user-friendliness, and
                                        lasting impact.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
