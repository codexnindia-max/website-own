<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team Login | CodexnIndia</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
</head>
<body class="portal-login-body">
	<main class="portal-login-shell">
		<div class="row g-0 min-vh-100">
			<section class="col-lg-8 portal-visual portal-team-visual">
				<a class="portal-brand" href="{{ route('home') }}"><img src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia"></a>
				<div class="portal-visual-content">
					<p class="portal-kicker"><span></span> TEAM WORKSPACE</p>
					<h1>Build better.<br><em>Together.</em></h1>
					<p>Bring projects, discussions, and delivery work together in a single focused workspace.</p>
					<div class="portal-team-stats"><div><i class="bi bi-kanban-fill"></i><b>24</b><small>Active tasks</small></div><div><i class="bi bi-people-fill"></i><b>10+</b><small>Team members</small></div><div><i class="bi bi-lightning-charge-fill"></i><b>100+</b><small>Projects delivered</small></div></div>
				</div>
				<div class="portal-scribble">Plan<br>Build<br><em>Deliver</em></div>
			</section>
			<section class="col-lg-4 portal-form-side">
				<div class="portal-form-wrap">
					<a class="portal-back" href="{{ route('login') }}"><i class="bi bi-arrow-left"></i> Login choices</a>
					<span class="portal-form-icon"><i class="bi bi-people-fill"></i></span>
					<p class="eyebrow mt-3 mb-1">TEAM LOGIN</p><h2>Welcome back</h2><p class="portal-form-copy">Sign in to your internal team workspace.</p>
					<form action="{{ route('team.dashboard') }}" method="get"><label for="teamEmail">Work email</label><input id="teamEmail" type="email" placeholder="name@codexnindia.com"><label for="teamPassword" class="mt-3">Password</label><input id="teamPassword" type="password" placeholder="Enter your password"><div class="d-flex align-items-center justify-content-between mt-3 mb-4 small"><label class="login-check"><input type="checkbox"> Remember me</label><a href="mailto:info@codexnindia.com" class="text-brand">Forgot password?</a></div><button class="btn btn-brand w-100 py-2" type="submit">Login <i class="bi bi-arrow-right ms-2"></i></button></form>
					<p class="portal-help">Having trouble? <a href="mailto:info@codexnindia.com">Contact support</a></p>
				</div>
			</section>
		</div>
	</main>
</body>
</html>
