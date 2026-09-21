@extends('layouts.site', ['title' => 'Services', 'description' => 'Digital solutions for real business growth from CodexnIndia.'])
@section('content')
<section class="services-reference-hero">
  <div class="container">
    <div class="row align-items-center g-0">
      <div class="col-lg-6 hero-reference-copy">
        <p class="services-breadcrumb">Home <span class="breadcrumb-sep">›</span> Services</p>
        <p class="eyebrow">OUR SERVICES</p>
        <h1>Digital Solutions<br>For <span>Real Growth</span></h1>
        <p class="lead">From websites to marketing, we provide end-to-end digital solutions to help your business grow, scale, and succeed.</p>
      </div>
      <div class="col-lg-6 services-reference-art">
        <div class="services-orange-shape"></div>
        <div class="services-scribble">Ideas<br>Code<br><em>Growth</em></div>
        <img class="services-developer" src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1200&q=88" alt="Technology specialist in a laboratory">
        <div class="services-hero-card">
          <span>Your</span>
          <strong>Technology<br>Partner<br>in Growth</strong>
        </div>
        <div class="services-project-card">
          <strong>100+</strong>
          <small>Projects Delivered</small>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="featured-services" class="py-5"><div class="container"><div class="d-flex justify-content-between align-items-end mb-4"><div><p class="eyebrow mb-1">Featured services</p><h2 class="h2 fw-bold">Our <span class="text-brand">Core Services</span></h2></div><p class="small text-secondary d-none d-md-block mb-0">Everything you need to build, grow, and scale your business.</p></div><div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 align-items-stretch">@foreach ([['bi-code-slash','Website Development','Modern, responsive and high-performing websites that convert.',['Business Websites','E-commerce Websites','Custom Web Applications'],'website-development'],['bi-megaphone','Digital Marketing','Data-driven marketing strategies to increase your visibility and generate quality leads.',['SEO','SMO (Social Media)','Google Ads','Meta Ads'],'seo'],['bi-boxes','Software Development','Custom software solutions to automate processes and improve efficiency.',['Custom Software','Web Applications','API Development','SaaS Solutions'],'software-development'],['bi-brush','Branding & Design','Create a strong brand identity that makes a lasting impression.',['Logo & Brand Identity','UI/UX Design','Marketing Creatives','Brand Strategy'],'branding']] as $service)<div class="col"><article class="featured-service-card service-tone-{{ $loop->iteration }} h-100 p-4 rounded-4 d-flex flex-column"><span class="service-card-number">{{ sprintf('%02d', $loop->iteration) }}</span><i class="bi {{ $service[0] }} service-card-icon"></i><h3 class="h5 fw-bold mt-3">{{ $service[1] }}</h3><p class="small text-secondary">{{ $service[2] }}</p><ul class="service-bullets small flex-grow-1">@foreach ($service[3] as $item)<li>{{ $item }}</li>@endforeach</ul><a class="small text-brand fw-bold mt-3" href="{{ route('service.detail', $service[4]) }}">Learn More　→</a></article></div>@endforeach</div></div></section>

<section class="py-5 bg-light services-complete"><div class="container"><div class="d-flex justify-content-between align-items-end mb-4"><div><p class="eyebrow mb-1">All services</p><h2 class="h2 fw-bold">Complete <span class="text-brand">Digital Services</span></h2></div><div class="text-lg-end"><p class="small text-secondary mb-2 d-none d-md-block">End-to-end solutions tailored to your business needs.</p><a class="small text-brand fw-bold" href="{{ route('home') }}#contact">Need a custom solution? →</a></div></div><div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 g-2">@foreach ([['bi-code-slash','Website Development','website-development'],['bi-cart3','E-commerce Development','website-development'],['bi-phone','Mobile App Development','software-development'],['bi-boxes','Software Development','software-development'],['bi-bar-chart-line','SEO','seo'],['bi-share-fill','SMO','smo'],['bi-google','Google Ads','google-ads'],['bi-meta','Meta Ads','smo'],['bi-brush','Branding & Identity','branding'],['bi-palette2','UI/UX Design','branding'],['bi-cloud','Cloud & DevOps','software-development'],['bi-headset','IT Consulting','software-development']] as $service)<div class="col"><a class="all-service-card d-block h-100 p-3 bg-white border rounded-3" href="{{ route('service.detail', $service[2]) }}"><i class="bi {{ $service[0] }}"></i><span>{{ $service[1] }}</span><b>→</b></a></div>@endforeach</div></div></section>

