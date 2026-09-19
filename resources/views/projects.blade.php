@extends('layouts.site', ['title' => 'Projects', 'description' => 'Explore our latest projects and see how we build growth-focused products for ambitious businesses.'])
@section('content')
@include('partials.project-hero', [
    'heroProject' => [
        'breadcrumb' => 'Home > Projects',
        'title' => 'Our',
        'titleAccent' => 'Projects',
        'description' => 'Turning ideas into real digital solutions. Explore our latest work and see how we build growth-focused products for ambitious businesses.',
        'badges' => ['Real Business Impact', 'Diverse Industries', 'Modern Technologies', 'Client Satisfaction'],
        'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=80',
        'floatingLabel' => 'Building',
        'floatingTitle' => "Digital\nSuccess\nTogether",
    ],
])

<section class="projects-list">
  <div class="container">
    <div class="projects-filter-row d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
      <div class="projects-filters">
        @foreach (['All Projects','Web Development','E-commerce','Mobile App','Software','Digital Marketing','Branding & Design','UI/UX Design'] as $filter)
          <button type="button" class="project-filter {{ $loop->first ? 'active' : '' }}">{{ $filter }}</button>
        @endforeach
      </div>
      <div class="projects-search-wrap">
        <input type="text" placeholder="Search projects..." aria-label="Search projects" class="projects-search" />
        <i class="bi bi-search"></i>
      </div>
    </div>

    <div class="row g-4">
      @foreach ([
        ['luma-studio','https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=900&q=85','Luma Studio Website','Website','Brand platform and digital experience'],
        ['nivara-finance','https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=900&q=85','Nivara Finance Dashboard','Software','Product design and development'],
        ['northstar-growth','https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=85','Northstar Growth Campaign','Marketing','SEO and paid acquisition'],
        ['medicore-portal','https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=85','MediCore Patient Portal','Software','A calmer patient journey'],
        ['book-tracker','https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=85','Book Track Relax','Mobile App','On-demand service app with real-time tracking'],
        ['more-leads','https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=85','More Leads More Sales','Marketing','Google Ads and Meta ads growth funnel'],
        ['nexus-brand','https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=900&q=85','Nexus Brand Identity','Branding & Design','Brand refresh and campaign visuals'],
        ['saas-dashboard','https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=85','SaaS Dashboard UI','UI/UX Design','Modern and user-friendly dashboard experience'],
      ] as $project)
        <div class="col-md-6 col-xl-3">
          <article class="project-card h-100">
            <img src="{{ $project[1] }}" alt="{{ $project[2] }}">
            <div class="project-card-body">
              <span class="project-tag">{{ $project[3] }}</span>
              <h3>{{ $project[2] }}</h3>
              <p>{{ $project[4] }}</p>
              <a href="{{ route('project.detail', $project[0]) }}">View Project <span>→</span></a>
            </div>
          </article>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="projects-testimonials py-5">
  <div class="container">
    <div class="projects-testimonial-header d-flex justify-content-between align-items-center mb-4">
      <div>
        <p class="eyebrow">Our work speaks</p>
        <h2>Trusted by <span>Businesses</span> Across Industries</h2>
      </div>
      <p class="projects-testimonial-copy">We are proud to have worked with startups, growing businesses, and established brands across various industries.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['Rohit Mehta','Business Owner','Amazing team! They delivered exactly what we needed, on time and with great quality.'],
        ['Priya Verma','Marketing Head','Professional, creative, and highly responsive. CodexnIndia is a trusted partner for our growth.'],
        ['Amit Sharma','Founder, Startup','Great experience working with CodexnIndia. Highly recommended.']
      ] as $review)
        <div class="col-md-4">
          <article class="testimonial-card h-100">
            <div class="testimonial-top">
              <div class="testimonial-avatar">{{ strtoupper(substr($review[0], 0, 1)) }}</div>
              <div>
                <strong>{{ $review[0] }}</strong>
                <small>{{ $review[1] }}</small>
              </div>
            </div>
            <div class="stars">★★★★★</div>
            <p>“{{ $review[2] }}”</p>
          </article>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="projects-process py-5">
  <div class="container">
    <div class="projects-process-header d-flex justify-content-between align-items-end mb-4">
      <div>
        <p class="eyebrow">Our process</p>
        <h2>From <span>Idea</span> to Success</h2>
      </div>
      <p class="small text-secondary mb-0">A simple and transparent process to deliver high-quality solutions.</p>
    </div>
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
      @foreach ([['01','Discover','Understand your goals'],['02','Plan','Strategy and roadmap'],['03','Design','Create a clear experience'],['04','Develop','Build and test'],['05','Launch','Go live and grow']] as $step)
        <div class="col">
          <div class="process-step-card">
            <span class="process-step-no">{{ $step[0] }}</span>
            <i class="bi bi-arrow-right"></i>
            <strong>{{ $step[1] }}</strong>
            <small>{{ $step[2] }}</small>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="projects-cta-wrap py-4">
  <div class="container">
    <div class="projects-cta">
      <div class="row align-items-center g-3">
        <div class="col-lg-7">
          <p class="eyebrow">Let's work together</p>
          <h2>Have a Project in <span>Mind?</span></h2>
          <p>Get in touch with us today and let's build something amazing together.</p>
        </div>
        <div class="col-lg-5 text-lg-end">
          <a href="{{ route('home') }}#contact" class="btn btn-light">Get a Free Consultation <span>→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
