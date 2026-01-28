@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- ================= HERO / SERVICES ================= -->
<section class="hero-section d-flex align-items-center">
  <div class="hero-overlay"></div>

  <div class="container text-center position-relative">
    <h1 class="hero-title">Services</h1>
    <p class="hero-text mt-3">
      We help brands scale through eCommerce growth, performance marketing,
      creative storytelling, and powerful digital solutions.
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
          We Don’t Just Offer Services —
          <span class="text-warning">We Deliver Results.</span>
        </h2>

        <p>
          At <span class="text-warning fw-semibold">Optiflow Technologies Pvt. Ltd.</span>,
          we provide end-to-end digital solutions designed to drive growth,
          engagement, and profitability.
        </p>

        <p>
          From Amazon and Flipkart marketplace management to high-ROI performance
          marketing and creative production, our strategies are data-driven
          and conversion-focused.
        </p>

        <p>
          With <span class="text-warning fw-bold">5,000+</span> clients served and
          <span class="text-warning fw-bold">₹25M+</span> ad spend managed,
          we know how to scale brands in competitive markets.
        </p>
      </div>

      <!-- RIGHT CARDS -->
      <div class="col-lg-5 col-md-12">
        <div class="d-flex flex-column gap-4">

          <div class="award-card">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fw-bold mb-0">AMAZON</h4>
              <img src="{{ asset('assets/images/amazon-logo.webp') }}" height="28">
            </div>
            <p class="text-muted mt-2 mb-0">Titan Club Award</p>
          </div>

          <div class="award-card">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fw-bold mb-0">AMAZON</h4>
              <img src="{{ asset('assets/images/amazon-logo.webp') }}" height="28">
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

<!-- ================= SERVICES GRID ================= -->
<section class="services-showcase">
    <h2 class="section-title">
        What We <span>Do Best</span>
    </h2>

    <div class="services-grid">
        <div class="service-card">
            <div class="service-image">
                <img src="{{ asset('assets/images/marketing-creative-collage-with-phone.webp') }}" alt="Ecommerce Marketplace">
            </div>
            <h3>Ecommerce Marketplace</h3>
        </div>

        <div class="service-card">
            <div class="service-image">
                <img src="{{ asset('assets/images/Social Media Management Service Post.jpg (1).jpeg') }}" alt="Performance Marketing">
            </div>
            <h3>Performance Marketing</h3>
        </div>

        <div class="service-card">
            <div class="service-image">
                <img src="{{ asset('assets/images/female-photographer-posing-with-camera-gray-wall.webp') }}" alt="Photoshoot & Creative">
            </div>
            <h3>Photoshoot & Creative</h3>
        </div>

        <div class="service-card">
            <div class="service-image">
                <img src="{{ asset('assets/images/Website Development Services Post.jpg (1).jpeg') }}" alt="Website Development">
            </div>
            <h3>Website Development</h3>
        </div>
    </div>
</section>


<!-- ================= CTA ================= -->
<section class="get-touch text-center">
  <div class="container">
    <h1>
      <span>GET IN</span>
      <span>TOUCH</span>
    </h1>

    <p>
      Let’s build a growth strategy that delivers real impact and measurable success.
    </p>

    <a href="/contact" class="btn btn-warning px-4 py-2">
      Work with us <span class="ms-2 fs-4">›</span>
    </a>
  </div>
</section>

@endsection
