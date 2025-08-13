<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Birinder Gill{{ isset($title) ? ' - ' . $title : '' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Unbounded:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/imageRevealHover.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

@if (app()->environment('production') && env('GA4_PROPERTY_ID'))
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GA4_PROPERTY_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GA4_PROPERTY_ID') }}');
    </script>
@endif
</head>

<body class="@stack('body-class')">
    <div class="preloader">
        <div class="preloader-inner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    @include('frontend.common.header')

    @yield('content')

    @include('frontend.common.footer')

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>


    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>


    <script src="{{ asset('assets/frontend/js/twinmax.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imageRevealHover.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
