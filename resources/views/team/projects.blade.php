@extends('layouts.team', ['title' => 'Projects Manager', 'description' => 'Manage project cards and project detail content from the team dashboard.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div>
            <h1>Projects Manager</h1>
            <p>Manage every project card and detail-page entry from one place.</p>
        </div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;">
            <a href="{{ route('team.projects.create') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">+ Add Project</a>
        </div>
    </div>

    <div class="dashboard-stats-grid">
        <article><span class="dash-stat-icon"><i class="bi bi-briefcase-fill"></i></span><div><small>Total Projects</small><b>08</b><em>↑ 12%</em><span>Shown on projects page</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-grid-3x3-gap-fill"></i></span><div><small>Categories</small><b>07</b><em>↑ 2%</em><span>Across all work</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-images"></i></span><div><small>Gallery Images</small><b>24</b><em>↑ 8%</em><span>Project screenshots</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-eye-fill"></i></span><div><small>Featured Projects</small><b>06</b><em>↑ 10%</em><span>Visible on the website</span></div><i class="bi bi-graph-up-arrow"></i></article>
    </div>

    <section class="dashboard-card mt-3">
        <div class="dash-card-head">
            <h2>All Project Entries</h2>
            <a href="#">View All →</a>
        </div>
        <div class="table-responsive">
            <table class="dash-table">
                <thead>
                    <tr>
                        <th>Title</th><th>Slug</th><th>Category</th><th>Card Image</th><th>Card Summary</th><th>Overview</th><th>Challenge</th><th>Solution</th><th>Features</th><th>Stats</th><th>Gallery</th><th>Technologies</th><th>Testimonial</th><th>Status</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody id="projectRows">
                    @foreach([
                        ['Luma Studio Website','luma-studio','Website','luma-studio.jpg','Brand platform and digital experience','A bold portfolio experience for a creative studio.','Build a clear online presence.','A modern portfolio with focused case studies.','Portfolio pages, CMS, responsive layout','2x enquiries | 48% more engagement','3 images','HTML, Bootstrap, JavaScript','Riya Kapoor - Creative Director','Published'],
                        ['Nivara Finance Dashboard','nivara-finance','Software','nivara-finance.jpg','Product design and development','A secure finance dashboard for tracking invoices and approvals.','Make finance operations easier to understand.','A clean dashboard with role-based workflows.','Invoices, approvals, reports, secure login','3x faster reporting | 60% time saved','3 images','Laravel, Bootstrap, JavaScript, MySQL','Amit Sharma - Founder','Published'],
                        ['Northstar Growth Campaign','northstar-growth','Marketing','northstar-growth.jpg','SEO and paid acquisition','A focused acquisition system combining SEO and paid campaigns.','Create a predictable lead pipeline.','A measurable campaign and landing page system.','SEO, landing pages, Google Ads, analytics','40% lower CPL | 2.4x qualified leads','3 images','Google Ads, Analytics, SEO','Priya Verma - Marketing Head','Published'],
                        ['MediCore Patient Portal','medicore-portal','Software','medicore-portal.jpg','A calmer patient journey','A patient portal for appointments, records, and communication.','Reduce friction in patient communication.','A responsive portal with clear patient flows.','Appointments, records, notifications, mobile UX','35% more bookings | 50% faster support','3 images','Laravel, PHP, MySQL, REST API','Dr. Neha Singh - Director','Draft'],
                    ] as $project)
                        <tr>
                            @foreach(array_slice($project, 0, 13) as $value)<td>{{ $value }}</td>@endforeach
                            <td><span class="dash-status {{ Str::slug($project[13]) }}">{{ $project[13] }}</span></td>
                            <td class="text-nowrap"><a href="{{ route('team.projects.create') }}" class="btn btn-sm btn-outline-secondary">Edit</a> <button type="button" class="btn btn-sm btn-outline-danger delete-project">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-project').forEach(function (button) {
            button.addEventListener('click', function () {
                if (window.confirm('Remove this project from the UI list?')) button.closest('tr').remove();
            });
        });
    });
</script>
@endsection
