@extends('frontend')

@section('content')
    {{-- Hero Section --}}
    <div class="hero-area-modern space overflow-hidden" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); position: relative; min-height: 100vh; display: flex; align-items: center;">
      
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Main Content -->
                <div class="col-lg-7">
                    <div class="hero-content">
                        <!-- Badge -->
                        <div class="hero-badge wow fadeInUp" data-wow-delay="0.1s">
                            <span class="hero-badge-dot"></span>
                            <span class="hero-badge-text">Available for new projects</span>
                        </div>
                        
                        <!-- Main Headline -->
                        <h1 class="hero-main-title wow fadeInUp" data-wow-delay="0.2s">
                            <span class="hero-title-line">Building</span>
                            <span class="hero-title-highlight">Next-Generation</span>
                            <span class="hero-title-line">Digital Solutions</span>
                        </h1>
                        
                        <!-- Description -->
                        <p class="hero-description wow fadeInUp" data-wow-delay="0.3s">
                            Transform your business with innovative web, mobile, and digital solutions that drive growth and deliver exceptional user experiences.
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="hero-buttons wow fadeInUp" data-wow-delay="0.4s">
                            <a href="/contact" class="btn btn-primary hero-btn-primary">
                                <span class="link-effect">
                                    <span class="effect-1">START YOUR PROJECT</span>
                                    <span class="effect-1">START YOUR PROJECT</span>
                                </span>
                            </a>
                            <a href="/about" class="btn btn-outline hero-btn-outline">
                                <span class="link-effect">
                                    <span class="effect-1">LEARN MORE</span>
                                    <span class="effect-1">LEARN MORE</span>
                                </span>
                            </a>
                        </div>
                        
                        <!-- Stats -->
                        <div class="hero-stats wow fadeInUp" data-wow-delay="0.5s">
                            <div class="stat-item">
                                <div class="stat-number">6+</div>
                                <div class="stat-label">Years Experience</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">100+</div>
                                <div class="stat-label">Projects Completed</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">20+</div>
                                <div class="stat-label">Happy Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Visual Element -->
                <div class="col-lg-5">
                    <div class="hero-visual wow fadeInRight" data-wow-delay="0.3s">
                        <!-- Main Image/Illustration -->
                        <div class="hero-image-wrapper">
                            <div class="hero-image-container"> 
                                <img src="{{ asset('assets/img/hero/hero-vector.svg') }}" alt="" class="hero-main-image">

                                <!-- Floating Cards -->
                                <div class="hero-floating-card hero-card-1">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                
                                <div class="hero-floating-card hero-card-2">
                                    <i class="fas fa-palette"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator wow fadeInUp" data-wow-delay="0.6s">
            <div class="scroll-text">Scroll to explore</div>
            <div class="scroll-line"></div>
        </div>
    </div>

    {{-- Contact Area --}}
    <div class="contact-area-1 mt-0 space bg-theme" style="background-image: url('{{ asset('assets/img/bg/about-banner.jpg') }}'); background-size: cover; background-position: center; position: relative;">
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

    {{-- Why Choose Us Section --}}
    <div class="why-choose-area space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="title-area text-center mb-60">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">Why Choose Us</span>
                        <h2 class="sec-title wow fadeInUp" data-wow-delay="0.2s">What Makes Us Different</h2>
                        <p class="sec-text wow fadeInUp" data-wow-delay="0.3s">We combine creativity, technology, and strategy to deliver exceptional results that exceed expectations and drive sustainable growth</p>
                    </div>
                </div>
            </div>
            
            <!-- Feature Items -->
            <div class="why-choose-items">
                <!-- Item 1 -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-number">
                                <span class="number">01</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="feature-content">
                                <h3 class="feature-title">Innovative Solutions</h3>
                                <p class="feature-text">We leverage cutting-edge technologies and creative approaches to solve complex business challenges with innovative digital solutions that drive growth.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-number">
                                <span class="number">02</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="feature-content">
                                <h3 class="feature-title">Expert Team</h3>
                                <p class="feature-text">Our skilled professionals bring years of experience and expertise to deliver high-quality solutions that meet your specific requirements and exceed expectations.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-number">
                                <span class="number">03</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="feature-content">
                                <h3 class="feature-title">Timely Delivery</h3>
                                <p class="feature-text">We understand the importance of deadlines and ensure timely project completion without compromising on quality, functionality, or attention to detail.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-number">
                                <span class="number">04</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="feature-content">
                                <h3 class="feature-title">Quality Assurance</h3>
                                <p class="feature-text">Rigorous testing and quality control processes ensure that every project meets the highest standards of performance, reliability, and user satisfaction.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-number">
                                <span class="number">05</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="feature-content">
                                <h3 class="feature-title">24/7 Support</h3>
                                <p class="feature-text">Our dedicated support team is available round the clock to provide assistance and ensure smooth operation of your digital solutions and business processes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-number">
                                <span class="number">06</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="feature-content">
                                <h3 class="feature-title">Proven Results</h3>
                                <p class="feature-text">Track record of successful projects and satisfied clients demonstrates our ability to deliver measurable results, business growth, and long-term value.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


     {{-- About Area --}}
    <div class="team-details-page-area space bg-theme">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="team-inner-thumb mb-lg-0 mb-40">
                        <img class="w-100" src="{{ asset('assets/img/birinder.webp') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-details-about-info mb-0">
                        <h2 class="sec-title mb-3">Building Digital Success Stories</h2>
                        <h4 class="team-desig">Your Vision, Our Innovation</h4>
                        <p class="sec-text mt-30">We believe in the power of collaboration and innovation. Our mission is to partner with businesses to create digital solutions that not only meet today's needs but prepare for tomorrow's challenges.</p>
                        <p class="sec-text mt-20">From startups to established enterprises, we've helped organizations across industries achieve their digital goals through strategic thinking, creative design, and robust development.</p>
                        <div class="about-contact-wrap mt-35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about-info-item mb-3">
                                        <h6 class="about-info-label">Experience</h6>
                                        <span class="about-info-value">6+ Years</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-info-item mb-3">
                                        <h6 class="about-info-label">Projects Completed</h6>
                                        <span class="about-info-value">100+</span>
                                    </div>
                                </div>
                            </div>
                            <a href="/about" class="btn mt-4">
                                <span class="link-effect">
                                    <span class="effect-1">LEARN MORE ABOUT US</span>
                                    <span class="effect-1">LEARN MORE ABOUT US</span>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>  

    
    {{-- Marquee Area --}}
    @include('frontend.common.marquee')
@endsection
