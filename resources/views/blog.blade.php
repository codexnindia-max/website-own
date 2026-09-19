@extends('layouts.site', ['title' => 'Blog', 'description' => 'Explore expert insights, practical tips, and latest tech trends from CodexnIndia.'])
@section('content')

{{-- 1. HERO SECTION --}}
@include('partials.project-hero', [
    'heroProject' => [
        'breadcrumb' => 'Home › Blog',
        'eyebrow' => 'OUR BLOG',
        'title' => 'Insights for a',
        'titleAccent' => 'Smarter Tomorrow',
        'description' => 'Explore expert insights, practical tips, and the latest trends in technology, digital marketing, and business growth.',
        'badges' => ['Learn', 'Get Inspired', 'Grow Your Business'],
        'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&w=1200&q=88',
        'floatingLabel' => 'Stay',
        'floatingTitle' => "Updated\nStay\nAhead",
        'statNumber' => '50+',
        'statLabel' => 'Articles Published',
    ],
])

{{-- 2. CATEGORY TABS STRIP --}}
<section class="blog-cats-strip py-4 border-bottom bg-white">
  <div class="container">
    <div class="blog-cats-row d-flex align-items-center justify-content-between gap-2 overflow-x-auto pb-2 pb-md-0">
      <button type="button" class="blog-cat-btn active" data-blog-category="all">
        <i class="bi bi-grid-fill"></i>
        <span>All Posts</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="web-development">
        <i class="bi bi-code-slash"></i>
        <span>Web Development</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="digital-marketing">
        <i class="bi bi-bar-chart-line-fill"></i>
        <span>Digital Marketing</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="seo">
        <i class="bi bi-search"></i>
        <span>SEO</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="business-growth">
        <i class="bi bi-graph-up-arrow"></i>
        <span>Business Growth</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="technology">
        <i class="bi bi-cpu"></i>
        <span>Technology</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="tips-guides">
        <i class="bi bi-lightbulb"></i>
        <span>Tips & Guides</span>
      </button>
      <button type="button" class="blog-cat-btn" data-blog-category="company-news">
        <i class="bi bi-newspaper"></i>
        <span>Company News</span>
      </button>
    </div>
  </div>
</section>

