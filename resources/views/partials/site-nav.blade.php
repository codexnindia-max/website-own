<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container py-1">
        <a class="navbar-brand brand d-flex align-items-center" href="{{ url('/') }}">
            <img class="brand-logo" src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-4">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('services') || request()->routeIs('service.detail') ? 'active' : '' }}" href="{{ route('services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">
                        <li><a class="dropdown-item rounded" href="{{ route('services') }}">All Services</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item rounded" href="{{ route('service.detail', 'website-development') }}">Website Development</a></li>
                        <li><a class="dropdown-item rounded" href="{{ route('service.detail', 'seo') }}">SEO</a></li>
                        <li><a class="dropdown-item rounded" href="{{ route('service.detail', 'smo') }}">SMO</a></li>
                        <li><a class="dropdown-item rounded" href="{{ route('service.detail', 'google-ads') }}">Google Ads</a></li>
                        <li><a class="dropdown-item rounded" href="{{ route('service.detail', 'branding') }}">Branding</a></li>
                        <li><a class="dropdown-item rounded" href="{{ route('service.detail', 'software-development') }}">Software Development</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects') || request()->routeIs('project.detail') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('team') || request()->routeIs('team.detail') ? 'active' : '' }}" href="{{ route('team') }}">Team</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0"><a class="btn btn-brand px-4" href="{{ route('login') }}">Login <span class="ms-1">→</span></a></li>
            </ul>
        </div>
    </div>
</nav>
