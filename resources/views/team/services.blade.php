@extends('layouts.team', ['title' => 'Services Manager', 'description' => 'Manage public service cards and detail pages from the team dashboard.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div><h1>Services Manager</h1><p>Manage the service listing and the separate detail-page content.</p></div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.services.create') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">+ Add Service</a></div>
    </div>
    <div class="dashboard-stats-grid">
        <article><span class="dash-stat-icon"><i class="bi bi-list-task"></i></span><div><small>Total Services</small><b>06</b><em>↑ 12%</em><span>Available on the website</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-grid-3x3-gap-fill"></i></span><div><small>Service Types</small><b>24</b><em>↑ 8%</em><span>Detail-page offerings</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-question-circle-fill"></i></span><div><small>FAQs</small><b>24</b><em>Ready</em><span>Across all details</span></div><i class="bi bi-chat-left-text-fill"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-check-circle-fill"></i></span><div><small>Published</small><b>06</b><em>Active</em><span>Public service pages</span></div><i class="bi bi-eye-fill"></i></article>
    </div>
    <section class="dashboard-card mt-3">
        <div class="dash-card-head"><h2>Existing Services</h2><a href="#">View All →</a></div>
        <div class="table-responsive">
            <table class="dash-table">
                <thead><tr><th>Icon</th><th>Service Name</th><th>Slug</th><th>Card Description</th><th>Card Items</th><th>Detail Hero</th><th>Detail Types</th><th>Tools</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @foreach([
                        ['bi-window-stack','Website Development','website-development','Modern, responsive and high-performing websites that convert.','3','Powerful Websites for Your Business Growth','4','Laravel, PHP, JavaScript, Bootstrap, MySQL'],
                        ['bi-search','SEO','seo','Technical audits, content direction, local search, and reporting.','4','Get Found by the Right Customers','4','Search Console, Analytics, Keyword Research'],
                        ['bi-share-fill','SMO','smo','Social content planning, community growth, and creative campaigns.','4','Grow Your Social Presence','4','Meta Tools, Creative Strategy, Analytics'],
                        ['bi-google','Google Ads','google-ads','Search and display campaigns built around focused goals.','4','Turn Searches Into Qualified Leads','4','Google Ads, Conversion Tracking, Analytics'],
                        ['bi-palette2','Branding','branding','Naming, identity, guidelines, and launch assets.','4','Build a Brand People Remember','4','Figma, Adobe Tools, Brand Strategy'],
                        ['bi-boxes','Software Development','software-development','Custom dashboards, tools, automations, and scalable software.','4','Software That Makes Your Business Better','4','Laravel, PHP, JavaScript, APIs'],
                    ] as $service)
                        <tr><td><i class="bi {{ $service[0] }} text-brand fs-5"></i></td><td>{{ $service[1] }}</td><td>{{ $service[2] }}</td><td>{{ $service[3] }}</td><td>{{ $service[4] }}</td><td>{{ $service[5] }}</td><td>{{ $service[6] }}</td><td>{{ $service[7] }}</td><td><span class="dash-status published">Published</span></td><td class="text-nowrap"><a href="{{ route('team.services.create') }}" class="btn btn-sm btn-outline-secondary">Edit</a> <button type="button" class="btn btn-sm btn-outline-danger delete-service">Delete</button></td></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</section>
<script>document.addEventListener('DOMContentLoaded',function(){document.querySelectorAll('.delete-service').forEach(function(button){button.addEventListener('click',function(){if(confirm('Remove this service from the UI list?'))button.closest('tr').remove();});});});</script>
@endsection