{{-- 3. MAIN BLOG SECTION (2 COLUMNS: POSTS + SIDEBAR) --}}
<section class="blog-main-section py-5">
  <div class="container">
    <div class="row g-5">
      
      {{-- LEFT COLUMN: FEATURED + LATEST POSTS --}}
      <div class="col-lg-8">
        
        {{-- FEATURED POST --}}
        <div class="featured-post-wrap mb-5">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="h4 fw-bold mb-0">Featured Post</h2>
            <div class="d-flex gap-2">
              <button class="btn-carousel-ctrl" aria-label="Previous"><i class="bi bi-chevron-left"></i></button>
              <button class="btn-carousel-ctrl" aria-label="Next"><i class="bi bi-chevron-right"></i></button>
            </div>
          </div>

          <article class="featured-post-card border rounded-4 overflow-hidden bg-white shadow-sm">
            <div class="row g-0 align-items-center">
              <div class="col-md-6 p-4 p-lg-5">
                <span class="blog-tag mb-3 d-inline-block">Web Development</span>
                <h3 class="h4 fw-bold mb-3 text-dark">
                  <a href="{{ route('blog.detail', 'laravel-12-whats-new') }}" class="text-dark text-decoration-none">
                    Laravel 12: What's New and Why It Matters in 2025
                  </a>
                </h3>
                <p class="text-secondary small mb-4">
                  Explore the latest features, improvements, and performance updates in Laravel 12, and how it can help you build modern web applications faster.
                </p>
                <div class="mb-4">
                  <a href="{{ route('blog.detail', 'laravel-12-whats-new') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold btn-sm">
                    Read Full Article →
                  </a>
                </div>
                <div class="d-flex align-items-center gap-3 pt-3 border-top text-secondary small">
                  <div class="d-flex align-items-center gap-2">
                    <img class="rounded-circle" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" width="28" height="28" alt="Abhishek Kapoor">
                    <span class="fw-medium text-dark">By Abhishek Kapoor</span>
                  </div>
                  <span><i class="bi bi-calendar3 me-1"></i> Aug 25, 2025</span>
                  <span><i class="bi bi-clock me-1"></i> 8 min read</span>
                </div>
              </div>
              <div class="col-md-6 h-100">
                <div class="featured-img-box position-relative h-100">
                  <img class="w-100 h-100 object-fit-cover" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=85" alt="Laravel 12 banner">
                  <div class="featured-graphic-overlay position-absolute inset-0 d-flex flex-column justify-content-center align-items-center text-white p-4 text-center">
                    <div class="laravel-icon-box mb-2">
                      <i class="bi bi-layers text-brand fs-1"></i>
                    </div>
                    <strong class="display-6 fw-bold">Laravel <span class="text-brand">12</span></strong>
                    <small class="text-white-50 letter-spacing-1">Faster. Smarter. Better.</small>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>

        {{-- LATEST BLOG POSTS --}}
        <div class="latest-posts-wrap">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 fw-bold mb-0">Latest Blog Posts</h2>
            <a href="#all" class="text-brand fw-bold small text-decoration-none">View All Posts →</a>
          </div>

          <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4" id="blogCardsGrid">
            {{-- Post 1 --}}
            <div class="col blog-post-item" data-category="digital-marketing">
              <article class="blog-grid-card h-100 bg-white border rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                <div class="blog-grid-img-wrap position-relative">
                  <a href="{{ route('blog.detail', 'google-ads-vs-meta-ads') }}">
                    <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=600&q=80" alt="Google Ads vs Meta Ads" class="w-100 object-fit-cover">
                  </a>
                  <span class="blog-tag position-absolute top-0 start-0 m-3">Digital Marketing</span>
                </div>
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <h3 class="h6 fw-bold mb-2">
                    <a href="{{ route('blog.detail', 'google-ads-vs-meta-ads') }}" class="text-dark text-decoration-none hover-brand">
                      Google Ads vs Meta Ads: Which is Better for Your Business?
                    </a>
                  </h3>
                  <p class="text-secondary small flex-grow-1 mb-3">
                    Compare Google Ads and Meta Ads to find the best platform for your business goals, budget, and audience.
                  </p>
                  <div class="d-flex align-items-center justify-content-between text-secondary pt-2 border-top extra-small">
                    <span><i class="bi bi-clock me-1"></i> Aug 20, 2025</span>
                    <span><i class="bi bi-book me-1"></i> 6 min read</span>
                  </div>
                </div>
              </article>
            </div>

            {{-- Post 2 --}}
            <div class="col blog-post-item" data-category="seo">
              <article class="blog-grid-card h-100 bg-white border rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                <div class="blog-grid-img-wrap position-relative">
                  <a href="{{ route('blog.detail', 'seo-strategies-2025') }}">
                    <img src="https://images.unsplash.com/photo-1571721795195-a2ca2d3370a9?auto=format&fit=crop&w=600&q=80" alt="SEO Strategies" class="w-100 object-fit-cover">
                  </a>
                  <span class="blog-tag position-absolute top-0 start-0 m-3">SEO</span>
                </div>
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <h3 class="h6 fw-bold mb-2">
                    <a href="{{ route('blog.detail', 'seo-strategies-2025') }}" class="text-dark text-decoration-none hover-brand">
                      10 Proven SEO Strategies to Rank Higher in 2025
                    </a>
                  </h3>
                  <p class="text-secondary small flex-grow-1 mb-3">
                    Learn the latest SEO strategies to improve your website ranking, get more traffic, and generate quality leads.
                  </p>
                  <div class="d-flex align-items-center justify-content-between text-secondary pt-2 border-top extra-small">
                    <span><i class="bi bi-clock me-1"></i> Aug 18, 2025</span>
                    <span><i class="bi bi-book me-1"></i> 7 min read</span>
                  </div>
                </div>
              </article>
            </div>

            {{-- Post 3 --}}
            <div class="col blog-post-item" data-category="web-development">
              <article class="blog-grid-card h-100 bg-white border rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                <div class="blog-grid-img-wrap position-relative">
                  <a href="{{ route('blog.detail', 'modern-business-website-features') }}">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" alt="Modern Business Website" class="w-100 object-fit-cover">
                  </a>
                  <span class="blog-tag position-absolute top-0 start-0 m-3">Web Development</span>
                </div>
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <h3 class="h6 fw-bold mb-2">
                    <a href="{{ route('blog.detail', 'modern-business-website-features') }}" class="text-dark text-decoration-none hover-brand">
                      Top 10 Features Every Modern Business Website Must Have
                    </a>
                  </h3>
                  <p class="text-secondary small flex-grow-1 mb-3">
                    Make your website more effective with these essential features that improve user experience and conversions.
                  </p>
                  <div class="d-flex align-items-center justify-content-between text-secondary pt-2 border-top extra-small">
                    <span><i class="bi bi-clock me-1"></i> Aug 12, 2025</span>
                    <span><i class="bi bi-book me-1"></i> 5 min read</span>
                  </div>
                </div>
              </article>
            </div>

            {{-- Post 4 --}}
            <div class="col blog-post-item" data-category="business-growth">
              <article class="blog-grid-card h-100 bg-white border rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                <div class="blog-grid-img-wrap position-relative">
                  <a href="{{ route('blog.detail', 'laravel-12-whats-new') }}">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="Business Growth" class="w-100 object-fit-cover">
                  </a>
                  <span class="blog-tag position-absolute top-0 start-0 m-3">Business Growth</span>
                </div>
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <h3 class="h6 fw-bold mb-2">
                    <a href="{{ route('blog.detail', 'laravel-12-whats-new') }}" class="text-dark text-decoration-none hover-brand">
                      How to Grow Your Business with Digital Marketing
                    </a>
                  </h3>
                  <p class="text-secondary small flex-grow-1 mb-3">
                    Discover practical digital marketing strategies to increase brand awareness, leads, and revenue.
                  </p>
                  <div class="d-flex align-items-center justify-content-between text-secondary pt-2 border-top extra-small">
                    <span><i class="bi bi-clock me-1"></i> Aug 10, 2025</span>
                    <span><i class="bi bi-book me-1"></i> 6 min read</span>
                  </div>
                </div>
              </article>
            </div>

            {{-- Post 5 --}}
            <div class="col blog-post-item" data-category="technology">
              <article class="blog-grid-card h-100 bg-white border rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                <div class="blog-grid-img-wrap position-relative">
                  <a href="{{ route('blog.detail', 'ai-transforming-it-industry') }}">
                    <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=600&q=80" alt="AI Transformation" class="w-100 object-fit-cover">
                  </a>
                  <span class="blog-tag position-absolute top-0 start-0 m-3">Technology</span>
                </div>
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <h3 class="h6 fw-bold mb-2">
                    <a href="{{ route('blog.detail', 'ai-transforming-it-industry') }}" class="text-dark text-decoration-none hover-brand">
                      How AI is Transforming the IT Industry
                    </a>
                  </h3>
                  <p class="text-secondary small flex-grow-1 mb-3">
                    Explore how artificial intelligence is changing the way businesses build, operate, and grow.
                  </p>
                  <div class="d-flex align-items-center justify-content-between text-secondary pt-2 border-top extra-small">
                    <span><i class="bi bi-clock me-1"></i> Aug 05, 2025</span>
                    <span><i class="bi bi-book me-1"></i> 8 min read</span>
                  </div>
                </div>
              </article>
            </div>

            {{-- Post 6 --}}
            <div class="col blog-post-item" data-category="tips-guides">
              <article class="blog-grid-card h-100 bg-white border rounded-4 overflow-hidden d-flex flex-column shadow-sm">
                <div class="blog-grid-img-wrap position-relative">
                  <a href="{{ route('blog.detail', 'laravel-12-whats-new') }}">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80" alt="Online Business Guide" class="w-100 object-fit-cover">
                  </a>
                  <span class="blog-tag position-absolute top-0 start-0 m-3">Tips & Guides</span>
                </div>
                <div class="p-3 d-flex flex-column flex-grow-1">
                  <h3 class="h6 fw-bold mb-2">
                    <a href="{{ route('blog.detail', 'laravel-12-whats-new') }}" class="text-dark text-decoration-none hover-brand">
                      A Beginner's Guide to Starting an Online Business
                    </a>
                  </h3>
                  <p class="text-secondary small flex-grow-1 mb-3">
                    Step-by-step guide to start your online business, from idea validation to launch and marketing.
                  </p>
                  <div class="d-flex align-items-center justify-content-between text-secondary pt-2 border-top extra-small">
                    <span><i class="bi bi-clock me-1"></i> Jul 28, 2025</span>
                    <span><i class="bi bi-book me-1"></i> 7 min read</span>
                  </div>
                </div>
              </article>
            </div>
          </div>

          {{-- PAGINATION --}}
          <div class="d-flex justify-content-center align-items-center gap-2 mt-5">
            <span class="page-num-circle active">1</span>
            <span class="page-num-circle">2</span>
            <span class="page-num-circle">3</span>
            <span class="page-num-circle">4</span>
            <span class="page-num-circle">5</span>
            <span class="page-num-circle">→</span>
          </div>
        </div>
      </div>

      {{-- RIGHT COLUMN: SIDEBAR --}}
      <div class="col-lg-4">
        <aside class="blog-sidebar d-flex flex-column gap-4">
          
          {{-- SEARCH WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <h3 class="h6 fw-bold mb-3">Search Articles</h3>
            <div class="input-group">
              <input type="text" class="form-control blog-search-input" placeholder="Search blogs, topics..." aria-label="Search blogs" id="blogSideSearch">
              <button class="btn btn-brand" type="button"><i class="bi bi-search"></i></button>
            </div>
          </div>

          {{-- CATEGORIES WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="h6 fw-bold mb-0">Categories</h3>
              <a href="#cats" class="text-brand small fw-semibold text-decoration-none">View All →</a>
            </div>
            <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="web-development">
                  <i class="bi bi-code-slash text-brand"></i> Web Development
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">24</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="digital-marketing">
                  <i class="bi bi-bar-chart-fill text-brand"></i> Digital Marketing
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">18</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="seo">
                  <i class="bi bi-search text-brand"></i> SEO
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">16</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="business-growth">
                  <i class="bi bi-graph-up-arrow text-brand"></i> Business Growth
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">12</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="technology">
                  <i class="bi bi-cpu text-brand"></i> Technology
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">20</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="tips-guides">
                  <i class="bi bi-lightbulb text-brand"></i> Tips & Guides
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">14</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="#cat" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand" data-side-cat="company-news">
                  <i class="bi bi-newspaper text-brand"></i> Company News
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">10</span>
              </li>
            </ul>
          </div>

          {{-- POPULAR POSTS WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <h3 class="h6 fw-bold mb-3">Popular Posts</h3>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=150&q=80" alt="Post 1">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">How to Rank Your Website on Google in 2025</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Jan 15, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=150&q=80" alt="Post 2">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">Google Ads vs Meta Ads: Which is Better?</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Feb 02, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=150&q=80" alt="Post 3">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">10 Essential Features Every Business Website Needs</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Mar 18, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=150&q=80" alt="Post 4">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">How AI is Changing the Future of Web Development</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Apr 10, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1571721795195-a2ca2d3370a9?auto=format&fit=crop&w=150&q=80" alt="Post 5">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">A Complete Guide to SEO for Beginners</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> May 05, 2025</small>
                </div>
              </div>
            </div>
          </div>

          {{-- SUBSCRIBE WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <div class="d-flex align-items-center gap-2 text-brand mb-2">
              <i class="bi bi-envelope-check-fill fs-5"></i>
              <h3 class="h6 fw-bold mb-0 text-dark">Subscribe to Our Blog</h3>
            </div>
            <p class="text-secondary small mb-3">Get the latest articles, tips, and resources delivered to your inbox.</p>
            <form onsubmit="return false;" class="d-flex flex-column gap-2">
              <input type="email" class="form-control form-control-sm" placeholder="Enter your email" required>
              <button type="submit" class="btn btn-brand btn-sm fw-semibold">Subscribe →</button>
            </form>
            <small class="text-secondary extra-small mt-2 d-block">No spam. Unsubscribe anytime.</small>
          </div>

        </aside>
      </div>

    </div>
  </div>
</section>

{{-- 4. BOTTOM CTA BANNER --}}
<section class="blog-cta-banner-wrap py-4">
  <div class="container">
    <div class="team-join-cta p-4 p-lg-5 rounded-4 position-relative overflow-hidden text-white shadow-lg">
      <div class="row align-items-center justify-content-between g-4 position-relative z-2">
        <div class="col-lg-7">
          <span class="team-cta-tag small fw-bold text-uppercase mb-2 d-inline-block">STAY AHEAD WITH KNOWLEDGE</span>
          <h2 class="display-6 fw-bold mb-2">
            Let's Build a <span class="text-brand">Smarter Future</span> Together
          </h2>
          <p class="text-white-50 mb-0">
            Get expert insights, digital tips, and the latest tech trends straight to your inbox.
          </p>
        </div>
        <div class="col-lg-5 d-flex align-items-center justify-content-lg-end gap-4">
          <a class="btn btn-light rounded-pill px-4 py-2 fw-bold text-dark shadow-sm" href="{{ route('home') }}#contact">
            Subscribe Now →
          </a>
          <div class="team-cta-handwriting d-none d-sm-block">
            Ideas<br>Insights<br><em>Impact</em>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

