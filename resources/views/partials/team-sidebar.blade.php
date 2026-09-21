<aside class="dashboard-sidebar" id="dashboardSidebar">
    <button class="dashboard-sidebar-close" type="button" aria-label="Close menu" data-dashboard-menu-close><i class="bi bi-x-lg"></i></button>
    <a class="dashboard-brand" href="{{ route('home') }}"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></a>
    <nav class="dashboard-nav">
        <a class="{{ request()->routeIs('team.dashboard') ? 'active' : '' }}" href="{{ route('team.dashboard') }}"><i class="bi bi-house-door-fill"></i> Dashboard</a>
        <a class="{{ request()->routeIs('team.enquiries') ? 'active' : '' }}" href="{{ route('team.enquiries') }}"><i class="bi bi-inbox-fill"></i> Enquiries <b>12</b></a>
        <a class="{{ request()->routeIs('team.blog') ? 'active' : '' }}" href="{{ route('team.blog') }}"><i class="bi bi-file-earmark-text-fill"></i> Blog</a>
        <a class="{{ request()->routeIs('team.projects*') ? 'active' : '' }}" href="{{ route('team.projects') }}"><i class="bi bi-briefcase-fill"></i> Projects</a>
        <a class="{{ request()->routeIs('team.services*') ? 'active' : '' }}" href="{{ route('team.services') }}"><i class="bi bi-list-task"></i> Services</a>
        <a class="{{ request()->routeIs('team.members*') ? 'active' : '' }}" href="{{ route('team.members') }}"><i class="bi bi-people-fill"></i> Team</a>
        <a class="{{ request()->routeIs('team.clients*') ? 'active' : '' }}" href="{{ route('team.clients') }}"><i class="bi bi-person-vcard-fill"></i> Clients</a>
        <a class="{{ request()->routeIs('team.google-reviews') ? 'active' : '' }}" href="{{ route('team.google-reviews') }}"><i class="bi bi-google"></i> Google Reviews</a>
        <a class="{{ request()->routeIs('team.custom-software') ? 'active' : '' }}" href="{{ route('team.custom-software') }}"><i class="bi bi-boxes"></i> Custom Software</a>
        <a class="{{ request()->routeIs('team.newsletter') ? 'active' : '' }}" href="{{ route('team.newsletter') }}"><i class="bi bi-envelope-paper-fill"></i> Newsletter</a>
        <a class="{{ request()->routeIs('team.settings') ? 'active' : '' }}" href="{{ route('team.settings') }}"><i class="bi bi-gear-fill"></i> Settings</a>
    </nav>
    <div class="dashboard-sidebar-cta">Ideas<br>Code<br><em>Grow</em><br>Together <i class="bi bi-arrow-right-circle-fill"></i></div>
    <div class="dashboard-user-mini"><img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=100&q=80" alt="Abhishek Kapoor"><span><b>Abhishek Kapoor</b><small>Administrator</small></span></div>
    <a class="dashboard-logout" href="{{ route('login') }}"><i class="bi bi-box-arrow-right"></i> Logout</a>
</aside>
