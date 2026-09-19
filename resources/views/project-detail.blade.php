@extends('layouts.site', ['title' => $project[0], 'description' => $project[2]])
@section('content')
@php
  $nameParts = explode(' ', $project[0]);
  $lastWord = count($nameParts) > 1 ? array_pop($nameParts) : '';
  $mainTitle = count($nameParts) > 0 ? implode(' ', $nameParts) : $project[0];
@endphp
@include('partials.project-hero', ['heroProject' => [
  'breadcrumb' => 'Home > Projects > ' . $project[0],
  'title' => $mainTitle,
  'titleAccent' => $lastWord,
  'description' => $project[2] ?? 'Turning ideas into real digital solutions.',
  'badges' => ['Real Business Impact', 'Diverse Industries', 'Modern Technologies', 'Client Satisfaction'],
  'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80',
  'floatingLabel' => $project[1] ?? 'Building',
  'floatingTitle' => "Digital\nSuccess\nTogether",
]])

<section class="project-detail-main py-5">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-lg-7">
        <div class="project-overview">
          <h2>Project Overview</h2>
          <p>{{ $project[2] }}</p>
        </div>

        <div class="project-two-col">
          <div>
            <h3>The Challenge</h3>
            <p>The client needed a professional online presence to showcase their real estate projects, generate quality inquiries, and build credibility in a competitive market.</p>
          </div>
          <div>
            <h3>Our Solution</h3>
            <p>We developed a modern, SEO-friendly website with a clean design, easy navigation, and lead capture systems tailored to the client’s growth goals.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="project-side-panel">
          <h3>Key Features</h3>
          <ul class="project-feature-list">
            @foreach (['Project listings with detailed information','Advanced search and filter options','Inquiry form and lead management','Locations maps integration','Mobile responsive design','SEO optimized for better visibility','Fast loading and secure','Analytics and lead tracking'] as $feature)
              <li>{{ $feature }}</li>
            @endforeach
          </ul>
        </div>
        <div class="project-side-stats">
          <div><strong>3x</strong><span>Increase in Online Inquiries</span></div>
          <div><strong>60%</strong><span>More Organic Traffic</span></div>
          <div><strong>40%</strong><span>Better Lead Conversion</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="project-gallery-section py-5">
  <div class="container">
    <h2 class="project-section-title">Project Screenshots</h2>
    <div class="project-gallery-grid">
      <div class="gallery-card featured">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80" alt="Real estate dashboard preview">
        <div class="gallery-card-label">Homepage</div>
      </div>
      <div class="gallery-card">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" alt="Project listings preview">
        <div class="gallery-card-label">Project Listings</div>
      </div>
      <div class="gallery-card">
        <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1200&q=80" alt="Property detail preview">
        <div class="gallery-card-label">Project Detail Page</div>
      </div>
    </div>
  </div>
</section>

<section class="project-tech-section py-5">
  <div class="container">
    <h2 class="project-section-title">Technologies Used</h2>
    <div class="tech-grid">
      @foreach (['Laravel','Bootstrap','MySQL','JavaScript','Query','Google Maps','SEO','Server & Hosting'] as $tech)
        <div class="tech-card">{{ $tech }}</div>
      @endforeach
    </div>
  </div>
</section>

<section class="project-testimonial py-5">
  <div class="container">
    <div class="testimonial-wrap">
      <div class="testimonial-quote">“</div>
      <p>The team at CodexnIndia delivered exactly what we needed. The website is modern, fast, and has significantly improved our online presence. We have received great support throughout the project.”</p>
      <div class="testimonial-author">
        <div class="testimonial-avatar">A</div>
        <div>
          <strong>Amit Sharma</strong>
          <small>Director, Nexus Property</small>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="project-detail-cta-wrap py-4">
  <div class="container">
    <div class="project-detail-cta">
      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <p class="eyebrow">Let's work together</p>
          <h2>Have a Similar Project in Mind?</h2>
          <p>Get in touch with us today and let’s turn your ideas into reality.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="{{ route('home') }}#contact" class="btn btn-light">Get a Free Consultation <span>→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
