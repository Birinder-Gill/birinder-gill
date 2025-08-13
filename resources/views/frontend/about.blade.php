@extends('frontend')
<style>
    .why-area-1 .why-img-1-1 img {
        object-position: top;
    }
</style>

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/about-banner.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About</h1>
            </div>
        </div>
    </div>




    {{-- About Area --}}
    <div class="team-details-page-area space">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="team-inner-thumb mb-lg-0 mb-40">
                        <img class="w-100" src="{{ asset('assets/img/birinder.webp') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-details-about-info mb-0">
                        <h2 class="sec-title mb-3">Transforming Ideas Into Digital Excellence</h2>
                        <h4 class="team-desig">Crafting Tomorrow's Digital Solutions Today</h4>
                        <p class="sec-text mt-30">With 6+ years of experience, I transform ideas into powerful digital
                            solutions that drive real
                            business growth and deliver measurable results.</p>
                        <div class="about-contact-wrap mt-35">
                            <h6 class="about-contact-title"><a
                                    href="mailto:birindergill53@gmail.com">birindergill53@gmail.com</a></h6>
                            <h6 class="about-contact-title"><a href="tel:+91 70091 54010">+91 70091 54010</a></h6>
                            <a href="/contact" class="btn mt-4">
                                <span class="link-effect">
                                    <span class="effect-1">LET'S TALK WITH US</span>
                                    <span class="effect-1">LET'S TALK WITH US</span>
                                </span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
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

    {{-- <div class="team-area-1 space overflow-hidden">
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
                            <img src="assets/img/team/team-1-1.png" alt="Team Image">
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
                            <img src="assets/img/team/team-1-2.png" alt="Team Image">
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
                            <img src="assets/img/team/team-1-3.png" alt="Team Image">
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
                            <img src="assets/img/team/team-1-4.png" alt="Team Image">
                        </div>
                        <div class="team-card_content">
                            <h3 class="team-card_title"><a href="team-details.html">Daniyel Karlos</a></h3>
                            <span class="team-card_desig">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
