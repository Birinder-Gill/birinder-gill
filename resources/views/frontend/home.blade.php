@extends('frontend')

@section('content')
    {{-- Hero --}}
    <div class="hero-wrapper hero-1" id="hero"></div>
    <div class="container">
        <div class="hero-style1">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="hero-title wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.1s">Next
                        Generation</h1>

                    <h1 class="hero-title text-lg-end wow img-custom-anim-right" data-wow-duration="1.7s"
                        data-wow-delay="0.1s">Digital Agency</h1>
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <p class="hero-text wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">We are
                        digital agency that helps businesses develop immersive and engaging user experiences that drive
                        top level growth</p>
                    <div class="btn-group fade_right">
                        <a href="project.html" class="btn wow img-custom-anim-right">
                            <span class="link-effect">
                                <span class="effect-1">VIEW OUR WORKS</span>
                                <span class="effect-1">VIEW OUR WORKS</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero-year-tag wow img-custom-anim-left">
                <img src="{{ asset('assets/img/icon/worldwide.svg') }}" alt="img">
                <h6>Agency of this year worldwide</h6>
            </div>
        </div>
    </div>
    </div>

    {{-- Contact Area --}}
    <div class="contact-area-1 space bg-theme" style="background-image: url('{{ asset('assets/img/bg/about-banner.jpg') }}'); background-size: cover; background-position: center; position: relative;">
        <div class="contact-img-overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.7);"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <!-- Left Column - Text & Titles -->
                <div class="col-lg-6">
                    <div class="contact-content-wrap">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s" style="color: #ffffff; font-size: 16px; font-weight: 500; margin-bottom: 15px; display: block;">Ready to Start Your Project?</span>
                        <h2 class="sec-title wow fadeInUp text-white mb-4" data-wow-delay="0.2s">Have Any Project on Your Mind?</h2>
                        <p class="wow fadeInUp mb-4" data-wow-delay="0.3s" style="font-size: 18px; color: #ffffff; line-height: 1.6;">Great! We're excited to hear from you and let's start something amazing together. Share your ideas and let's bring them to life.</p>
                        
                        <!-- Contact Info -->
                        <div class="contact-info-list wow fadeInUp" data-wow-delay="0.4s">
                            <div class="contact-info-item mb-3" style="display: flex; align-items: center;">
                                <div class="contact-icon" style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-phone" style="color: #ffffff; font-size: 18px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h6 style="color: #ffffff; margin-bottom: 5px; font-weight: 600;">Call Us</h6>
                                    <a href="tel:+917009154010" style="color: #ffffff; text-decoration: none; opacity: 0.9;">+91 70091 54010</a>
                                </div>
                            </div>
                            
                            <div class="contact-info-item mb-3" style="display: flex; align-items: center;">
                                <div class="contact-icon" style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-envelope" style="color: #ffffff; font-size: 18px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h6 style="color: #ffffff; margin-bottom: 5px; font-weight: 600;">Email Us</h6>
                                    <a href="mailto:birindergill53@gmail.com" style="color: #ffffff; text-decoration: none; opacity: 0.9;">birindergill53@gmail.com</a>
                                </div>
                            </div>
                            
                            <div class="contact-info-item" style="display: flex; align-items: center;">
                                <div class="contact-icon" style="width: 50px; height: 50px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                    <i class="fas fa-map-marker-alt" style="color: #ffffff; font-size: 18px;"></i>
                                </div>
                                <div class="contact-details">
                                    <h6 style="color: #ffffff; margin-bottom: 5px; font-weight: 600;">Visit Us</h6>
                                    <p style="color: #ffffff; margin: 0; opacity: 0.9;">27 Division St, New York, NY 10002, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-wrap wow fadeInUp" data-wow-delay="0.4s">
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="name"
                                            id="name" placeholder="Full name*" style="background: rgba(255,255,255,0.9); border: 2px solid #e9ecef; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-border" name="email"
                                            id="email" placeholder="Email address*" style="background: rgba(255,255,255,0.9); border: 2px solid #e9ecef; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="website"
                                            id="website" placeholder="Website link (Optional)" style="background: rgba(255,255,255,0.9); border: 2px solid #e9ecef; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="How Can We Help You*" id="contactForm" class="form-control style-border" rows="5" style="background: rgba(255,255,255,0.9); border: 2px solid #e9ecef; padding: 15px 20px; border-radius: 8px; min-height: 120px; margin-bottom: 20px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn w-100" style="padding: 15px 40px; font-size: 16px; font-weight: 600;">
                                    <span class="link-effect">
                                        <span class="effect-1">SEND MESSAGE</span>
                                        <span class="effect-1">SEND MESSAGE</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    <div class="services-showcase-area space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="title-area text-center mb-60">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">What We Offer</span>
                        <h2 class="sec-title wow fadeInUp" data-wow-delay="0.2s">Our Professional Services</h2>
                        <p class="sec-text wow fadeInUp" data-wow-delay="0.3s">We provide comprehensive digital solutions to help your business thrive in the modern digital landscape</p>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-showcase-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-showcase-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="service-showcase-content">
                            <h3 class="service-showcase-title">
                                <a href="/ui-ux-design">UI/UX Design</a>
                            </h3>
                            <p class="service-showcase-text">Create stunning, user-friendly interfaces that provide exceptional user experiences and drive engagement.</p>
                            <a href="/ui-ux-design" class="service-showcase-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-showcase-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-showcase-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="service-showcase-content">
                            <h3 class="service-showcase-title">
                                <a href="/web-development">Web Development</a>
                            </h3>
                            <p class="service-showcase-text">Build robust, scalable web applications using cutting-edge technologies and best practices.</p>
                            <a href="/web-development" class="service-showcase-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-showcase-card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-showcase-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="service-showcase-content">
                            <h3 class="service-showcase-title">
                                <a href="/mobile-development">Mobile Development</a>
                            </h3>
                            <p class="service-showcase-text">Develop native and cross-platform mobile applications that deliver seamless user experiences.</p>
                            <a href="/mobile-development" class="service-showcase-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-showcase-card wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-showcase-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="service-showcase-content">
                            <h3 class="service-showcase-title">
                                <a href="/digital-marketing">Digital Marketing</a>
                            </h3>
                            <p class="service-showcase-text">Boost your online presence and drive growth with data-driven digital marketing strategies.</p>
                            <a href="/digital-marketing" class="service-showcase-link">
                                <span>Learn More</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- About --}}
    <div class="about-area-1 space bg-theme">
        <div class="about-img-1-1 shape-mockup img-custom-anim-left wow" data-left="0" data-top="-100px"
            data-bottom="140px" data-wow-duration="1.5s" data-wow-delay="0.1s">
            <img src="{{ asset('assets/img/normal/about_1-1.jpg') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="overflow-hidden">
                        <div class="about-content-wrap ">
                            <div class="title-area mb-0">
                                <h2 class="sec-title">Unlock Revenue Growth for Your Business</h2>
                                <p class="sec-text mt-35">If you ask our clients what it’s like working with 36, they’ll
                                    talk about how much we care about their success. For us, real relationships fuel real
                                    success. We love building brands</p>
                                <p class="sec-text mt-30">We are a creative agency working with brands building insightful
                                    strategy, creating unique designs and crafting value</p>
                                <div class="btn-wrap mt-50">
                                    <a href="about.html" class="link-btn">
                                        <span class="link-effect">
                                            <span class="effect-1">ABOUT US</span>
                                            <span class="effect-1">ABOUT US</span>
                                        </span>
                                        <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Faq --}}
    <div class="faq-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area text-center ">
                        <h2 class="sec-title">What We Can Do for Our Clients</h2>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> <span
                                        class="faq-number">01</span> Branding Design</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more.
                                        A good website tells a story that will make users fully immerse themselves operating
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2"><span
                                        class="faq-number">02</span> Illustration Modelling</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more.
                                        A good website tells a story that will make users fully immerse themselves operating
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> <span
                                        class="faq-number">03</span> Website Development</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more.
                                        A good website tells a story that will make users fully immerse themselves operating
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4"> <span
                                        class="faq-number">04</span> Digital Marketing</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We design high quality websites that make users come back for more.
                                        A good website tells a story that will make users fully immerse themselves operating
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Portfolio --}}
    <div class="portfolio-area-1 space-bottom overflow-hidden" data-bg-src="{{ asset('assets/img/bg/portfolio-1-bg.png') }}">
        <div class="container">
            <div class="row justify-content-between masonary-active">
                <div class="col-lg-6 filter-item">
                    <div class="portfolio-wrap mt-lg-140">
                        <div class="portfolio-thumb wow img-custom-anim-top" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="{{ asset('assets/img/portfolio/portfolio1_1.jpg') }}" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Money Laundering Compliance
                                    Scanner</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 filter-item">
                    <div class="portfolio-wrap mt-140 mt-lg-0">
                        <div class="portfolio-thumb wow img-custom-anim-left" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="{{ asset('assets/img/portfolio/portfolio1_2.jpg') }}" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Decentralized Lending Platform for
                                    Students</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 filter-item">
                    <div class="portfolio-wrap mt-140">
                        <div class="portfolio-thumb wow img-custom-anim-top" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="{{ asset('assets/img/portfolio/portfolio1_3.jpg') }}" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Anti Money Laundering Compliance
                                    Scanner</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 filter-item">
                    <div class="portfolio-wrap mt-140">
                        <div class="portfolio-thumb wow img-custom-anim-left" data-wow-duration="1.5s"
                            data-wow-delay="0.2s">
                            <a href="project-details.html">
                                <img src="{{ asset('assets/img/portfolio/portfolio1_4.jpg') }}" alt="portfolio">
                            </a>
                        </div>
                        <div class="portfolio-details">
                            <ul class="portfolio-meta">
                                <li><a href="blog.html">Branding</a></li>
                                <li><a href="blog.html">Development</a></li>
                                <li><a href="blog.html">Marketing</a></li>
                            </ul>
                            <h3 class="portfolio-title"><a href="project-details.html">Shopify Redesign for a Nova Scotia
                                    Winery</a></h3>
                            <a href="project-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">VIEW PROJECT</span>
                                    <span class="effect-1">VIEW PROJECT</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-auto filter-item">
                    <div class="btn-wrap mt-140">
                        <a class="circle-btn btn gsap-magnetic mx-lg-5" href="project.html">
                            <span class="link-effect">
                                <span class="effect-1">VIEW ALL</span>
                                <span class="effect-1">VIEW ALL</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Team Area --}}
    <div class="team-area-1 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Our Team Behind The Studio</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-1-1.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-1-2.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-1-3.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('assets/img/team/team-1-4.png') }}" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonial --}}
    {{-- <div class="testimonial-area-1 space bg-theme">
        <div class="testimonial-img-1-1 shape-mockup wow img-custom-anim-right" data-wow-duration="1.5s"
            data-wow-delay="0.2s" data-right="0" data-top="-100px" data-bottom="140px">
            <img src="{{ asset('assets/img/testimonial/testi_thumb1_1.jpg') }}" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area ">
                        <h2 class="sec-title">Testimonials</h2>
                    </div>
                    <div class="quote-icon ">
                        <img src="{{ asset('assets/img/icon/quote.svg') }}" alt="icon">
                    </div>
                    <div class="row global-carousel testi-slider1" data-slide-show="1" data-dots="true"
                        data-xl-dots="true" data-ml-dots="true">
                        <div class="col-lg-4">
                            <div class="testi-box ">
                                <p class="testi-box_text">“It’s a pleasure working with Bunker. They understood our new
                                    brand positioning guidelines and translated them beautifully and consistently into our
                                    on-going marketing comms. The team is responsive, quick and always willing help winning
                                    partnership”</p>
                                <div class="testi-box_profile">
                                    <h4 class="testi-box_name">Daniyel Karlos</h4>
                                    <span class="testi-box_desig">Senior Director of Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testi-box ">
                                <p class="testi-box_text">“It’s a pleasure working with Bunker. They understood our new
                                    brand positioning guidelines and translated them beautifully and consistently into our
                                    on-going marketing comms. The team is responsive, quick and always willing help winning
                                    partnership”</p>
                                <div class="testi-box_profile">
                                    <h4 class="testi-box_name">Daniyel Karlos</h4>
                                    <span class="testi-box_desig">Senior Director of Marketing</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testi-box ">
                                <p class="testi-box_text">“It’s a pleasure working with Bunker. They understood our new
                                    brand positioning guidelines and translated them beautifully and consistently into our
                                    on-going marketing comms. The team is responsive, quick and always willing help winning
                                    partnership”</p>
                                <div class="testi-box_profile">
                                    <h4 class="testi-box_name">Daniyel Karlos</h4>
                                    <span class="testi-box_desig">Senior Director of Marketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

    {{-- Blog Area --}}
    {{-- <section class="blog-area space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-xl-6 col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Read Our Articles and News</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/blog_1_1.png') }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-meta-item blog-meta">
                                <a href="blog.html">March 26, 2024</a>
                                <a href="blog.html">Branding</a>
                            </div>
                            <h4 class="blog-title"><a href="blog-details.html">Everything You Should Know About Return</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">READ MORE</span>
                                    <span class="effect-1">READ MORE</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/blog_1_2.png') }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-meta-item blog-meta">
                                <a href="blog.html">March 26, 2024</a>
                                <a href="blog.html">Branding</a>
                            </div>
                            <h4 class="blog-title"><a href="blog-details.html">6 Big Commerce Design Tips For Big
                                    Results</a></h4>
                            <a href="blog-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">READ MORE</span>
                                    <span class="effect-1">READ MORE</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/blog_1_3.png') }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="post-meta-item blog-meta">
                                <a href="blog.html">March 26, 2024</a>
                                <a href="blog.html">Branding</a>
                            </div>
                            <h4 class="blog-title"><a href="blog-details.html">Four Steps to Conduct a Successful
                                    Usability</a></h4>
                            <a href="blog-details.html" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">READ MORE</span>
                                    <span class="effect-1">READ MORE</span>
                                </span>
                                <img src="{{ asset('assets/img/icon/arrow-left-top.svg') }}" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    
    {{-- Marquee Area --}}
    <div class="container-fluid p-0 overflow-hidden">
        <div class="slider__marquee clearfix marquee-wrap">
            <div class="marquee_mode marquee__group">
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Expert Web Development Solutions</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Innovative Mobile App Development</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Creative UI/UX Design</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Strategic Digital Marketing</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Scalable Tech Solutions</a></h6>
                <h6 class="item m-item"><a href="#"><i class="fas fa-star-of-life"></i> Results-Driven Development</a></h6>
            </div>
        </div>
    </div>
@endsection
