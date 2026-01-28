@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero">
    @if($banner && $banner->video_path)
        <video
            class="hero-video"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
        >
            <source src="{{ asset('storage/'.$banner->video_path) }}" type="video/mp4">
        </video>
    @endif

    <div class="hero-overlay"></div>

    <!-- <div class="hero-content">
    @if($banner)
        <h1>{{ $banner->title }}</h1>

        @if(!empty($banner->subtitle))
            <p>{{ $banner->subtitle }}</p>
        @endif
    @else
        {{-- Fallback content --}}
        <h1></h1>
        <p></p>
    @endif
</div> -->

</section>
{{-- TRUSTED PARTNERS --}}
<section class="partners">
    <div class="partners-container">
        <h2>Our Trusted Partners</h2>

        <div class="partners-marquee">
            <div class="partners-track">

                {{-- FIRST LOOP --}}
                @foreach($partners as $partner)
                    <div class="partner-card">
                        <img
                            src="{{ asset('storage/'.$partner->logo_path) }}"
                            alt="{{ $partner->name }}"
                        >
                    </div>
                @endforeach

                {{-- SECOND LOOP (REPEAT FOR INFINITE SCROLL) --}}
                @foreach($partners as $partner)
                    <div class="partner-card">
                        <img
                            src="{{ asset('storage/'.$partner->logo_path) }}"
                            alt="{{ $partner->name }}"
                        >
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>


<!-- ABOUT US SECTION -->
<section class="about-home">
  <div class="about-home-container">

    <!-- LEFT IMAGE -->
    <div class="about-image-single">
      <img src="{{ asset('assets/images/group.png') }}" alt="Our Team">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="about-home-text">
      <span class="about-tag">About Us</span>
      <h2>Who we are?</h2>

      <p>
        We are a performance-driven eCommerce and digital marketing company delivering
        cutting-edge solutions for startups, SMEs, and enterprises worldwide.
      </p>

      <p>
        Our design-led and technology-first approach helps brands scale efficiently,
        enhance customer experience, and achieve measurable growth.
      </p>

      <a href="/about" class="about-link">
        View More <span>+</span>
      </a>
    </div>

  </div>
</section>
<!-- EXPERIENCE SECTION -->
<section class="experience-home" id="experience-counter">
  <div class="experience-container">

    <!-- LEFT CONTENT -->
    <div class="experience-text">
      <span class="experience-tag">Our Experience</span>
      <h2>Experts with experience</h2>

      <p>
        With years of experience, we’ve delivered scalable digital solutions and
        enterprise-grade platforms across industries.
      </p>
    </div>

    <!-- RIGHT STATS -->
    <div class="experience-stats">
      <div class="stat-box">
        <h3 class="counter" data-target="75">0</h3>
        <p>Happy Clients</p>
      </div>

      <div class="stat-box">
        <h3 class="counter" data-target="100">0</h3>
        <p>Team Members</p>
      </div>

      <div class="stat-box">
        <h3 class="counter" data-target="10">0</h3>
        <p>Years of Experience</p>
      </div>

      <div class="stat-box">
        <h3 class="counter" data-target="200">0</h3>
        <p>Projects Delivered</p>
      </div>
    </div>

  </div>
</section>



{{-- OUR CHANNELS --}}
@if($channels->count())
<section class="channels">
    <h2 class="channels-title">Our Channels</h2>

    <div class="channels-marquee">
        <div class="channels-track">

            {{-- FIRST LOOP --}}
            @foreach($channels as $channel)
                <div class="channel-logo">
                    <img
                        src="{{ asset('storage/'.$channel->logo_path) }}"
                        alt="{{ $channel->name }}"
                    >
                </div>
            @endforeach

            {{-- SECOND LOOP (REPEAT FOR INFINITE SCROLL) --}}
            @foreach($channels as $channel)
                <div class="channel-logo">
                    <img
                        src="{{ asset('storage/'.$channel->logo_path) }}"
                        alt="{{ $channel->name }}"
                    >
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- PERFORMANCE MARKETING SECTION -->
<section class="performance-section dark-theme">

  <!-- Heading -->
  <h2 class="performance-heading">
    CERTIFIED PERFORMANCE<br>
    MARKETING COMPANY
  </h2>

  <!-- Button -->
  <a href="/about" class="performance-btn">
    LEARN MORE <span>›</span>
  </a>

  <!-- Partner Logos -->
  <div class="performance-logos">
    <img src="{{ asset('assets/images/meta.png') }}" alt="Meta Partner">
    <img src="{{ asset('assets/images/google.png') }}" alt="Google Partner">
    <img src="{{ asset('assets/images/shopify.png') }}" alt="Shopify Partner">
  </div>

  <!-- Image with shadow -->
  <div class="performance-image-wrapper">
    <img src="{{ asset('assets/images/dashboard.png') }}" alt="Performance Dashboard">
  </div>

