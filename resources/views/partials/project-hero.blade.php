@php
  $heroProject = $heroProject ?? null;
  $heroTitle = $heroProject['title'] ?? 'Our Projects';
  $heroCategory = $heroProject['category'] ?? 'Projects';
  $heroDescription = $heroProject['description'] ?? 'Turning ideas into real digital solutions. Explore our latest work and see how we build growth-focused products for ambitious businesses.';
  $heroImage = $heroProject['image'] ?? 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=88';
  $heroBreadcrumb = $heroProject['breadcrumb'] ?? 'Home > Projects';
@endphp

<section class="projects-hero">
  <div class="container">
    <div class="row align-items-center g-0">
      <div class="col-lg-6">
        <p class="projects-breadcrumb">{{ $heroBreadcrumb }}</p>
        @if ($heroProject)
          <p class="eyebrow mb-2">{{ $heroCategory }}</p>
          <h1>{{ $heroTitle }}</h1>
        @else
          <h1>Our <span>Projects</span></h1>
        @endif
        <p class="projects-intro">{{ $heroDescription }}</p>
        <div class="projects-badges">
          @foreach ($heroProject['badges'] ?? ['Real Business Impact', 'Diverse Industries', 'Modern Technologies', 'Client Satisfaction'] as $badge)
            <span>{{ $badge }}</span>
          @endforeach
        </div>
      </div>
      <div class="col-lg-6 projects-hero-art">
        <div class="projects-scribble">Ideas<br>Code<br><em>Growth</em></div>
        <div class="projects-card-floating">
          <span>{{ $heroProject['floatingLabel'] ?? 'Building' }}</span>
          <strong>{!! nl2br(e($heroProject['floatingTitle'] ?? 'Digital Success Together')) !!}</strong>
        </div>
        <img src="{{ $heroImage }}" alt="{{ $heroTitle }} project preview">
      </div>
    </div>
  </div>
</section>
