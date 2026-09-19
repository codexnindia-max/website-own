<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | CodexnIndia</title>
    <meta name="description" content="Choose your CodexnIndia workspace.">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
</head>
<body class="portal-login-body login-reference-body">
    <main class="login-reference-shell">
        <header class="login-reference-topbar">
            <a class="portal-choice-brand" href="{{ route('home') }}"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></a>
            <a class="login-reference-back" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i> Back to Website</a>
        </header>
        <section class="login-reference-panel">
            <aside class="login-reference-story">
                <div class="login-reference-story-content">
                    <p class="login-reference-kicker"><span></span> WELCOME TO CODEXNINDIA</p>
                    <h1>Let’s Build<br>Something<br>Amazing<br><em>Together</em></h1>
                    <p>Access your portal to manage projects, track progress, collaborate, and achieve more together.</p>
                    <div class="login-reference-benefits"><span><i class="bi bi-rocket-takeoff-fill"></i> Faster Collaboration</span><span><i class="bi bi-bar-chart-fill"></i> Real-Time Updates</span><span><i class="bi bi-people-fill"></i> Secure &amp; Private Access</span><span><i class="bi bi-shield-check"></i> All Your Projects in One Place</span></div>
                </div>
                <div class="login-reference-scribble">Ideas<br>Code<br><em>Growth</em><br>Together</div>
            </aside>
            <section class="login-reference-choices">
                <div class="login-reference-heading">
                    <p>WELCOME BACK</p>
                    <h2>How Would You Like to <em>Login?</em></h2>
                    <span>Choose your account type to access the right portal</span>
                </div>
                <div class="login-reference-card-grid">
                    <a class="login-reference-card login-reference-team-card" href="{{ route('login.team') }}">
                        <span class="login-reference-card-icon"><i class="bi bi-people-fill"></i></span>
                        <h3>Team Login</h3>
                        <p>For employees, team members<br>and internal staff</p>
                        <strong>Continue as Team <i class="bi bi-arrow-right"></i></strong>
                        <small>Access internal tools, projects, tasks<br>and team collaboration.</small>
                    </a>
                    <div class="login-reference-or">OR</div>
                    <a class="login-reference-card login-reference-client-card" href="{{ route('login.client') }}">
                        <span class="login-reference-card-icon"><i class="bi bi-briefcase-fill"></i></span>
                        <h3>Client Login</h3>
                        <p>For our clients and business<br>partners</p>
                        <strong>Continue as Client <i class="bi bi-arrow-right"></i></strong>
                        <small>Track your projects, view updates<br>and communicate with our team.</small>
                    </a>
                </div>
                <div class="login-reference-footer-note"><span></span> TECHNOLOGY FOR A BRIGHTER TOMORROW <span></span></div>
            </section>
        </section>
    </main>
</body>
</html>