</section>
<!-- OUR WORK SECTION -->
<section class="our-work-v2">

  <h2 class="our-work-title">SEE OUR WORK</h2>

  <!-- CARD 1 -->
  <div class="work-card">
    <div class="work-image">
      <img src="{{ asset('assets/images/Social Media Management Service Post.jpg (1).jpeg') }}" alt="Social Media Work">

      <div class="work-stats">
        <div>
          <span class="counter" data-target="4694">0</span>
          <p>ORDERS</p>
        </div>
        <div>
          <span class="counter" data-target="8100">0</span>
          <p>REVENUE</p>
        </div>
        <div>
          <span class="counter" data-target="8">0</span>
          <p>ROAS</p>
        </div>
      </div>
    </div>

    <div class="work-content">
      <a href="/portfolio" class="work-link work-title-row">
        <span class="arrow">›</span>
        <h3>Social Media Management</h3>
      </a>

      <p>
        Power up your brand with expert social media strategy, content creation,
        and growth-focused campaigns.
      </p>
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="work-card reverse">
    <div class="work-image">
      <img src="{{ asset('assets/images/Screenshot 2025-12-11 103805.png') }}" alt="Performance Marketing">

      <div class="work-stats">
        <div>
          <span class="counter" data-target="100000">0</span>
          <p>REVENUE</p>
        </div>
        <div>
          <span class="counter" data-target="26000">0</span>
          <p>ORDERS</p>
        </div>
        <div>
          <span class="counter" data-target="8">0</span>
          <p>ROAS</p>
        </div>
      </div>
    </div>

    <div class="work-content">
      <a href="/portfolio" class="work-link work-title-row">
        <span class="arrow">›</span>
        <h3>Performance Marketing</h3>
      </a>

      <p>
        Data-driven performance marketing that maximizes ROI through paid ads,
        funnels, and conversion optimization.
      </p>
    </div>
  </div>

  <!-- CARD 3 -->
  <div class="work-card">
    <div class="work-image">
      <img src="{{ asset('assets/images/marketing-creative-collage-with-phone.webp') }}" alt="Ecommerce Marketplace">

      <div class="work-stats">
        <div>
          <span class="counter" data-target="4500">0</span>
          <p>ORDERS</p>
        </div>
        <div>
          <span class="counter" data-target="8000">0</span>
          <p>REVENUE</p>
        </div>
        <div>
          <span class="counter" data-target="8">0</span>
          <p>ROAS</p>
        </div>
      </div>
    </div>

    <div class="work-content">
      <a href="/portfolio" class="work-link work-title-row">
        <span class="arrow">›</span>
        <h3>Ecommerce Marketplace</h3>
      </a>

      <p>
        Amazon, Flipkart, Meesho product listing, catalog optimization,
        ads management, and account growth.
      </p>
    </div>
  </div>

  <!-- CARD 4 -->
  <div class="work-card reverse">
    <div class="work-image">
      <img src="{{ asset('assets/images/female-photographer-posing-with-camera-gray-wall.webp') }}" alt="Photoshoot Work">

      <div class="work-stats">
        <div>
          <span class="counter" data-target="500">0</span>
          <p>BRANDS</p>
        </div>
        <div>
          <span class="counter" data-target="1000">0</span>
          <p>SHOOTS</p>
        </div>
        <div>
          <span class="counter" data-target="200">0</span>
          <p>% ENGAGEMENT</p>
        </div>
      </div>
    </div>

    <div class="work-content">
      <a href="/portfolio" class="work-link work-title-row">
        <span class="arrow">›</span>
        <h3>Photoshoot & Creative</h3>
      </a>

      <p>
        Professional photoshoots, reels, creatives, and UGC content
        that elevate brand presence.
      </p>
    </div>
  </div>

</section>
@endif
<section class="services-section">
    <div class="services-container">
        <div class="services-intro">
            <h2 class="services-main-title">Services</h2>
            <h3 class="services-subtitle">
    OptiFlow Technologies is a forward-thinking technology company delivering smart, scalable, and performance-driven digital solutions to help businesses operate faster and grow smarter.
