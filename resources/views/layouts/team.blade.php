<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Team' }} | CodexnIndia</title>
    <meta name="description" content="{{ $description ?? 'CodexnIndia team workspace.' }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
    <link rel="stylesheet" href="{{ asset('css/team.css') }}?v={{ file_exists(public_path('css/team.css')) ? filemtime(public_path('css/team.css')) : time() }}">
    <script src="{{ asset('js/app.js') }}?v={{ file_exists(public_path('js/app.js')) ? filemtime(public_path('js/app.js')) : time() }}" defer></script>
</head>
<body class="dashboard-body">
    <div class="dashboard-shell">
        <button class="dashboard-menu-backdrop" type="button" aria-label="Close menu" data-dashboard-menu-close></button>
        @include('partials.team-sidebar')
        <main class="dashboard-main">
            @include('partials.team-topbar')
            @yield('content')
        </main>
    </div>
</body>
</html>
