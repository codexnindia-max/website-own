@extends('layouts.site', ['title' => 'Team', 'description' => 'Meet the passionate team behind CodexnIndia.'])
@section('content')

@include('partials.project-hero', [
    'heroProject' => [
        'breadcrumb' => 'Home › Team',
        'eyebrow' => 'OUR TEAM',
        'title' => 'The People Behind',
        'titleAccent' => 'Your Success',
        'description' => 'A passionate team of designers, developers, marketers, and strategists working together to turn ideas into real digital solutions.',
        'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=88',
        'floatingLabel' => 'Great',
        'floatingTitle' => "Teams\nBuild\nGreater\nThings",
        'statNumber' => '10+',
        'statLabel' => 'Team Members',
    ],
])

{{-- 2. METRICS / STATS BAR --}}
<section class="team-metrics-bar-wrap py-3">
  <div class="container">
    <div class="team-metrics-card border rounded-4 p-4 p-lg-4 bg-white shadow-sm">
      <div class="row row-cols-2 row-cols-lg-4 g-4 text-center align-items-center">
        <div class="col team-metric-col">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div class="metric-icon-wrap">
              <i class="bi bi-geo-alt text-brand fs-3"></i>
            </div>
            <div class="text-start">
              <strong class="d-block fs-3 fw-bold lh-1">10+</strong>
              <small class="text-secondary fw-semibold">Team Members</small>
            </div>
          </div>
        </div>
        <div class="col team-metric-col">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div class="metric-icon-wrap">
              <i class="bi bi-star text-brand fs-3"></i>
            </div>
            <div class="text-start">
              <strong class="d-block fs-3 fw-bold lh-1">5+</strong>
              <small class="text-secondary fw-semibold">Years Together</small>
            </div>
          </div>
        </div>
        <div class="col team-metric-col">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div class="metric-icon-wrap">
              <i class="bi bi-people text-brand fs-3"></i>
            </div>
            <div class="text-start">
              <strong class="d-block fs-3 fw-bold lh-1">100+</strong>
              <small class="text-secondary fw-semibold">Projects Delivered</small>
            </div>
          </div>
        </div>
        <div class="col team-metric-col">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div class="metric-icon-wrap">
              <i class="bi bi-heart text-brand fs-3"></i>
            </div>
            <div class="text-start">
              <strong class="d-block fs-4 fw-bold lh-1">A Shared Goal</strong>
              <small class="text-secondary fw-semibold">Your Success</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 3. LEADERSHIP SECTION --}}
<section class="team-leadership-section py-5">
  <div class="container">
    <div class="row align-items-end justify-content-between g-4 mb-4">
      <div class="col-lg-6">
        <div class="team-ref-eyebrow mb-2">
          <span class="eyebrow-dash"></span> LEADERSHIP
        </div>
        <h2 class="team-section-title">
          Our <span class="text-brand">Leaders</span>
        </h2>
        <p class="text-secondary mb-0">Guiding innovation, people, and progress.</p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <div class="leader-quote-box d-inline-block text-start text-lg-end">
          <p class="fst-italic text-secondary small mb-1">
            "Great things in business are never done by one person. They're done by a team of people."
          </p>
          <div class="d-flex align-items-center justify-content-lg-end gap-2">
            <span class="quote-dash"></span>
            <strong class="small text-dark">— Steve Jobs</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 mt-2">
      {{-- Leader 1 --}}
      <div class="col">
        <article class="leader-card h-100 p-3 bg-white border rounded-4">
          <div class="leader-img-wrap rounded-4 overflow-hidden mb-3">
            <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=85" alt="Abhishek Kapoor">
          </div>
          <h3 class="h5 fw-bold mb-1">Abhishek Kapoor</h3>
          <p class="leader-role fw-bold small text-brand mb-2">Founder & CEO</p>
          <p class="small text-secondary mb-3 leader-desc">
            Passionate about technology and building digital solutions that create real value.
          </p>
          <div class="leader-socials d-flex gap-2">
            <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://github.com" target="_blank" rel="noopener" aria-label="GitHub"><i class="bi bi-github"></i></a>
          </div>
        </article>
      </div>

      {{-- Leader 2 --}}
      <div class="col">
        <article class="leader-card h-100 p-3 bg-white border rounded-4">
          <div class="leader-img-wrap rounded-4 overflow-hidden mb-3">
            <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=85" alt="Priya Verma">
          </div>
          <h3 class="h5 fw-bold mb-1">Priya Verma</h3>
          <p class="leader-role fw-bold small text-brand mb-2">Operations Head</p>
          <p class="small text-secondary mb-3 leader-desc">
            Ensures smooth operations and client success with a people-first approach.
          </p>
          <div class="leader-socials d-flex gap-2">
            <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </article>
      </div>

      {{-- Leader 3 --}}
      <div class="col">
        <article class="leader-card h-100 p-3 bg-white border rounded-4">
          <div class="leader-img-wrap rounded-4 overflow-hidden mb-3">
            <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=85" alt="Rohit Mehta">
          </div>
          <h3 class="h5 fw-bold mb-1">Rohit Mehta</h3>
          <p class="leader-role fw-bold small text-brand mb-2">Technical Lead</p>
          <p class="small text-secondary mb-3 leader-desc">
            Leads development and architecture for scalable and high-performance solutions.
          </p>
          <div class="leader-socials d-flex gap-2">
            <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://github.com" target="_blank" rel="noopener" aria-label="GitHub"><i class="bi bi-github"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
          </div>
        </article>
      </div>

      {{-- Leader 4 --}}
      <div class="col">
        <article class="leader-card h-100 p-3 bg-white border rounded-4">
          <div class="leader-img-wrap rounded-4 overflow-hidden mb-3">
            <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=600&q=85" alt="Neha Singh">
          </div>
          <h3 class="h5 fw-bold mb-1">Neha Singh</h3>
          <p class="leader-role fw-bold small text-brand mb-2">Marketing Head</p>
          <p class="small text-secondary mb-3 leader-desc">
            Drives brand growth and digital marketing strategies to help businesses succeed.
          </p>
          <div class="leader-socials d-flex gap-2">
            <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

