<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/projects', 'projects')->name('projects');
Route::view('/team', 'team.team')->name('team');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'login')->name('login');
Route::view('/login/client', 'login-client')->name('login.client');
Route::view('/login/team', 'login-team')->name('login.team');
Route::view('/team-dashboard', 'team.dashboard')->name('team.dashboard');
Route::view('/team-dashboard/menu', 'team.menu')->name('team.dashboard.menu');
Route::view('/team-dashboard/enquiries', 'team.enquiries')->name('team.enquiries');
Route::view('/team/blog', 'team.blog')->name('team.blog');
Route::view('/team/blog/create', 'team.blog-create')->name('team.blog.create');
Route::view('/team/projects', 'team.projects')->name('team.projects');
Route::view('/team/projects/create', 'team.project-create')->name('team.projects.create');
Route::view('/team/projects/nivara-finance', 'team.project-detail')->name('team.projects.detail');
Route::view('/team/members', 'team.members')->name('team.members');
Route::view('/team/members/create', 'team.member-create')->name('team.members.create');
Route::view('/team/services', 'team.services')->name('team.services');
Route::view('/team/services/create', 'team.service-create')->name('team.services.create');
Route::view('/team/clients', 'team.clients')->name('team.clients');
Route::view('/team/clients/create', 'team.client-create')->name('team.clients.create');
Route::get('/team/clients/{client}/edit', function (string $client) {
	abort_unless(in_array($client, ['dreamhome-real-estate', 'nexus-property-group', 'medicore-health', 'northstar-growth'], true), 404);
	return view('team.client-edit', ['client' => $client]);
})->name('team.clients.edit');
Route::get('/team/clients/{client}/work/create', function (string $client) {
	abort_unless(in_array($client, ['dreamhome-real-estate', 'nexus-property-group', 'medicore-health', 'northstar-growth'], true), 404);
	return view('team.client-work-create', ['client' => $client]);
})->name('team.clients.work.create');
Route::get('/team/clients/{client}', function (string $client) {
	abort_unless(in_array($client, ['dreamhome-real-estate', 'nexus-property-group', 'medicore-health', 'northstar-growth'], true), 404);
	return view('team.client-detail', ['client' => $client]);
})->name('team.clients.detail');

Route::get('/services/{service}', function (string $service) {
	$services = [
		'website-development' => ['Website Development', 'bi-window-stack', 'Conversion-focused websites, landing pages, portals, and responsive web apps.', 'Laravel, PHP, JavaScript, Bootstrap, MySQL'],
		'seo' => ['SEO', 'bi-search', 'Technical audits, content direction, local search, and reporting that turn visibility into qualified traffic.', 'Google Search Console, Analytics, keyword research, content strategy'],
		'smo' => ['SMO', 'bi-share-fill', 'Social content planning, community growth, creative campaigns, and monthly performance insights.', 'Content calendars, Meta tools, creative strategy, analytics'],
		'google-ads' => ['Google Ads', 'bi-google', 'Search and display campaigns built around clear goals, focused targeting, and measurable leads.', 'Google Ads, conversion tracking, landing page testing'],
		'branding' => ['Branding', 'bi-palette2', 'Naming, visual identity, brand guidelines, and launch assets that make your business memorable.', 'Brand strategy, identity systems, Figma, Adobe tools'],
		'software-development' => ['Software Development', 'bi-boxes', 'Custom dashboards, internal tools, automations, and scalable software for growing teams.', 'Laravel, PHP, JavaScript, APIs, MySQL'],
	];

	abort_unless(isset($services[$service]), 404);
	return view('service-detail', ['service' => $services[$service], 'slug' => $service]);
})->name('service.detail');

Route::get('/projects/{project}', function (string $project) {
	$projects = [
		'nivara-finance' => ['Nivara Finance Dashboard', 'Software', 'A secure finance dashboard for tracking invoices, cash flow, and team approvals.', 'Laravel, Bootstrap, JavaScript, MySQL', 'Discover → Plan → Design → Build → Review → Launch'],
		'luma-studio' => ['Luma Studio Website', 'Website', 'A bold portfolio experience that helps a creative studio turn visits into conversations.', 'HTML, Bootstrap, JavaScript, CMS integration', 'Research → Direction → Design → Development → QA → Launch'],
		'northstar-growth' => ['Northstar Growth Campaign', 'Marketing', 'A focused acquisition system combining SEO, landing pages, and measurable paid campaigns.', 'Google Ads, Analytics, SEO tools, landing page testing', 'Audit → Strategy → Campaign → Optimise → Report'],
		'medicore-portal' => ['MediCore Patient Portal', 'Software', 'A calmer digital journey for appointments, records, and patient communication.', 'Laravel, PHP, MySQL, REST API, Bootstrap', 'Map → Prototype → Integrate → Test → Rollout'],
	];

	abort_unless(isset($projects[$project]), 404);
	return view('project-detail', ['project' => $projects[$project], 'slug' => $project]);
})->name('project.detail');

Route::get('/team/{member}', function (string $member) {
	$members = [
		'abhishek-kapoor' => ['Abhishek Kapoor', 'Founder & Developer', 'Abhishek shapes product direction and turns ambitious ideas into practical digital systems.', 'Product strategy, Laravel, frontend architecture'],
		'priya-sharma' => ['Priya Sharma', 'UI/UX Designer', 'Priya creates clear, thoughtful interfaces that make complex products feel easy to use.', 'UX research, interaction design, Figma'],
		'rahul-verma' => ['Rahul Verma', 'Digital Marketing', 'Rahul connects strong products with the people who are already looking for them.', 'SEO, Google Ads, analytics, growth strategy'],
		'sneha-singh' => ['Sneha Singh', 'Content Writer', 'Sneha gives brands a useful, human voice across websites, campaigns, and product stories.', 'Content systems, editorial planning, brand voice'],
	];

	abort_unless(isset($members[$member]), 404);
	return view('team.detail', ['member' => $members[$member], 'slug' => $member]);
})->name('team.detail');

Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.detail');
