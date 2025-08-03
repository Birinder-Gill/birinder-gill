@extends('frontend')

@section('content')
    {{-- Portfolio Hero Section --}}
    <div class="hero-wrapper hero-6" id="hero">
        <div class="container">
            <div class="hero-style6">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h1 class="hero-title text-lg-end wow img-custom-anim-right" data-wow-duration="1.5s"
                            data-wow-delay="0.1s">My Recent</h1>
                        <h1 class="hero-title wow img-custom-anim-left" data-wow-duration="1.7s" data-wow-delay="0.1s">
                            Projects</h1>
                        <h1 class="hero-title text-lg-end wow img-custom-anim-right" data-wow-duration="1.5s"
                            data-wow-delay="0.1s">Portfolio</h1>
                    </div>
                    <div class="col-lg-6 offset-lg-5">
                        <p class="hero-text wow img-custom-anim-right" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            Explore my collection of innovative projects that showcase modern design, cutting-edge technology,
                            and user-focused solutions.
                        </p>
                    </div>
                </div>
                <a class="circle-btn style2 btn bg-theme text-title gsap-magnetic wow img-custom-anim-left" href="/contact">
                    <span class="link-effect">
                        <span class="effect-1">LET'S WORK <br> TOGETHER</span>
                        <span class="effect-1">LET'S WORK <br> TOGETHER</span>
                    </span>
                </a>
            </div>
        </div> 
    </div>

    {{-- Portfolio Grid Section --}}
    <div class="portfolio-area space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area text-center mb-50">
                        <h2 class="sec-title wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            Featured Projects
                        </h2>
                        <p class="sec-text wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            Each project represents a unique challenge solved with creativity, technical expertise, and 
                            attention to detail.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-30">
                @foreach($projects as $project)
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="portfolio-card wow">
                        <div class="portfolio-card-banner">
                            <img src="{{ $project->banner_image_url ?: asset('assets/img/placeholder.jpg') }}" alt="{{ $project->title }}">
                            <div class="portfolio-overlay">
                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" class="portfolio-link" target="_blank">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                @else
                                    <a href="#" class="portfolio-link">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="portfolio-card-content">
                            <div class="portfolio-header">
                                @if($project->logo_image_url)
                                <div class="portfolio-logo">
                                    <img src="{{ $project->logo_image_url }}" alt="{{ $project->title }} Logo">
                                </div>
                                @endif
                                <div class="portfolio-header-content">
                                    <h3 class="portfolio-title">{{ $project->title }}</h3>
                                    <span class="portfolio-category">{{ $project->category }}</span>
                                </div>
                            </div>
                            <p class="portfolio-description">
                                {{ $project->description }}
                            </p>
                            @if($project->technologies_list->count() > 0)
                            <div class="portfolio-tech">
                                <h5 class="tech-title">Technologies Used:</h5>
                                <div class="tech-stack">
                                    @foreach($project->technologies_list as $technology)
                                        @if($technology->image_url)
                                            <span class="tech-item" data-tooltip="{{ $technology->title }}">
                                                <img src="{{ $technology->image_url }}" alt="{{ $technology->title }}" class="tech-icon">
                                            </span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> 

@endsection