{{-- 4. MEET OUR TEAM SECTION --}}
<section class="team-members-section py-5 bg-light-subtle">
  <div class="container">
    <div class="row align-items-end justify-content-between g-4 mb-4">
      <div class="col-lg-5">
        <div class="team-ref-eyebrow mb-2">
          <span class="eyebrow-dash"></span> OUR TEAM
        </div>
        <h2 class="team-section-title">
          Meet Our <span class="text-brand">Team</span>
        </h2>
        <p class="text-secondary mb-0">A diverse group of creative minds, problem solvers, and doers.</p>
      </div>
      <div class="col-lg-7 text-lg-end">
        <div class="team-filters-group d-inline-flex flex-wrap gap-2">
          <button type="button" class="btn btn-team-filter active" data-team-filter="all">All</button>
          <button type="button" class="btn btn-team-filter" data-team-filter="development">Development</button>
          <button type="button" class="btn btn-team-filter" data-team-filter="design">Design</button>
          <button type="button" class="btn btn-team-filter" data-team-filter="marketing">Marketing</button>
          <button type="button" class="btn btn-team-filter" data-team-filter="operations">Operations</button>
          <button type="button" class="btn btn-team-filter" data-team-filter="support">Support</button>
        </div>
      </div>
    </div>

    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-8 g-3 team-members-grid mt-2">
      {{-- Member 1 --}}
      <div class="col team-member-col" data-category="development">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=400&q=80" alt="Vikas Sharma">
          </div>
          <strong class="d-block small fw-bold text-dark">Vikas Sharma</strong>
          <small class="text-secondary member-role-text">Sr. Laravel Developer</small>
        </div>
      </div>

      {{-- Member 2 --}}
      <div class="col team-member-col" data-category="design">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80" alt="Kajal Jain">
          </div>
          <strong class="d-block small fw-bold text-dark">Kajal Jain</strong>
          <small class="text-secondary member-role-text">UI/UX Designer</small>
        </div>
      </div>

      {{-- Member 3 --}}
      <div class="col team-member-col" data-category="development">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=400&q=80" alt="Amit Yadav">
          </div>
          <strong class="d-block small fw-bold text-dark">Amit Yadav</strong>
          <small class="text-secondary member-role-text">Frontend Developer</small>
        </div>
      </div>

      {{-- Member 4 --}}
      <div class="col team-member-col" data-category="marketing">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=400&q=80" alt="Simran Kaur">
          </div>
          <strong class="d-block small fw-bold text-dark">Simran Kaur</strong>
          <small class="text-secondary member-role-text">SEO Specialist</small>
        </div>
      </div>

      {{-- Member 5 --}}
      <div class="col team-member-col" data-category="development">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=400&q=80" alt="Deepak Raj">
          </div>
          <strong class="d-block small fw-bold text-dark">Deepak Raj</strong>
          <small class="text-secondary member-role-text">Cloud & DevOps</small>
        </div>
      </div>

      {{-- Member 6 --}}
      <div class="col team-member-col" data-category="marketing">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?auto=format&fit=crop&w=400&q=80" alt="Ritika Soni">
          </div>
          <strong class="d-block small fw-bold text-dark">Ritika Soni</strong>
          <small class="text-secondary member-role-text">Content Writer</small>
        </div>
      </div>

      {{-- Member 7 --}}
      <div class="col team-member-col" data-category="operations">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80" alt="Arjun Mehta">
          </div>
          <strong class="d-block small fw-bold text-dark">Arjun Mehta</strong>
          <small class="text-secondary member-role-text">Business Analyst</small>
        </div>
      </div>

      {{-- Member 8 --}}
      <div class="col team-member-col" data-category="operations">
        <div class="member-small-card text-center">
          <div class="member-img-wrap rounded-3 overflow-hidden mb-2">
            <img class="w-100 object-fit-cover" src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=400&q=80" alt="Pooja Verma">
          </div>
          <strong class="d-block small fw-bold text-dark">Pooja Verma</strong>
          <small class="text-secondary member-role-text">HR & Operations</small>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 5. OUR CULTURE SECTION --}}
