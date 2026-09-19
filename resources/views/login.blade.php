<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | CodexnIndia</title>
    <meta name="description" content="Choose your CodexnIndia workspace.">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
</head>
<body class="portal-login-body">
    <main class="login-page login-choice-page py-5">
        <div class="container position-relative">
            <div class="login-choice-orb login-choice-orb-one"></div>
            <div class="login-choice-orb login-choice-orb-two"></div>
            <a class="portal-choice-brand" href="{{ route('home') }}"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></a>
            <div class="text-center mb-5">
                <p class="login-choice-kicker-top"><span></span> CODEXNINDIA PORTAL</p>
                <h1 class="login-title">Choose your <span>workspace.</span></h1>
                <p class="mx-auto login-choice-intro">Select the secure portal you need to continue.</p>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-5">
                    <a class="login-choice-card" href="{{ route('login.client') }}">
                        <span class="login-choice-image login-choice-client-image"></span>
                        <span class="login-choice-shade"></span>
                        <span class="login-choice-content">
                            <span class="login-choice-icon"><i class="bi bi-person-workspace"></i></span>
                            <span class="login-choice-kicker">FOR CLIENTS</span>
                            <h2>Client Login</h2>
                            <p>Track your project, review updates, share feedback, and manage approvals.</p>
                            <span class="login-choice-link">Open client workspace <i class="bi bi-arrow-up-right"></i></span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-5">
                    <a class="login-choice-card login-choice-team" href="{{ route('login.team') }}">
                        <span class="login-choice-image login-choice-team-image"></span>
                        <span class="login-choice-shade"></span>
                        <span class="login-choice-content">
                            <span class="login-choice-icon"><i class="bi bi-people-fill"></i></span>
                            <span class="login-choice-kicker">FOR OUR TEAM</span>
                            <h2>Team Login</h2>
                            <p>Access internal tools, project operations, team communication, and resources.</p>
                            <span class="login-choice-link">Open team workspace <i class="bi bi-arrow-up-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
