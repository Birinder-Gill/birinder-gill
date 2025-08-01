@extends('frontend')

@section('content')
    {{-- Breadcrumb --}}
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg1-6.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact</h1>
            </div>
        </div>
    </div>

    {{-- Feature Area --}}
    <div class="feature-area-1 space">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="assets/img/icon/location-pin-alt.svg" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a href="project.html">Address</a>
                            </h4>
                            <p class="feature-card-text">27 Division St, New York, NY 10002, USA</p> 

                            <a href="https://maps.google.com" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Get direction</span>
                                    <span class="effect-1">Get direction</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="assets/img/icon/speech-bubble.svg" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a href="project.html">Email Address</a>
                            </h4>
                            <p class="feature-card-text">birindergill53@gmail.com</p>
                            <a href="mailto:birindergill53@gmail.com" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Send message</span>
                                    <span class="effect-1">Send message</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <img src="assets/img/icon/phone.svg" alt="icon">
                        </div>
                        <div class="feature-card-details">
                            <h4 class="feature-card-title">
                                <a href="project.html">Phone Number</a>
                            </h4> 
                            <p class="feature-card-text">+91 70091 54010 </p>

                            <a href="tel:+91 70091 54010" class="link-btn">
                                <span class="link-effect">
                                    <span class="effect-1">Call anytime</span>
                                    <span class="effect-1">Call anytime</span>
                                </span>
                                <img src="assets/img/icon/arrow-left-top.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Area --}}
    <div class="contact-area-1 space bg-theme">
        <div class="contact-map shape-mockup wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.2s"
            data-left="0" data-top="-100px" data-bottom="140px">
            <iframe
                src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&t=m&z=10&output=embed&iwloc=near"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <div class="title-area mb-30">
                            <h2 class="sec-title">Have Any Project on Your Mind?</h2>
                            <p>Great! We're excited to hear from you and let's start something</p>
                        </div>
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="name"
                                            id="name" placeholder="Full name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="email"
                                            id="email" placeholder="Email address*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-border" name="website"
                                            id="website" placeholder="Website link">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="How Can We Help You*" id="contactForm" class="form-control style-border"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="btn mt-20">
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