<section class="team-culture-section py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="team-ref-eyebrow mb-2">
          <span class="eyebrow-dash"></span> OUR CULTURE
        </div>
        <h2 class="team-section-title">
          More Than Just <span class="text-brand">Work</span>
        </h2>
        <p class="text-secondary mb-4">
          We believe in a positive, creative, and growth-focused work environment.
        </p>

        <div class="row row-cols-1 row-cols-sm-2 g-4 mt-2">
          <div class="col">
            <div class="culture-item d-flex align-items-start gap-3">
              <div class="culture-icon-wrap">
                <i class="bi bi-cup-hot-fill text-brand fs-4"></i>
              </div>
              <div>
                <strong class="d-block fw-bold mb-1">Flexible Work</strong>
                <small class="text-secondary">Balance work and life</small>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="culture-item d-flex align-items-start gap-3">
              <div class="culture-icon-wrap">
                <i class="bi bi-people-fill text-brand fs-4"></i>
              </div>
              <div>
                <strong class="d-block fw-bold mb-1">Friendly Team</strong>
                <small class="text-secondary">Supportive and collaborative</small>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="culture-item d-flex align-items-start gap-3">
              <div class="culture-icon-wrap">
                <i class="bi bi-tree-fill text-brand fs-4"></i>
              </div>
              <div>
                <strong class="d-block fw-bold mb-1">Continuous Learning</strong>
                <small class="text-secondary">Grow every day</small>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="culture-item d-flex align-items-start gap-3">
              <div class="culture-icon-wrap">
                <i class="bi bi-heart-fill text-brand fs-4"></i>
              </div>
              <div>
                <strong class="d-block fw-bold mb-1">Fun & Engaging</strong>
                <small class="text-secondary">Work with joy</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="culture-art-wrap position-relative d-flex gap-3 align-items-center justify-content-center">
          <div class="culture-img-box culture-img-1 position-relative rounded-4 overflow-hidden shadow">
            <div class="culture-scribble-tag position-absolute top-0 start-0 p-3 text-white fw-bold">
              Good<br>Ideas<br><em>Great</em><br>People
            </div>
            <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=80" alt="Team high five">
          </div>
          <div class="culture-img-box culture-img-2 rounded-4 overflow-hidden shadow">
            <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=700&q=80" alt="Modern office workspace">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 6. JOIN OUR JOURNEY CTA --}}
<section class="team-cta-banner-wrap py-4">
  <div class="container">
    <div class="team-join-cta p-4 p-lg-5 rounded-4 position-relative overflow-hidden text-white shadow-lg">
      <div class="row align-items-center justify-content-between g-4 position-relative z-2">
        <div class="col-lg-7">
          <span class="team-cta-tag small fw-bold text-uppercase mb-2 d-inline-block">JOIN OUR JOURNEY</span>
          <h2 class="display-6 fw-bold mb-2">
            Let's Build Something Amazing <span class="text-brand">Together</span>
          </h2>
          <p class="text-white-50 mb-0">
            Be part of a team that values creativity, growth, and impact.
          </p>
        </div>
        <div class="col-lg-5 d-flex align-items-center justify-content-lg-end gap-4">
          <a class="btn btn-light rounded-pill px-4 py-2 fw-bold text-dark shadow-sm" href="{{ route('home') }}#contact">
            View Open Positions →
          </a>
          <div class="team-cta-handwriting d-none d-sm-block">
            Grow<br>Learn<br><em>Achieve</em>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
