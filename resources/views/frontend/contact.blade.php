@extends('frontend')

@section('content')
    {{-- Breadcrumb --}}
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/contact-us-banner.jpg') }}">
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
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-wrap text-center">
                        <div class="title-area mb-30">
                            <h2 class="sec-title">Have Any Project on Your Mind?</h2>
                            <p>Great! We're excited to hear from you and let's start something</p>
                        </div>
                        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                            @csrf
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
                                        <textarea name="message" placeholder="How Can We Help You*" id="message" class="form-control style-border"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="btn mt-20" id="contactSubmitBtn">
                                    <span class="link-effect">
                                        <span class="effect-1">SEND MESSAGE</span>
                                        <span class="effect-1">SEND MESSAGE</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!-- Popup Modal -->
                        <div id="contactPopup" style="display:none;position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.5);z-index:9999;align-items:center;justify-content:center;">
                            <div style="background:#fff;padding:2rem 2.5rem;border-radius:8px;max-width:90vw;min-width:300px;text-align:center;">
                                <span id="contactPopupMsg"></span><br>
                                <button onclick="document.getElementById('contactPopup').style.display='none'" style="margin-top:1rem;" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Marquee Area --}}
    @include('frontend.common.marquee')


@push('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    console.log('script loaded');
    e.preventDefault();

    const form = e.target;
    const btn = document.getElementById('contactSubmitBtn');
    btn.disabled = true;
    btn.innerHTML = 'Sending...';
    const formData = new FormData(form);
    let data = {};
    formData.forEach((v, k) => data[k] = v);
    try {
        const response = await fetch(form.action, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': form.querySelector('[name=_token]').value,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });
        const result = await response.json();
        document.getElementById('contactPopupMsg').innerText = result.message || (result.status === 'success' ? 'Message sent!' : 'Failed to send message.');
        document.getElementById('contactPopup').style.display = 'flex';
        if(result.status === 'success') form.reset();
    } catch (err) {
        document.getElementById('contactPopupMsg').innerText = 'Failed to send message. Please try again.';
        document.getElementById('contactPopup').style.display = 'flex';
    }
    btn.disabled = false;
    btn.innerHTML = '<span class="link-effect"><span class="effect-1">SEND MESSAGE</span><span class="effect-1">SEND MESSAGE</span></span>';
});
</script>
@endpush

@endsection
