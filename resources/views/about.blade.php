@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- ================= HERO / ABOUT ================= -->
<section class="hero-section d-flex align-items-center">
  <div class="hero-overlay"></div>

  <div class="container text-center position-relative">
    <h1 class="hero-title"></h1>
    <p class="hero-text mt-3 left-right-bounce">
     
    </p>
  </div>
</section>

<!-- ================= INTRO ================= -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 align-items-start">

      <!-- LEFT CONTENT -->
      <div class="col-lg-7 col-md-12">
        <h2 class="fw-bold mb-4">
          In A Fast-Moving Digital World, We Don’t Just Capture Attention —
          <span class="text-warning">We Turn It Into Action.</span>
        </h2>

        <p>
          In today’s fast-paced digital world, success isn’t just about visibility—it’s about making a real impact.
          At <span class="text-warning fw-semibold">Optiflow Technologies Pvt. Ltd.</span>, we specialize in eCommerce growth
          and performance marketing, helping brands turn attention into measurable success.
        </p>

        <p>
          With expertise across platforms like Amazon, Flipkart, Shopify, and Meta Business Suite,
          we craft data-driven strategies that drive engagement, conversions, and scalable revenue growth.
        </p>

        <p>
          Over the years, we’ve partnered with
          <span class="text-warning fw-bold">5,000+</span> clients,
          managed <span class="text-warning fw-bold">₹25M+</span> in ad spend,
          and delivered outstanding results across industries.
        </p>
      </div>

      <!-- RIGHT CARDS -->
      <div class="col-lg-5 col-md-12">
        <div class="d-flex flex-column gap-4">

          <div class="award-card">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fw-bold mb-0">AMAZON</h4>
              <img src="{{ asset('assets/images/amazon-logo.webp') }}" height="28" alt="Amazon">
            </div>
            <p class="text-muted mt-2 mb-0">Titan Club Award</p>
          </div>

          <div class="award-card">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fw-bold mb-0">AMAZON</h4>
              <img src="{{ asset('assets/images/amazon-logo.webp') }}" height="28" alt="Amazon">
            </div>
            <p class="text-muted mt-2 mb-0">Trained Ecommerce Specialist</p>
          </div>

          <div class="award-card">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fw-bold mb-0">AMAZON</h4>
              <span class="text-warning fw-semibold">Global Selling</span>
            </div>
            <p class="text-muted mt-2 mb-0">Global SPN Certified</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= IMAGE GRID ================= -->
<section class="py-5">
  <div class="container">

    <div class="mb-4">
      <a href="/services" class="btn btn-outline-dark px-4 py-2">
        READ MORE <span class="ms-2">›</span>
      </a>
    </div>

    <div class="row g-4">
      @foreach ([
        'company5.webp',
        'img1.jpg',
        'company2.webp',
        'company3.webp'
      ] as $img)
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="event-card">
            <img src="{{ asset('assets/images/'.$img) }}" alt="Company Image">
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>

<!-- ================= OUR STORY ================= -->
<section class="our-story">
  <div class="container">
    <h1>Our Story</h1>

    <div class="story-content">
      <div class="left">
        <h2>THE HISTORY... SO FAR</h2>
      </div>

      <div class="right">
        <p>
          Every success has a journey, and ours began with a vision—to empower brands in the digital world.
          From Amazon training to building Optiflow Technologies, our story is one of growth,
          innovation, and relentless execution.
        </p>
      </div>

      <img src="{{ asset('assets/images/unnamed.jpg') }}" class="me-2" alt="Our Story">
    </div>
  </div>
</section>

<!-- ================= WHY NEED US ================= -->
<section class="need">
  <div class="container text-center">
    <h1 class="me-3">Why you<br>need us?</h1>

    <p class="me-4">
      In the fast-paced digital world, getting noticed is just the first step—what truly matters is achieving
      <span class="highlight">profitable growth</span>.
      With <span class="highlight">₹10M+ ad spend</span> and
      <span class="highlight">₹25M+ revenue generated</span>, we help
      <span class="highlight">5,000+ brands</span> scale profitably.
    </p>
  </div>
</section>

<div class="text-center my-4">
  <a href="/contact" class="btn btn-warning">Work with us</a>
</div>

<section class="know-us-section py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-2">Know us better!</h2>
        <p class="text mb-5">Explore our expertise and passion to discover what sets us apart in the industry</p>

        <div class="row g-4 justify-content-center">
            <div class="col-md-5 d-flex flex-column gap-4">
                <div class="feature-pill pill-pink">
                    <div class="pill-content">
                        <img src="{{ asset('assets/images/icons/creative.png') }}" alt="icon">
                        <span>Innovation & Experiment</span>
                    </div>
                </div>
                <div class="feature-pill pill-yellow">
                    <div class="pill-content">
                        <img src="{{ asset('assets/images/icons/flexible.png') }}" alt="icon">
                        <span>Flexible Environment</span>
                    </div>
                </div>
                <div class="feature-pill pill-green">
                    <div class="pill-content">
                        <img src="{{ asset('assets/images/icons/gaurantee.png') }}" alt="icon">
                        <span>CMMi Level-3 Appraised</span>
                    </div>
                </div>
                <div class="feature-pill pill-red">
                    <div class="pill-content">
                        <img src="{{ asset('assets/images/icons/social.png') }}" alt="icon">
                        <span>Supportive Management</span>
                    </div>
                </div>
            </div>

            <div class="col-md-1 d-none d-md-flex flex-column justify-content-around align-items-center">
                <div class="dot-line"></div>
                <div class="dot-line"></div>
                <div class="dot-line"></div>
                <div class="dot-line"></div>
            </div>

            <div class="col-md-5 d-flex flex-column gap-4">
                <div class="feature-pill pill-purple">
                    <div class="pill-content flex-row-reverse">
                        <img src="{{ asset('assets/images/icons/present.png') }}" alt="icon">
                        <span>Industrial Training</span>
                    </div>
                </div>
                <div class="feature-pill pill-blue">
                    <div class="pill-content flex-row-reverse">
                        <img src="{{ asset('assets/images/icons/Gemini_Generated_Image_m6tmw3m6tmw3m6tm-removebg-preview.png') }}" alt="icon">
                        <span>Open Culture</span>
                    </div>
                </div>
                <div class="feature-pill pill-cyan">
                    <div class="pill-content flex-row-reverse">
                        <img src="{{ asset('assets/images/icons/world-removebg-preview.png') }}" alt="icon">
                        <span>Global opportunities</span>
                    </div>
                </div>
                <div class="feature-pill pill-white">
                    <div class="pill-content flex-row-reverse">
                        <img src="{{ asset('assets/images/icons/software.png') }}" alt="icon">
                        <span>Like-Minded Engineers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= GET IN TOUCH ================= -->
<section class="get-touch">
  <div class="container text-center">
    <h1>
      <span>GET IN</span>
      <span>TOUCH</span>
    </h1>

    <p>
      We'll help you build conversations, engagement, and revenue-driven growth.
    </p>

    <a href="/contact" class="btn btn-orange">
      Work with us <span class="ms-2 fs-4">›</span>
    </a>
  </div>
</section>

@endsection
