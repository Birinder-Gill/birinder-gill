@extends('frontend')

@section('content')
    {{-- Hero Section --}}
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/about-banner.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Services</h1>
            </div>
        </div>
    </div> 

    {{-- Main Services Grid --}}
    <div class="services-main-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="title-area text-center mb-60">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">What We Offer</span>
                        <h2 class="sec-title wow fadeInUp" data-wow-delay="0.2s">Complete Digital Solutions</h2>
                        <p class="sec-text wow fadeInUp" data-wow-delay="0.3s">From concept to launch, we provide end-to-end
                            digital services that help businesses thrive in the digital landscape. Our expert team combines
                            creativity, technology, and strategy to deliver exceptional results.</p>
                    </div>
                </div>
            </div>

            <div class="row gy-40">
                {{-- UI/UX Design Service --}}
                <div class="col-lg-6">
                    <a href="/ui-ux-design" class="service-card-link">
                        <div class="service-main-card wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-main-header">
                                <div class="service-main-icon">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <div class="service-main-number">01</div>
                            </div>
                            <div class="service-main-content">
                                <h3 class="service-main-title">UI/UX Design</h3>
                                <p class="service-main-description">Creating intuitive and visually stunning user interfaces
                                    that provide exceptional user experiences. We focus on user-centered design principles to
                                    ensure your digital products are both beautiful and functional.</p>

                                <div class="service-features">
                                    <ul class="service-features-list">
                                        <li><i class="fas fa-check"></i> User Research & Analysis</li>
                                        <li><i class="fas fa-check"></i> Wireframing & Prototyping</li>
                                        <li><i class="fas fa-check"></i> Visual Design & Branding</li>
                                        <li><i class="fas fa-check"></i> Usability Testing</li>
                                    </ul>
                                </div>

                                <div class="service-main-footer">
                                    <div class="service-main-link">
                                        <span>Explore UI/UX Design</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Web Development Service --}}
                <div class="col-lg-6">
                    <a href="/web-development" class="service-card-link">
                        <div class="service-main-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-main-header">
                                <div class="service-main-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="service-main-number">02</div>
                            </div>
                            <div class="service-main-content">
                                <h3 class="service-main-title">Web Development</h3>
                                <p class="service-main-description">Building robust, scalable, and high-performance web
                                    applications using modern technologies. From simple websites to complex web platforms, we
                                    deliver solutions that drive your business forward.</p>

                                <div class="service-features">
                                    <ul class="service-features-list">
                                        <li><i class="fas fa-check"></i> Frontend Development</li>
                                        <li><i class="fas fa-check"></i> Backend Development</li>
                                        <li><i class="fas fa-check"></i> CMS Integration</li>
                                        <li><i class="fas fa-check"></i> E-commerce Solutions</li>
                                    </ul>
                                </div>

                                <div class="service-main-footer">
                                    <div class="service-main-link">
                                        <span>Explore Web Development</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Mobile Development Service --}}
                <div class="col-lg-6">
                    <a href="/mobile-development" class="service-card-link">
                        <div class="service-main-card wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-main-header">
                                <div class="service-main-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="service-main-number">03</div>
                            </div>
                            <div class="service-main-content">
                                <h3 class="service-main-title">Mobile Development</h3>
                                <p class="service-main-description">Developing native and cross-platform mobile applications
                                    that deliver seamless user experiences across iOS and Android platforms. Your mobile
                                    presence made powerful and engaging.</p>

                                <div class="service-features">
                                    <ul class="service-features-list">
                                        <li><i class="fas fa-check"></i> iOS App Development</li>
                                        <li><i class="fas fa-check"></i> Android App Development</li>
                                        <li><i class="fas fa-check"></i> Cross-platform Solutions</li>
                                        <li><i class="fas fa-check"></i> App Store Optimization</li>
                                    </ul>
                                </div>

                                <div class="service-main-footer">
                                    <div class="service-main-link">
                                        <span>Explore Mobile Development</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Digital Marketing Service --}}
                <div class="col-lg-6">
                    <a href="/digital-marketing" class="service-card-link">
                        <div class="service-main-card wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-main-header">
                                <div class="service-main-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="service-main-number">04</div>
                            </div>
                            <div class="service-main-content">
                                <h3 class="service-main-title">Digital Marketing</h3>
                                <p class="service-main-description">Boosting your online presence and driving growth with
                                    data-driven digital marketing strategies. From SEO to social media, we help you reach and
                                    engage your target audience effectively.</p>

                                <div class="service-features">
                                    <ul class="service-features-list">
                                        <li><i class="fas fa-check"></i> Search Engine Optimization</li>
                                        <li><i class="fas fa-check"></i> Social Media Marketing</li>
                                        <li><i class="fas fa-check"></i> Content Marketing</li>
                                        <li><i class="fas fa-check"></i> Analytics & Reporting</li>
                                    </ul>
                                </div>

                                <div class="service-main-footer">
                                    <div class="service-main-link">
                                        <span>Explore Digital Marketing</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> 
@endsection
