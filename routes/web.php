<?php

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

Route::get('/blog/{post}', function (string $post) {
	$posts = [
		'laravel-12-whats-new' => [
			'title' => "Laravel 12: What's New and Why It Matters in 2025",
			'category' => 'Web Development',
			'subtitle' => 'Explore the latest features, improvements, and performance updates in Laravel 12, and how it can help you build modern, scalable, and secure web applications faster.',
			'author' => 'Abhishek Kapoor',
			'authorRole' => 'Full Stack Developer',
			'date' => 'Aug 25, 2025',
			'readTime' => '8 min read',
			'views' => '1.2K views',
			'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=85',
		],
		'google-ads-vs-meta-ads' => [
			'title' => 'Google Ads vs Meta Ads: Which is Better for Your Business?',
			'category' => 'Digital Marketing',
			'subtitle' => 'Compare Google Ads and Meta Ads to find the best platform for your business goals, budget, and target audience.',
			'author' => 'Rahul Verma',
			'authorRole' => 'Digital Marketing Lead',
			'date' => 'Aug 20, 2025',
			'readTime' => '6 min read',
			'views' => '950 views',
			'image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1200&q=85',
		],
		'seo-strategies-2025' => [
			'title' => '10 Proven SEO Strategies to Rank Higher in 2025',
			'category' => 'SEO',
			'subtitle' => 'Learn the latest SEO strategies to improve your website ranking, get more organic traffic, and generate quality leads.',
			'author' => 'Rahul Verma',
			'authorRole' => 'SEO Specialist',
			'date' => 'Aug 18, 2025',
			'readTime' => '7 min read',
			'views' => '1.5K views',
			'image' => 'https://images.unsplash.com/photo-1571721795195-a2ca2d3370a9?auto=format&fit=crop&w=1200&q=85',
		],
		'modern-business-website-features' => [
			'title' => 'Top 10 Features Every Modern Business Website Must Have',
			'category' => 'Web Development',
			'subtitle' => 'Make your website more effective with these essential features that improve user experience and conversions.',
			'author' => 'Abhishek Kapoor',
			'authorRole' => 'Full Stack Developer',
			'date' => 'Aug 12, 2025',
			'readTime' => '5 min read',
			'views' => '1.1K views',
			'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=85',
		],
		'ai-transforming-it-industry' => [
			'title' => 'How AI is Transforming the IT Industry',
			'category' => 'Technology',
			'subtitle' => 'Explore how artificial intelligence is changing the way businesses build software, operate, and grow.',
			'author' => 'Abhishek Kapoor',
			'authorRole' => 'Technical Lead',
			'date' => 'Aug 05, 2025',
			'readTime' => '8 min read',
			'views' => '2.1K views',
			'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=1200&q=85',
		],
	];

	$postData = $posts[$post] ?? $posts['laravel-12-whats-new'];
	return view('blog-detail', ['post' => $postData, 'slug' => $post]);
})->name('blog.detail');
