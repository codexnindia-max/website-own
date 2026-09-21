<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client Login | CodexnIndia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
</head>
<body class="portal-login-body">
    <main class="portal-login-shell">
        <div class="row g-0 min-vh-100">
            <section class="col-lg-8 portal-visual portal-client-visual">
                <a class="portal-brand" href="{{ route('home') }}"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></a>
                <div class="portal-visual-content">
                    <p class="portal-kicker"><span></span> CLIENT WORKSPACE</p>
                    <h1>Your project.<br><em>Always in view.</em></h1>
                    <p>Follow progress, review updates, and keep every important conversation in one place.</p>
                    <div class="portal-preview-card"><div class="portal-preview-head"><span>Project progress</span><b>72%</b></div><div class="progress" style="height: 7px"><div class="progress-bar bg-brand" style="width: 72%"></div></div><div class="portal-preview-item"><i class="bi bi-check-circle-fill"></i><span>Homepage design approved</span><small>Done</small></div><div class="portal-preview-item"><i class="bi bi-clock-fill"></i><span>Development in progress</span><small>Active</small></div></div>
                </div>
                <div class="portal-scribble">Ideas<br>Share<br><em>Grow</em></div>
            </section>
            <section class="col-lg-4 portal-form-side">
                <div class="portal-form-wrap">
                    <a class="portal-back" href="{{ route('login') }}"><i class="bi bi-arrow-left"></i> Login choices</a>
                    <span class="portal-form-icon"><i class="bi bi-person-workspace"></i></span>
                    <p class="eyebrow mt-3 mb-1">CLIENT LOGIN</p><h2>Welcome back</h2><p class="portal-form-copy">Sign in to your private project workspace.</p>
                    <form onsubmit="return false;"><label for="clientEmail">Email address</label><input id="clientEmail" type="email" placeholder="you@example.com" required><label for="clientPassword" class="mt-3">Password</label><input id="clientPassword" type="password" placeholder="Enter your password" required><div class="d-flex align-items-center justify-content-between mt-3 mb-4 small"><label class="login-check"><input type="checkbox"> Remember me</label><a href="mailto:info@codexnindia.com" class="text-brand">Forgot password?</a></div><button class="btn btn-brand w-100 py-2" type="submit">Login <i class="bi bi-arrow-right ms-2"></i></button></form>
                    <p class="portal-help">Need access? <a href="{{ route('contact') }}">Contact our team</a></p>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
