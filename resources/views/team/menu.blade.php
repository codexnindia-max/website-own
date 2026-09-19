<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Menu | CodexnIndia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
</head>
<body class="dashboard-menu-page">
    <main class="dashboard-menu-screen">
        <header class="dashboard-menu-head">
            <a href="{{ route('team.dashboard') }}" class="dashboard-menu-back"><i class="bi bi-arrow-left"></i></a>
            <img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia">
            <span></span>
        </header>
        <section class="dashboard-menu-profile">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&q=80" alt="Abhishek Kapoor">
            <div><h1>Abhishek Kapoor</h1><p>Administrator</p></div>
        </section>
        <nav class="dashboard-menu-list">
            <a class="active" href="{{ route('team.dashboard') }}"><i class="bi bi-house-door-fill"></i><span>Dashboard</span></a>
            <a href="#enquiries"><i class="bi bi-inbox-fill"></i><span>Enquiries</span><b>12</b></a>
            <a href="#projects"><i class="bi bi-briefcase-fill"></i><span>Projects</span></a>
            <a href="#services"><i class="bi bi-list-task"></i><span>Services</span></a>
            <a href="#blog"><i class="bi bi-file-earmark-text-fill"></i><span>Blog</span><em><i class="bi bi-chevron-down"></i></em></a>
            <a href="#team"><i class="bi bi-people-fill"></i><span>Team</span></a>
            <a href="#clients"><i class="bi bi-person-vcard-fill"></i><span>Clients</span></a>
            <a href="#testimonials"><i class="bi bi-patch-check-fill"></i><span>Testimonials</span></a>
            <a href="#pages"><i class="bi bi-files"></i><span>Pages</span><em><i class="bi bi-chevron-down"></i></em></a>
            <a href="#media"><i class="bi bi-images"></i><span>Media</span></a>
            <a href="#careers"><i class="bi bi-briefcase-fill"></i><span>Careers</span></a>
            <a href="#settings"><i class="bi bi-gear-fill"></i><span>Settings</span></a>
        </nav>
        <div class="dashboard-menu-idea">Ideas<br>Code<br><em>Growth</em><br>Together <i class="bi bi-arrow-right-circle-fill"></i></div>
        <footer class="dashboard-menu-footer"><span>v1.0</span><a href="{{ route('login') }}"><i class="bi bi-box-arrow-right"></i> Logout</a></footer>
    </main>
</body>
</html>
