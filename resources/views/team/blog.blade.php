@extends('layouts.team', ['title' => 'Blog Manager', 'description' => 'Manage team blog content and posts from the backend dashboard.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div>
            <h1>Blog Manager</h1>
            <p>Manage your latest posts, updates, and content ideas.</p>
        </div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;">
            <a href="{{ route('team.blog.create') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">+ Add Blog</a>
        </div>
    </div>

    <div class="dashboard-stats-grid">
        <article>
            <span class="dash-stat-icon"><i class="bi bi-file-earmark-text-fill"></i></span>
            <div>
                <small>Total Posts</small>
                <b>24</b>
                <em>↑ 8%</em>
                <span>Compared to last month</span>
            </div>
            <i class="bi bi-graph-up-arrow"></i>
        </article>
        <article>
            <span class="dash-stat-icon"><i class="bi bi-eye-fill"></i></span>
            <div>
                <small>Views</small>
                <b>18.6K</b>
                <em>↑ 12%</em>
                <span>Across all articles</span>
            </div>
            <i class="bi bi-graph-up-arrow"></i>
        </article>
        <article>
            <span class="dash-stat-icon"><i class="bi bi-person-check-fill"></i></span>
            <div>
                <small>Authors</small>
                <b>08</b>
                <em>↑ 3%</em>
                <span>Team contributors</span>
            </div>
            <i class="bi bi-graph-up-arrow"></i>
        </article>
        <article>
            <span class="dash-stat-icon"><i class="bi bi-pencil-square"></i></span>
            <div>
                <small>Drafts</small>
                <b>04</b>
                <em>↓ 2%</em>
                <span>Need attention</span>
            </div>
            <i class="bi bi-graph-up-arrow"></i>
        </article>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-12">
            <section class="dashboard-card h-100">
                <div class="dash-card-head">
                    <h2>Recent Blog Posts</h2>
                    <a href="#">View All →</a>
                </div>

                <div class="table-responsive">
                    <table class="dash-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Subtitle</th>
                                <th>Hero Title</th>
                                <th>Hero Subtitle</th>
                                <th>Author</th>
                                <th>Role</th>
                                <th>Quote Author</th>
                                <th>Tags</th>
                                <th>Date</th>
                                <th>Read Time</th>
                                <th>Views</th>
                                <th>Image</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach([
                                ['Laravel 12: What\'s New', 'laravel-12-whats-new', 'Web Development', 'Explore the newest Laravel updates and performance improvements.', 'Laravel 12', 'Faster. Smarter. Better.', 'Abhishek Kapoor', 'Founder & Developer', 'Abhishek Kapoor', 'Laravel 12, PHP, Framework', '15 Sep 2025', '8 min read', '1.2K views', 'featured-laravel-12.jpg', 'Published'],
                                ['Google Ads vs Meta Ads', 'google-ads-vs-meta-ads', 'Digital Marketing', 'Compare the best channels for lead generation and ROI.', 'Google Ads', 'Meta Ads vs Search', 'Rahul Verma', 'Digital Marketing Lead', 'Rahul Verma', 'Google Ads, Meta Ads, Marketing', '13 Sep 2025', '6 min read', '950 views', 'google-vs-meta.jpg', 'Published'],
                                ['SEO Strategies 2025', 'seo-strategies-2025', 'SEO', 'Practical SEO tactics to improve rankings and visibility.', 'SEO', 'Rank Higher in 2025', 'Rahul Verma', 'SEO Specialist', 'Rahul Verma', 'SEO, Search Engine Optimization, Traffic', '11 Sep 2025', '7 min read', '1.5K views', 'seo-2025.jpg', 'Draft'],
                                ['Top 10 Website Features', 'modern-business-website-features', 'Web Development', 'The essentials that improve conversions and trust.', 'Modern Websites', 'Essential Features', 'Abhishek Kapoor', 'Full Stack Developer', 'Abhishek Kapoor', 'Web Design, UX, Conversions', '08 Sep 2025', '5 min read', '1.1K views', 'website-features.jpg', 'Published'],
                                ['How AI is Transforming IT', 'ai-transforming-it-industry', 'Technology', 'AI is reshaping software, support, and growth strategies.', 'AI & IT', 'The Next Shift', 'Rohit Mehta', 'Technical Lead', 'Abhishek Kapoor', 'AI, IT Industry, Technology', '06 Sep 2025', '8 min read', '2.1K views', 'ai-it.jpg', 'Scheduled'],
                            ] as $post)
                                <tr>
                                    <td>{{ $post[0] }}</td>
                                    <td>{{ $post[1] }}</td>
                                    <td>{{ $post[2] }}</td>
                                    <td>{{ $post[3] }}</td>
                                    <td>{{ $post[4] }}</td>
                                    <td>{{ $post[5] }}</td>
                                    <td>{{ $post[6] }}</td>
                                    <td>{{ $post[7] }}</td>
                                    <td>{{ $post[8] }}</td>
                                    <td>{{ $post[9] }}</td>
                                    <td>{{ $post[10] }}</td>
                                    <td>{{ $post[11] }}</td>
                                    <td>{{ $post[12] }}</td>
                                    <td>{{ $post[13] }}</td>
                                    <td><span class="dash-status {{ Str::slug($post[14]) }}">{{ $post[14] }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <section class="dashboard-footer-banner mt-3">
        <div>
            <small>Content for a</small>
            <h2>Smarter Tomorrow</h2>
            <span>Publish. Grow. Repeat.</span>
        </div>
        <div class="dash-footer-stats">
            <span><i class="bi bi-file-earmark-text-fill"></i><b>24</b><small>Published</small></span>
            <span><i class="bi bi-eye-fill"></i><b>18.6K</b><small>Views</small></span>
            <span><i class="bi bi-clock-history"></i><b>08</b><small>Drafts</small></span>
        </div>
    </section>
</section>
@endsection
