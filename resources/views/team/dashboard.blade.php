<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Dashboard | CodexnIndia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
</head>
<body class="dashboard-body">
    <div class="dashboard-shell">
        <button class="dashboard-menu-backdrop" type="button" aria-label="Close menu" data-dashboard-menu-close></button>
        <aside class="dashboard-sidebar" id="dashboardSidebar">
            <button class="dashboard-sidebar-close" type="button" aria-label="Close menu" data-dashboard-menu-close><i class="bi bi-x-lg"></i></button>
            <a class="dashboard-brand" href="{{ route('home') }}"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></a>
            <nav class="dashboard-nav">
                <a class="active" href="{{ route('team.dashboard') }}"><i class="bi bi-house-door-fill"></i> Dashboard</a>
                <a href="#enquiries"><i class="bi bi-inbox-fill"></i> Enquiries <b>12</b></a>
                <a href="#projects"><i class="bi bi-briefcase-fill"></i> Projects</a>
                <a href="#services"><i class="bi bi-list-task"></i> Services</a>
                <a href="#blog"><i class="bi bi-file-earmark-text-fill"></i> Blog</a>
                <a href="#team"><i class="bi bi-people-fill"></i> Team</a>
                <a href="#clients"><i class="bi bi-person-vcard-fill"></i> Clients</a>
                <a href="#testimonials"><i class="bi bi-heart-fill"></i> Testimonials</a>
                <a href="#pages"><i class="bi bi-files"></i> Pages</a>
                <a href="#media"><i class="bi bi-images"></i> Media</a>
                <a href="#careers"><i class="bi bi-briefcase-fill"></i> Careers</a>
                <a href="#settings"><i class="bi bi-gear-fill"></i> Settings</a>
            </nav>
            <div class="dashboard-sidebar-cta">Ideas<br>Code<br><em>Grow</em><br>Together <i class="bi bi-arrow-right-circle-fill"></i></div>
            <div class="dashboard-user-mini"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="Abhishek Kapoor"><span><b>Abhishek Kapoor</b><small>Administrator</small></span></div>
            <a class="dashboard-logout" href="{{ route('login') }}"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </aside>

        <main class="dashboard-main">
            <header class="dashboard-topbar">
                <div class="dashboard-mobile-bar"><button class="dashboard-menu-toggle" type="button" aria-label="Open menu" aria-controls="dashboardSidebar" aria-expanded="false" data-dashboard-menu-open><i class="bi bi-list"></i></button><div class="dashboard-mobile-brand"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></div></div>
                <div class="dashboard-search"><i class="bi bi-search"></i><input type="search" placeholder="Search anything..."></div>
                <div class="dashboard-top-actions"><button aria-label="Notifications"><i class="bi bi-bell"></i><b></b></button><button aria-label="Fullscreen"><i class="bi bi-arrows-fullscreen"></i></button><div class="dashboard-profile"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="Abhishek Kapoor"><span><b>Abhishek Kapoor</b><small>Administrator</small></span><i class="bi bi-chevron-down"></i></div></div>
            </header>

            <section class="dashboard-content">
                <div class="dashboard-welcome-row">
                    <div><h1>Welcome Back <span>👋</span></h1><p>Here's what's happening with your business today.</p></div>
                    <div class="dashboard-scribble">Good Ideas<br><em>Great Websites</em></div>
                    <div class="dashboard-date"><i class="bi bi-calendar-week"></i><span><b>Sunday, 14 Sep 2025</b><small>Have a productive day!</small></span></div>
                </div>

                <div class="dashboard-stats-grid">
                    <article><span class="dash-stat-icon"><i class="bi bi-person-fill dash-person-icon"></i></span><div><small>Total Enquiries</small><b>248</b><em>↑ 12%</em><span>Compared to last month</span></div><i class="bi bi-graph-up-arrow"></i></article>
                    <article><span class="dash-stat-icon"><i class="bi bi-folder-fill"></i></span><div><small>Active Projects</small><b>18</b><em>↑ 8%</em><span>Compared to last month</span></div><i class="bi bi-graph-up-arrow"></i></article>
                    <article><span class="dash-stat-icon"><i class="bi bi-people-fill"></i></span><div><small>Total Clients</small><b>56</b><em>↑ 15%</em><span>Compared to last month</span></div><i class="bi bi-graph-up-arrow"></i></article>
                    <article><span class="dash-stat-icon"><i class="bi bi-file-earmark-text-fill"></i></span><div><small>Blog Views</small><b>12.4K</b><em>↑ 26%</em><span>Compared to last month</span></div><i class="bi bi-graph-up-arrow"></i></article>
                </div>

                <div class="row g-3 mt-1">
                    <div class="col-lg-5 dash-overview-col"><section class="dashboard-card h-100"><div class="dash-card-head"><h2>Enquiries Overview</h2><span><i></i> New Enquiries <i class="muted"></i> Converted</span></div><div class="dash-bars">@foreach ([25,35,28,45,30,41,38,52,34,47,60,36,29,49,31,45,40,52,34,44] as $bar)<b style="height: {{ $bar }}%"></b>@endforeach</div><div class="dash-months"><span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span>Sep</span></div></section></div>
                    <div class="col-lg-4 dash-source-col"><section class="dashboard-card h-100"><div class="dash-card-head"><h2>Enquiry Sources</h2></div><div class="dash-donut-wrap"><div class="dash-donut"><b>248<small>Total</small></b></div><ul><li><i></i>Website <b>40%</b></li><li><i></i>Google Ads <b>25%</b></li><li><i></i>Meta Ads <b>18%</b></li><li><i></i>Direct <b>10%</b></li><li><i></i>Others <b>7%</b></li></ul></div></section></div>
                    <div class="col-lg-3 dash-promo-col"><section class="dashboard-promo"><h2>Let's Build<br>Something Amazing<br><em>Together</em></h2><p>Manage content, track leads, and grow your business all in one place.</p><a href="#enquiries">Add New Enquiry <i class="bi bi-arrow-right"></i></a></section></div>
                </div>

                <div class="row g-3 mt-1">
                    <div class="col-lg-6 dash-enquiries-col"><section class="dashboard-card h-100"><div class="dash-card-head"><h2>Latest Enquiries</h2><a href="#enquiries">View All →</a></div><div class="table-responsive"><table class="dash-table"><thead><tr><th>#</th><th>Name</th><th>Service</th><th>Source</th><th>Date</th><th>Status</th></tr></thead><tbody>@foreach ([['Rohit Sharma','Website Development','Website','15 Sep 2025','New'],['Priya Verma','Digital Marketing','Google Ads','14 Sep 2025','Contacted'],['Aman Gupta','SEO Services','Website','13 Sep 2025','In Progress'],['Neha Singh','E-commerce','Meta Ads','12 Sep 2025','New'],['Vikram Yadav','Mobile App','Direct','12 Sep 2025','Converted']] as $index => $enquiry)<tr><td>{{ $index + 1 }}</td><td>{{ $enquiry[0] }}</td><td>{{ $enquiry[1] }}</td><td>{{ $enquiry[2] }}</td><td>{{ $enquiry[3] }}</td><td><span class="dash-status {{ Str::slug($enquiry[4]) }}">{{ $enquiry[4] }}</span></td></tr>@endforeach</tbody></table></div></section></div>
                    <div class="col-lg-4 dash-activity-col"><section class="dashboard-card h-100"><div class="dash-card-head"><h2>Recent Activities</h2><a href="#activity">View All →</a></div><div class="dash-activity">@foreach ([['bi-person-fill','New enquiry received','From Rohit Sharma','10 min ago'],['bi-folder-fill','Project status updated','Nexus Property','1 hour ago'],['bi-file-earmark-text-fill','New blog published','Laravel 12 Features','3 hours ago'],['bi-people-fill','Team member added','Neha Singh','5 hours ago'],['bi-calendar-event-fill','Client meeting scheduled','With ABC Real Estate','6 hours ago']] as $activity)<div><i class="bi {{ $activity[0] }}"></i><span><b>{{ $activity[1] }}</b><small>{{ $activity[2] }}</small></span><time>{{ $activity[3] }}</time></div>@endforeach</div></section></div>
                    <div class="col-lg-2 dash-quick-col"><section class="dashboard-card h-100"><div class="dash-card-head"><h2>Quick Links</h2></div><div class="dash-quick-links"><a href="#enquiries"><i class="bi bi-plus-square-fill"></i>Add New Enquiry</a><a href="#projects"><i class="bi bi-folder-fill"></i>Create New Project</a><a href="#blog"><i class="bi bi-file-earmark-text-fill"></i>Write a Blog Post</a><a href="#team"><i class="bi bi-people-fill"></i>Manage Team</a><a href="#settings"><i class="bi bi-gear-fill"></i>Settings</a></div></section></div>
                </div>

                <section class="dashboard-footer-banner"><div><small>Technology for a</small><h2>Brighter Tomorrow</h2><span>Manage. Create. Grow.</span></div><div class="dash-footer-stats"><span><i class="bi bi-layers-fill"></i><b>100+</b><small>Projects Delivered</small></span><span><i class="bi bi-people-fill"></i><b>50+</b><small>Happy Clients</small></span><span><i class="bi bi-star-fill"></i><b>5+</b><small>Years Experience</small></span><span><i class="bi bi-people-fill"></i><b>20+</b><small>Team Members</small></span></div></section>
            </section>
        </main>
        <nav class="dashboard-bottom-nav">
            <a class="active" href="{{ route('team.dashboard') }}"><i class="bi bi-house-door-fill"></i><span>Dashboard</span></a>
            <a href="#enquiries"><i class="bi bi-inbox-fill"></i><span>Enquiries</span></a>
            <a href="#projects"><i class="bi bi-briefcase-fill"></i><span>Projects</span></a>
            <a href="#blog"><i class="bi bi-file-earmark-text-fill"></i><span>Blog</span></a>
            <a href="{{ route('team.dashboard.menu') }}"><i class="bi bi-three-dots"></i><span>More</span></a>
        </nav>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('dashboardSidebar');
            const openButtons = document.querySelectorAll('[data-dashboard-menu-open]');
            const closeButtons = document.querySelectorAll('[data-dashboard-menu-close]');

            const setMenuOpen = (open) => {
                sidebar?.classList.toggle('is-open', open);
                document.body.classList.toggle('dashboard-menu-open', open);
                openButtons.forEach((button) => button.setAttribute('aria-expanded', String(open)));
            };

            openButtons.forEach((button) => button.addEventListener('click', () => setMenuOpen(true)));
            closeButtons.forEach((button) => button.addEventListener('click', () => setMenuOpen(false)));
            window.addEventListener('resize', () => { if (window.innerWidth > 575) setMenuOpen(false); });
        });
    </script>
</body>
</html>
