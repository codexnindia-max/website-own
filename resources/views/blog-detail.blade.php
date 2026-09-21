@extends('layouts.site', ['title' => $post['title'] ?? 'Blog Detail', 'description' => $post['subtitle'] ?? ''])
@section('content')

<div class="blog-detail-page py-4 py-lg-5">
  <div class="container">
    
    {{-- BREADCRUMB --}}
    <nav aria-label="breadcrumb" class="mb-3">
      <ol class="breadcrumb blog-detail-breadcrumb small mb-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-secondary text-decoration-none">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog') }}" class="text-secondary text-decoration-none">Blog</a></li>
        <li class="breadcrumb-item"><a href="{{ route('blog') }}" class="text-secondary text-decoration-none">{{ $post['category'] ?? 'Web Development' }}</a></li>
        <li class="breadcrumb-item active text-dark fw-medium text-truncate" style="max-width: 320px;" aria-current="page">{{ $post['title'] ?? 'Article' }}</li>
      </ol>
    </nav>

    <div class="row g-5">
      
      {{-- MAIN CONTENT (LEFT COLUMN) --}}
      <div class="col-lg-8">
        <article class="blog-article">
          
          {{-- CATEGORY TAG --}}
          <div class="blog-category-label mb-2 d-inline-flex align-items-center gap-2">
            <span class="category-square"></span>
            <span class="fw-bold small text-uppercase text-brand letter-spacing-1">{{ $post['category'] ?? 'WEB DEVELOPMENT' }}</span>
          </div>

          {{-- MAIN TITLE --}}
          <h1 class="blog-detail-title mb-3">
            {{ $post['title'] ?? "Laravel 12: What's New and Why It Matters in 2025" }}
          </h1>

          {{-- SUBTITLE --}}
          <p class="blog-detail-lead text-secondary mb-4">
            {{ $post['subtitle'] ?? 'Explore the latest features, improvements, and performance updates in Laravel 12, and how it can help you build modern, scalable, and secure web applications faster.' }}
          </p>

          {{-- META BAR --}}
          <div class="blog-meta-bar d-flex flex-wrap align-items-center justify-content-between gap-3 py-3 border-top border-bottom mb-4">
            <div class="d-flex align-items-center gap-3 flex-wrap">
              <div class="d-flex align-items-center gap-2">
                <img class="rounded-circle object-fit-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" width="38" height="38" alt="{{ $post['author'] ?? 'Abhishek Kapoor' }}">
                <div>
                  <strong class="d-block small fw-bold text-dark lh-1">{{ $post['author'] ?? 'Abhishek Kapoor' }}</strong>
                  <small class="text-secondary extra-small">{{ $post['authorRole'] ?? 'Full Stack Developer' }}</small>
                </div>
              </div>
              <span class="meta-sep text-secondary">•</span>
              <span class="small text-secondary"><i class="bi bi-calendar3 me-1"></i> {{ $post['date'] ?? 'Aug 25, 2025' }}</span>
              <span class="meta-sep text-secondary">•</span>
              <span class="small text-secondary"><i class="bi bi-clock me-1"></i> {{ $post['readTime'] ?? '8 min read' }}</span>
              <span class="meta-sep text-secondary">•</span>
              <span class="small text-secondary"><i class="bi bi-eye me-1"></i> {{ $post['views'] ?? '1.2K views' }}</span>
            </div>

            {{-- SHARE ICONS --}}
            <div class="d-flex align-items-center gap-2">
              <span class="small fw-semibold text-secondary me-1">Share:</span>
              <a href="https://facebook.com" target="_blank" rel="noopener" class="share-btn share-fb" aria-label="Share on Facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://twitter.com" target="_blank" rel="noopener" class="share-btn share-tw" aria-label="Share on Twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="https://linkedin.com" target="_blank" rel="noopener" class="share-btn share-in" aria-label="Share on LinkedIn"><i class="bi bi-linkedin"></i></a>
              <button type="button" class="share-btn share-link" onclick="navigator.clipboard.writeText(window.location.href); alert('Link copied to clipboard!');" aria-label="Copy Link"><i class="bi bi-link-45deg"></i></button>
            </div>
          </div>

          {{-- FEATURED HERO BANNER --}}
          <div class="blog-featured-banner rounded-4 overflow-hidden position-relative mb-5 shadow-sm text-white">
            <div class="row g-0 align-items-center">
              <div class="col-md-6 p-4 p-lg-5 position-relative z-2">
                <div class="banner-title-bracket mb-2">
                  <span class="bracket-bar"></span>
                  <h2 class="display-6 fw-bold mb-0">Laravel <span class="text-brand">12</span></h2>
                </div>
                <h3 class="h4 fw-bold mb-3">Faster.<br>Smarter.<br>Better.</h3>
                <p class="small text-white-50 mb-0" style="max-width: 320px;">
                  Build the future with cleaner code, better performance, and more flexibility.
                </p>
              </div>
              <div class="col-md-6 position-relative text-center p-3 p-lg-4">
                <div class="tech-banner-visual position-relative mx-auto">
                  <div class="banner-scribble position-absolute">
                    Ideas<br>Code<br><em>Grow</em>
                  </div>
                  <img class="img-fluid rounded-3 shadow" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=700&q=85" alt="Laravel 12 Development workspace">
                  <div class="banner-books-stack position-absolute">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>Web Development</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- ARTICLE BODY CONTENT --}}
          <div class="blog-body-content text-secondary lh-lg mb-5">
            <p class="fs-6 text-dark fw-normal mb-4">
              Laravel has always been a developer-friendly PHP framework, and with the release of Laravel 12, it takes another big step forward. This version focuses on performance, developer experience, and modern PHP features, making it an exciting upgrade for both new and experienced developers.
            </p>

            {{-- SECTION 1 --}}
            <div class="content-section-block mb-4">
              <h2 class="h5 fw-bold text-dark section-heading-accent mb-2">
                1. Improved Performance
              </h2>
              <p>
                Laravel 12 introduces several under-the-hood optimizations that make your applications faster and more efficient. From better request handling to optimized caching mechanisms, you'll notice a significant improvement in overall performance.
              </p>
            </div>

            {{-- SECTION 2 --}}
            <div class="content-section-block mb-4">
              <h2 class="h5 fw-bold text-dark section-heading-accent mb-2">
                2. Modern PHP Support
              </h2>
              <p>
                With full support for the latest PHP 8.3+ features, Laravel 12 allows you to write cleaner, more expressive code. This includes improvements in type safety, readonly classes, and enhanced enums.
              </p>
            </div>

            {{-- SECTION 3 --}}
            <div class="content-section-block mb-4">
              <h2 class="h5 fw-bold text-dark section-heading-accent mb-2">
                3. Enhanced Developer Experience
              </h2>
              <p>
                Laravel 12 comes with new Artisan commands, better error reporting, and improved debugging tools. These enhancements make development smoother and more enjoyable.
              </p>
            </div>

            {{-- SECTION 4 --}}
            <div class="content-section-block mb-4">
              <h2 class="h5 fw-bold text-dark section-heading-accent mb-2">
                4. Security Improvements
              </h2>
              <p>
                Security remains a top priority. Laravel 12 includes stronger authentication features, improved protection against common vulnerabilities, and better session handling.
              </p>
            </div>

            {{-- SECTION 5 --}}
            <div class="content-section-block mb-4">
              <h2 class="h5 fw-bold text-dark section-heading-accent mb-2">
                5. Why It Matters
              </h2>
              <p>
                Whether you're building a startup MVP or a large-scale enterprise application, Laravel 12 gives you the tools and flexibility to build modern, scalable, and secure solutions. It's not just an update — it's a step towards a more powerful and developer-friendly ecosystem.
              </p>
            </div>

            {{-- QUOTE CALLOUT --}}
            <div class="blog-quote-callout p-4 rounded-4 my-4 position-relative">
              <div class="d-flex gap-3">
                <span class="quote-big-mark text-brand">“</span>
                <div class="flex-grow-1">
                  <p class="fst-italic text-dark fw-medium mb-2 fs-6">
                    "Laravel 12 is not just about new features, it's about giving developers the right tools to build the next generation of web applications."
                  </p>
                  <div class="text-end">
                    <strong class="text-dark small">— Abhishek Kapoor</strong>
                  </div>
                </div>
              </div>
            </div>

            {{-- TAGS ROW --}}
            <div class="blog-tags-wrap d-flex flex-wrap align-items-center gap-2 pt-3 border-top">
              <strong class="text-dark small me-1">Tags:</strong>
              <a href="#tag" class="tag-pill-btn">Laravel 12</a>
              <a href="#tag" class="tag-pill-btn">PHP</a>
              <a href="#tag" class="tag-pill-btn">Web Development</a>
              <a href="#tag" class="tag-pill-btn">Backend Development</a>
              <a href="#tag" class="tag-pill-btn">Framework</a>
              <a href="#tag" class="tag-pill-btn">2025</a>
            </div>

          </div>

          {{-- AUTHOR BIO CARD --}}
          <div class="author-bio-card p-4 rounded-4 border bg-white mb-5 shadow-sm">
            <div class="row align-items-center g-3">
              <div class="col-auto">
                <img class="rounded-circle object-fit-cover shadow-sm" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" width="70" height="70" alt="Abhishek Kapoor">
              </div>
              <div class="col">
                <h3 class="h5 fw-bold mb-1 text-dark">Abhishek Kapoor</h3>
                <p class="text-brand small fw-bold mb-2">Full Stack Developer</p>
                <p class="small text-secondary mb-3">
                  Abhishek is a Laravel developer with 5+ years of experience in building scalable web applications. He loves sharing knowledge about web development, PHP, and modern technologies.
                </p>
                <div class="d-flex gap-2">
                  <a href="https://linkedin.com" target="_blank" rel="noopener" class="author-social-icon" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                  <a href="https://twitter.com" target="_blank" rel="noopener" class="author-social-icon" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://github.com" target="_blank" rel="noopener" class="author-social-icon" aria-label="GitHub"><i class="bi bi-github"></i></a>
                  <a href="https://codexnindia.com" target="_blank" rel="noopener" class="author-social-icon" aria-label="Website"><i class="bi bi-globe"></i></a>
                </div>
              </div>
              <div class="col-12 col-md-auto text-md-end">
                <a href="{{ route('blog') }}" class="btn btn-outline-brand rounded-pill btn-sm px-3 py-2 fw-semibold">
                  View All Posts →
                </a>
              </div>
            </div>
          </div>

          {{-- COMMENTS SECTION --}}
          <div class="blog-comments-section pt-4 border-top">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <h3 class="h5 fw-bold mb-0 text-dark">2 Comments</h3>
              <div class="dropdown">
                <button class="btn btn-sm btn-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sort by: <span class="fw-semibold">Latest</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                  <li><a class="dropdown-item small" href="#sort">Latest</a></li>
                  <li><a class="dropdown-item small" href="#sort">Oldest</a></li>
                  <li><a class="dropdown-item small" href="#sort">Most Popular</a></li>
                </ul>
              </div>
            </div>

            {{-- COMMENT 1 --}}
            <div class="comment-item d-flex gap-3 pb-4 mb-4 border-bottom">
              <img class="rounded-circle object-fit-cover flex-shrink-0" src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=100&q=80" width="44" height="44" alt="Priya Sharma">
              <div class="flex-grow-1">
                <div class="d-flex align-items-center justify-content-between mb-1">
                  <div class="d-flex align-items-center gap-2">
                    <strong class="small fw-bold text-dark">Priya Sharma</strong>
                    <small class="text-secondary extra-small">2 days ago</small>
                  </div>
                  <button class="btn btn-sm text-secondary p-0" aria-label="Comment options"><i class="bi bi-three-dots"></i></button>
                </div>
                <p class="small text-secondary mb-2">
                  Great explanation! This really helps to understand the new features in Laravel 12. Looking forward to trying it.
                </p>
                <button class="btn btn-sm text-brand fw-bold p-0 extra-small">Reply</button>
              </div>
            </div>

            {{-- COMMENT 2 --}}
            <div class="comment-item d-flex gap-3 pb-4 mb-4">
              <img class="rounded-circle object-fit-cover flex-shrink-0" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" width="44" height="44" alt="Rohit Mehta">
              <div class="flex-grow-1">
                <div class="d-flex align-items-center justify-content-between mb-1">
                  <div class="d-flex align-items-center gap-2">
                    <strong class="small fw-bold text-dark">Rohit Mehta</strong>
                    <small class="text-secondary extra-small">1 day ago</small>
                  </div>
                  <button class="btn btn-sm text-secondary p-0" aria-label="Comment options"><i class="bi bi-three-dots"></i></button>
                </div>
                <p class="small text-secondary mb-2">
                  Very well written and easy to understand. Can you also share a tutorial on upgrading from Laravel 11 to 12?
                </p>
                <button class="btn btn-sm text-brand fw-bold p-0 extra-small">Reply</button>
              </div>
            </div>

          </div>

        </article>
      </div>

      {{-- SIDEBAR (RIGHT COLUMN) --}}
      <div class="col-lg-4">
        <aside class="blog-sidebar d-flex flex-column gap-4">
          
          {{-- SEARCH WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <h3 class="h6 fw-bold mb-3 sidebar-title-accent">Search Blog</h3>
            <div class="input-group">
              <input type="text" class="form-control blog-search-input" placeholder="Search articles, topics..." aria-label="Search articles">
              <button class="btn btn-brand" type="button"><i class="bi bi-search"></i></button>
            </div>
          </div>

          {{-- CATEGORIES WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="h6 fw-bold mb-0 sidebar-title-accent">Categories</h3>
              <a href="{{ route('blog') }}" class="text-brand small fw-semibold text-decoration-none">View All →</a>
            </div>
            <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-code-slash text-brand"></i> Web Development
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">24</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-bar-chart-fill text-brand"></i> Digital Marketing
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">18</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-search text-brand"></i> SEO
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">16</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-graph-up-arrow text-brand"></i> Business Growth
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">12</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-cpu text-brand"></i> Technology
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">20</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-lightbulb text-brand"></i> Tips & Guides
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">14</span>
              </li>
              <li class="d-flex align-items-center justify-content-between py-1">
                <a href="{{ route('blog') }}" class="text-secondary small d-flex align-items-center gap-2 text-decoration-none hover-brand">
                  <i class="bi bi-newspaper text-brand"></i> Company News
                </a>
                <span class="badge bg-light text-secondary rounded-pill fw-normal">10</span>
              </li>
            </ul>
          </div>

          {{-- RECENT POSTS WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <h3 class="h6 fw-bold mb-3 sidebar-title-accent">Recent Posts</h3>
            <div class="d-flex flex-column gap-3">
              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=150&q=80" alt="Recent 1">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">Laravel 12: What's New and Why It Matters in 2025</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Aug 25, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=150&q=80" alt="Recent 2">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">Google Ads vs Meta Ads: Which is Better?</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Aug 20, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1571721795195-a2ca2d3370a9?auto=format&fit=crop&w=150&q=80" alt="Recent 3">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">How to Rank Your Website on Google in 2025</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Aug 15, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=150&q=80" alt="Recent 4">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">Top 10 Features Every Business Website Must Have</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Aug 12, 2025</small>
                </div>
              </div>

              <div class="d-flex align-items-center gap-3">
                <img class="rounded-3 object-fit-cover" width="60" height="60" src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=150&q=80" alt="Recent 5">
                <div>
                  <strong class="d-block small fw-bold lh-sm text-dark mb-1">How AI is Changing the Future of Web Development</strong>
                  <small class="text-secondary extra-small"><i class="bi bi-clock me-1"></i> Aug 05, 2025</small>
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

          {{-- CTA PROMO CARD --}}
          <div class="sidebar-cta-card p-4 rounded-4 position-relative overflow-hidden text-white shadow">
            <div class="position-relative z-2">
              <h3 class="h5 fw-bold mb-2">
                Let's Build Something Amazing <span class="text-brand">Together</span>
              </h3>
              <p class="small text-white-50 mb-4">
                Turn your ideas into powerful digital solutions with CodexnIndia.
              </p>
              <a href="{{ route('home') }}#contact" class="btn btn-light rounded-pill btn-sm px-4 py-2 fw-bold text-dark shadow-sm">
                Get a Free Consultation →
              </a>
            </div>
          </div>

          {{-- POPULAR TAGS WIDGET --}}
          <div class="sidebar-widget bg-white border rounded-4 p-4 shadow-sm">
            <h3 class="h6 fw-bold mb-3 sidebar-title-accent">Popular Tags</h3>
            <div class="d-flex flex-wrap gap-2">
              <a href="#tag" class="tag-pill-btn">Laravel</a>
              <a href="#tag" class="tag-pill-btn">PHP</a>
              <a href="#tag" class="tag-pill-btn">SEO</a>
              <a href="#tag" class="tag-pill-btn">Google Ads</a>
              <a href="#tag" class="tag-pill-btn">Meta Ads</a>
              <a href="#tag" class="tag-pill-btn">Web Development</a>
              <a href="#tag" class="tag-pill-btn">Tips</a>
              <a href="#tag" class="tag-pill-btn">Business</a>
              <a href="#tag" class="tag-pill-btn">AI</a>
              <a href="#tag" class="tag-pill-btn">Digital Marketing</a>
            </div>
          </div>

        </aside>
      </div>

    </div>
  </div>
</div>

@endsection