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
@endsection