</h3>
<p class="services-description">
    At OptiFlow Technologies, we specialize in building efficient, future-ready systems that streamline workflows, enhance user experiences, and drive real business outcomes. Our mission is to empower organizations with innovative technology, data-driven strategies, and reliable digital solutions that optimize operations and accelerate sustainable growth.
</p>
        </div>

        <div class="services-list">
            <div class="service-item">
                <div class="service-number">01</div>
                <div class="service-info">
                    <div class="service-header">
                        <h3>Performance Marketing</h3>
                        <a href="/services/performance" class="service-learn-more">LEARN MORE <span>›</span></a>
                    </div>
                    <p>
    Leverage intelligent, data-driven solutions to streamline operations and accelerate growth. Our technology-driven strategies focus on process optimization, system performance, and actionable insights, ensuring maximum efficiency, scalability, and measurable business impact.
</p>
</div>
<div class="fixed-reveal">

                    <img src="{{ asset('assets/images/Screenshot 2025-12-11 103805.png') }}" alt="Performance Marketing">
                </div>
            </div>

            <div class="service-item">
                <div class="service-number">02</div>
                <div class="service-info">
                    <div class="service-header">
                        <h3>Global Marketplaces Management</h3>
                        <a href="/services/global" class="service-learn-more">LEARN MORE <span>›</span></a>
                    </div>
                   <p>
    Expand your capabilities with integrated digital solutions designed to perform across platforms. We help businesses unify systems, optimize workflows, and ensure seamless connectivity, enabling consistent performance and scalable growth in today’s dynamic digital ecosystem.
</p>

                </div>
                <div class="fixed-reveal">
                    <img src="{{ asset('assets/images/Social Media Management Service Post.jpg (1).jpeg') }}" alt="Global Marketplaces">
                </div>
            </div>

            <div class="service-item">
                <div class="service-number">03</div>
                <div class="service-info">
                    <div class="service-header">
                        <h3>Indian Marketplaces Management</h3>
                        <a href="/services/indian" class="service-learn-more">LEARN MORE <span>›</span></a>
                    </div>
                    <p>
    Scale your business with unified, multi-platform digital solutions. We help you optimize system performance, ensure seamless platform integration, and unlock new growth opportunities across today’s interconnected digital landscape.
</p>

                </div>
                <div class="fixed-reveal">
                    <img src="{{ asset('assets/images/indian-marketplaces.png') }}" alt="Indian Marketplaces">
                </div>
            </div>

            <div class="service-item">
                <div class="service-number">04</div>
                <div class="service-info">
                    <div class="service-header">
                        <h3>Photoshoot & User-Generated Content (UGC)</h3>
                        <a href="/services/ugc" class="service-learn-more">LEARN MORE <span>›</span></a>
                    </div>
                    <p>
    Strengthen your brand identity with visually compelling digital assets and authentic content experiences. We create high-quality visuals and user-focused content that align with your brand’s vision, enhance credibility, and drive meaningful engagement across digital platforms.
</p>

                </div>
                <div class="fixed-reveal">
                    <img src="{{ asset('assets/images/female-photographer-posing-with-camera-gray-wall.webp') }}" alt="Photoshoot & UGC">
                </div>
            </div>

            <div class="service-item">
                <div class="service-number">05</div>
                <div class="service-info">
                    <div class="service-header">
                        <h3>Social Media Management</h3>
                        <a href="/services/social" class="service-learn-more">LEARN MORE <span>›</span></a>
                    </div>
                    <p>
    Empower your brand through strategic partnerships and intelligent collaboration management. We help align your message across digital channels, enhance engagement, and build meaningful, data-driven connections with the audiences that matter most.
</p>

                </div>
                <div class="fixed-reveal">
                    <img src="{{ asset('assets/images/Social Media Management Service Post.jpg (1).jpeg') }}" alt="Social Media Management">
                </div>
            </div>

            <div class="service-item">
                <div class="service-number">06</div>
                <div class="service-info">
                    <div class="service-header">
                        <h3>Website Development</h3>
                        <a href="/services/web" class="service-learn-more">LEARN MORE <span>›</span></a>
                    </div>
                    <p>
    Our website development services deliver high-performance, scalable, and visually refined digital experiences tailored to your business goals. We focus on clean architecture, intuitive user journeys, and responsive design to ensure seamless performance across all devices and platforms.
</p>

                </div>
                <div class="fixed-reveal">
                    <img src="{{ asset('assets/images/Website Development Services Post.jpg (1).jpeg') }}" alt="Website Development">
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