<section class="py-5 impact-section"><div class="container"><div class="row align-items-end g-4 mb-4"><div class="col-lg-7"><p class="eyebrow mb-1">Our impact</p><h2 class="h2 fw-bold">How our services help you <span>grow</span></h2></div><div class="col-lg-5 text-lg-end"><p class="small mb-0">More than services. A clearer path from attention to outcomes.</p></div></div><div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 align-items-stretch">@foreach ([['01','bi-graph-up-arrow','Increase Online Visibility','Rank higher and reach more customers.'],['02','bi-people-fill','Generate Quality Leads','Attract and convert the right audience.'],['03','bi-shield-check','Build Strong Brand Identity','Stand out in a competitive market.'],['04','bi-gear-wide-connected','Automate Business Processes','Save time and improve efficiency.']] as $benefit)<div class="col"><article class="benefit-card h-100 p-4 rounded-4 d-flex flex-column"><span class="benefit-number">{{ $benefit[0] }}</span><i class="bi {{ $benefit[1] }}"></i><h3 class="h6 fw-bold mt-3">{{ $benefit[2] }}</h3><p class="small mb-0 flex-grow-1">{{ $benefit[3] }}</p><span class="benefit-line"></span></article></div>@endforeach</div></div></section>

<section class="py-5 bg-light"><div class="container"><div class="d-flex justify-content-between align-items-end mb-4"><div><p class="eyebrow mb-1">Industries we serve</p><h2 class="h2 fw-bold">Built for your <span class="text-brand">industry</span></h2></div><p class="small text-secondary mb-0 d-none d-md-block">We work with businesses across various industries.</p></div><div class="row row-cols-2 row-cols-sm-4 row-cols-lg-10 g-2">@foreach ([['bi-buildings','Real Estate'],['bi-cart3','E-commerce'],['bi-heart-pulse','Healthcare'],['bi-mortarboard','Education'],['bi-building-gear','Manufacturing'],['bi-cup-hot','Hospitality'],['bi-bank','Finance'],['bi-rocket','Startups'],['bi-truck','Logistics'],['bi-three-dots','& More']] as $industry)<div class="col"><div class="industry-card p-3 bg-white border rounded-3 text-center"><i class="bi {{ $industry[0] }}"></i><small>{{ $industry[1] }}</small></div></div>@endforeach</div></div></section>

<section class="py-4"><div class="container"><div class="services-final-cta rounded-4 p-4 p-lg-5 text-white"><div class="row align-items-center g-4"><div class="col-lg-7"><p class="eyebrow text-warning mb-2">Let's work together</p><h2 class="h2 fw-bold">Ready to grow your <span>business?</span></h2><p class="mb-0 text-white-50">Get in touch with us today and let's build something amazing together.</p></div><div class="col-lg-5 text-lg-end"><a class="btn btn-light" href="{{ route('home') }}#contact">Get a Free Consultation →</a></div></div></div></div></section>

<section class="py-4"><div class="container"><div class="row row-cols-2 row-cols-lg-4 stats-reference g-0 border-top border-bottom text-center"><div class="col"><strong>100+</strong><small>Projects Completed</small></div><div class="col"><strong>50+</strong><small>Happy Clients</small></div><div class="col"><strong>5+</strong><small>Years of Experience</small></div><div class="col"><strong>20+</strong><small>Services Offered</small></div></div></div></section>
@endsection
