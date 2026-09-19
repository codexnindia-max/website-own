<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodexnIndia | Technology for a Brighter Tomorrow</title>
    <meta name="description" content="CodexnIndia builds websites, software and digital growth solutions.">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ file_exists(public_path('css/app.css')) ? filemtime(public_path('css/app.css')) : time() }}">
    <script src="{{ asset('js/app.js') }}?v={{ file_exists(public_path('js/app.js')) ? filemtime(public_path('js/app.js')) : time() }}" defer></script>
</head>
<body id="top">
    <div class="site-preloader" id="sitePreloader" role="status" aria-label="Loading CodexnIndia">
        <div class="preloader-panel preloader-black" aria-hidden="true"></div>
        <div class="preloader-panel preloader-orange" aria-hidden="true"></div>
        <div class="preloader-logo-wrap">
            <img class="preloader-logo" src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia">
            <span class="preloader-fallback" aria-hidden="true">CN</span>
        </div>
    </div>
    @include('partials.site-nav')

    <main>
        <section class="hero-home-modern">
            <div class="container position-relative">
                <div class="hero-home-glow hero-home-glow-one"></div>
                <div class="hero-home-glow hero-home-glow-two"></div>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 hero-home-copy">
                        <p class="hero-home-kicker"><span></span> DIGITAL PARTNER FOR AMBITIOUS TEAMS</p>
                        <h1>Build boldly.<br><span>Grow brilliantly.</span></h1>
                        <p class="hero-home-lead">CodexnIndia combines sharp design, dependable technology, and growth strategy to turn your next big idea into a digital advantage.</p>
                        <div class="d-flex flex-wrap gap-3 mb-4">
                            <a class="btn btn-brand btn-lg rounded-pill px-4" href="{{ route('contact') }}">Start a Conversation <i class="bi bi-arrow-up-right ms-2"></i></a>
                            <a class="btn btn-light btn-lg rounded-pill px-4 hero-home-outline" href="#projects">Explore Our Work <i class="bi bi-arrow-down-right ms-2"></i></a>
                        </div>
                        <div class="hero-home-proof d-flex flex-wrap align-items-center gap-3">
                            <div class="hero-home-avatars"><span>A</span><span>P</span><span>R</span><span>+</span></div>
                            <div><strong>Trusted by growing teams</strong><small>100+ projects delivered with care</small></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-home-visual">
                            <div class="hero-home-frame"></div>
                            <div class="hero-home-scribble">Ideas<br><em>Code</em><br>Growth</div>
                            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&amp;fit=crop&amp;w=1100&amp;q=88" alt="CodexnIndia team planning a project">
                            <div class="hero-home-floating hero-home-floating-top"><i class="bi bi-stars"></i><span><b>Human-led</b><small>Technology partner</small></span></div>
                            <div class="hero-home-floating hero-home-floating-bottom"><strong>100+</strong><span>projects<br>delivered</span><i class="bi bi-arrow-up-right"></i></div>
                            <div class="hero-home-sticker">Make it<br><em>matter.</em></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-5"><div class="container">
            <div class="row align-items-end mb-4"><div class="col-lg-7"><p class="eyebrow mb-2">Our services</p><h2 class="h2 fw-bold">Everything You Need to <span class="text-brand">Grow Online</span></h2></div><div class="col-lg-5 text-lg-end text-secondary small">End-to-end digital solutions to help your business succeed. <a class="btn btn-sm btn-outline-secondary ms-2 mt-2 mt-lg-0" href="#contact">View All Services →</a></div></div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-6 g-3">
                @foreach ([['bi-window-stack','Website Development','Modern, responsive and high-performing websites.','₹7,000',false],['bi-search','SEO','Improve your search rank and get more organic traffic.','₹8,000',true],['bi-share-fill','SMO','Grow your brand presence on social media platforms.','₹10,000',true],['bi-google','Google Ads','Get targeted traffic and quality leads with Google Ads.','₹5,000',true],['bi-palette2','Branding','Build a strong and memorable brand identity.','₹5,000',false],['bi-boxes','Software Development','Custom software solutions for your business needs.','₹20,000',false]] as $service)
                    <div class="col"><article class="card h-100 border rounded-3 shadow-sm service-card"><div class="card-body d-flex flex-column"><i class="bi {{ $service[0] }} service-icon mb-3" aria-hidden="true"></i><h3 class="h6 fw-bold">{{ $service[1] }}</h3><p class="small text-secondary flex-grow-1">{{ $service[2] }}</p><strong class="small service-price">Starting at<br><span class="fs-6">{{ $service[3] }}</span>@if($service[4]) <small class="service-period">/ month</small>@endif</strong><a class="service-arrow" href="#contact" aria-label="Learn about {{ $service[1] }}">→</a></div></article></div>
                @endforeach
            </div>
        </div></section>

        <section id="about" class="py-5 bg-light"><div class="container"><div class="row align-items-center g-4">
            <div class="col-lg-4"><p class="eyebrow mb-2">About us</p><h2 class="h2 fw-bold">We Turn Ideas<br>Into <span class="text-brand">Digital Reality</span></h2><p class="text-secondary small">CodexnIndia is a results-driven IT company focused on web development, digital marketing and custom software solutions. Our mission is to help businesses grow with innovative and affordable technology.</p><a class="btn btn-outline-brand btn-sm" href="#contact">Learn More →</a></div>
            <div class="col-lg-5"><div class="office-photo position-relative rounded overflow-hidden"><img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&amp;fit=crop&amp;w=1000&amp;q=88" alt="Modern CodexnIndia office"><div class="office-logo position-absolute top-50 start-50 translate-middle text-center"><strong>Codexn<span>India</span></strong><small>IDEAS | CODE | GROW</small></div></div></div>
            <div class="col-lg-3"><div class="vstack gap-2"><article class="value-card p-3 bg-white border rounded"><strong class="text-brand fs-4">◎</strong><div><b class="d-block small">Our Mission</b><small class="text-secondary">Empower businesses with technology.</small></div></article><article class="value-card p-3 bg-white border rounded"><strong class="text-brand fs-4">◉</strong><div><b class="d-block small">Our Vision</b><small class="text-secondary">Be a trusted IT partner.</small></div></article><article class="value-card p-3 bg-white border rounded"><strong class="text-brand fs-4">♧</strong><div><b class="d-block small">Our Values</b><small class="text-secondary">Innovation, integrity, success.</small></div></article></div></div>
        </div></div></section>

        <section id="client-workspace" class="py-5"><div class="container"><div class="row align-items-center g-4 g-lg-5"><div class="col-lg-5"><p class="eyebrow mb-2">Our future USP</p><h2 class="h2 fw-bold">Your project.<br><span class="text-brand">Fully in control.</span></h2><p class="text-secondary">Soon, every CodexnIndia client will have a private workspace to chat with our team, follow progress, share ideas, review updates, and keep every project detail in one place.</p><div class="row row-cols-1 row-cols-sm-2 g-3 mt-2"><div class="col"><div class="d-flex gap-2"><i class="bi bi-chat-dots text-brand fs-5"></i><span><b class="d-block small">Direct chat</b><small class="text-secondary">Talk to your team anytime.</small></span></div></div><div class="col"><div class="d-flex gap-2"><i class="bi bi-kanban text-brand fs-5"></i><span><b class="d-block small">Live status</b><small class="text-secondary">See what is done and next.</small></span></div></div><div class="col"><div class="d-flex gap-2"><i class="bi bi-journal-text text-brand fs-5"></i><span><b class="d-block small">Shared notes</b><small class="text-secondary">Keep ideas and decisions clear.</small></span></div></div><div class="col"><div class="d-flex gap-2"><i class="bi bi-shield-check text-brand fs-5"></i><span><b class="d-block small">Your control</b><small class="text-secondary">Review, update, and approve.</small></span></div></div></div></div><div class="col-lg-7"><div class="workspace-preview border rounded-4 shadow-sm overflow-hidden"><div class="workspace-topbar d-flex align-items-center justify-content-between px-3 py-2"><span class="small fw-bold">CodexnIndia / Project workspace</span><span class="workspace-badge">Coming soon</span></div><div class="row g-0"><div class="col-md-7 p-3 bg-white"><div class="d-flex justify-content-between mb-3"><div><small class="text-secondary">Current project</small><h3 class="h6 fw-bold mb-0">Nivara website redesign</h3></div><span class="text-brand fw-bold">72%</span></div><div class="progress mb-3" style="height: 7px"><div class="progress-bar bg-brand" style="width: 72%"></div></div><div class="workspace-task"><i class="bi bi-check-circle-fill text-success"></i><span>Homepage design approved</span><small>Done</small></div><div class="workspace-task"><i class="bi bi-check-circle-fill text-success"></i><span>Mobile responsive layout</span><small>Done</small></div><div class="workspace-task"><i class="bi bi-clock text-brand"></i><span>Development in progress</span><small>Active</small></div><div class="workspace-task"><i class="bi bi-circle text-secondary"></i><span>Final review and launch</span><small>Next</small></div></div><div class="col-md-5 workspace-chat p-3"><small class="text-secondary">Team chat</small><div class="chat-message mt-3">The new homepage flow is ready for your review.</div><div class="chat-message chat-message-client">Looks great. Add one more pricing note.</div><div class="workspace-note mt-3"><i class="bi bi-lightbulb text-brand"></i><span><b>Shared idea</b><small>Client suggestion added today.</small></span></div></div></div></div></div></div></section>

        <section id="reviews" class="py-5 bg-light"><div class="container"><div class="row align-items-end g-4 mb-4"><div class="col-lg-7"><p class="eyebrow mb-2">Google reviews</p><h2 class="h2 fw-bold">Loved by teams<br>building <span class="text-brand">what’s next.</span></h2></div><div class="col-lg-5 text-lg-end"><div class="review-summary d-inline-flex align-items-center gap-3 bg-white border rounded-3 px-3 py-2"><span class="google-g">G</span><span><strong class="d-block">4.9 <span class="stars">★★★★★</span></strong><small class="text-secondary">Based on 50+ Google reviews</small></span></div></div></div><div class="row row-cols-1 row-cols-md-3 g-3"><div class="col"><article class="review-card h-100 bg-white border rounded-3 p-4"><div class="d-flex align-items-center justify-content-between mb-3"><div class="d-flex align-items-center gap-2"><span class="review-avatar">A</span><span><b class="d-block small">Aarav Mehta</b><small class="text-secondary">Business owner</small></span></div><span class="google-g">G</span></div><div class="stars mb-2">★★★★★</div><p class="small text-secondary mb-0">“CodexnIndia understood our idea quickly and turned it into a website that feels polished and easy to use.”</p></article></div><div class="col"><article class="review-card h-100 bg-white border rounded-3 p-4"><div class="d-flex align-items-center justify-content-between mb-3"><div class="d-flex align-items-center gap-2"><span class="review-avatar avatar-orange">P</span><span><b class="d-block small">Priya Sharma</b><small class="text-secondary">Founder, Nivara</small></span></div><span class="google-g">G</span></div><div class="stars mb-2">★★★★★</div><p class="small text-secondary mb-0">“Clear communication, reliable delivery, and a team that genuinely listens to feedback. Highly recommended.”</p></article></div><div class="col"><article class="review-card h-100 bg-white border rounded-3 p-4"><div class="d-flex align-items-center justify-content-between mb-3"><div class="d-flex align-items-center gap-2"><span class="review-avatar avatar-dark">R</span><span><b class="d-block small">Rohan Kapoor</b><small class="text-secondary">Marketing lead</small></span></div><span class="google-g">G</span></div><div class="stars mb-2">★★★★★</div><p class="small text-secondary mb-0">“Our search traffic and enquiries improved within months. The support after launch made a big difference.”</p></article></div></div><div class="text-center mt-4"><a class="btn btn-outline-brand btn-sm" href="https://www.google.com/search?q=CodexnIndia" target="_blank" rel="noopener">See us on Google <i class="bi bi-arrow-up-right ms-1"></i></a></div></div></section>

        <section class="py-3 stats-section"><div class="container"><div class="row row-cols-2 row-cols-lg-4 border rounded-3 shadow-sm g-0 text-center"><div class="col stat-item"><strong class="stat-number" data-target="100">0+</strong><small>Projects Completed</small></div><div class="col stat-item"><strong class="stat-number" data-target="50">0+</strong><small>Happy Clients</small></div><div class="col stat-item"><strong class="stat-number" data-target="5">0+</strong><small>Years Experience</small></div><div class="col stat-item"><strong class="stat-number" data-target="6">0+</strong><small>Services</small></div></div></div></section>

        <section id="projects" class="py-5"><div class="container"><div class="d-flex justify-content-between align-items-end mb-4"><div><p class="eyebrow mb-2">Featured projects</p><h2 class="h2 fw-bold">Our <span class="text-brand">Latest Work</span></h2></div><a class="btn btn-outline-secondary btn-sm" href="#contact">View All Projects →</a></div><div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-3">
            @foreach ([['1560518883-ce09059eeffa','Real Estate Website','Website'],['1556742049-0cfed4f6a45d','Fashion Store','Website'],['1504674900247-0877df9cc836','Restaurant Website','Website'],['1586528116311-ad8dd3c8310d','Logistics Platform','Software'],['1576091160399-112ba8d25d1d','Healthcare Portal','Marketing']] as $project)
                <div class="col"><article class="card h-100 border rounded-3 overflow-hidden"><img class="project-image" src="https://images.unsplash.com/photo-{{ $project[0] }}?auto=format&amp;fit=crop&amp;w=700&amp;q=85" alt="{{ $project[1] }}"><div class="card-body p-2 text-center"><b class="small d-block">{{ $project[1] }}</b><small class="text-secondary">{{ $project[2] }}</small></div></article></div>
            @endforeach
        </div></div></section>

        <section class="py-5 bg-light"><div class="container"><div class="row g-5 align-items-stretch"><div id="team" class="col-lg-7 d-flex flex-column"><div class="d-flex justify-content-between align-items-end mb-4"><div><p class="eyebrow mb-2">Meet our team</p><h2 class="h3 fw-bold">Talented People Behind <span class="text-brand">CodexnIndia</span></h2></div><a class="btn btn-outline-secondary btn-sm" href="#contact">View All Team →</a></div><div class="row row-cols-2 row-cols-md-4 g-3 text-center flex-grow-1 align-content-center">
            @foreach ([['1500648767791-00dcc994a43e','Abhishek Kapoor','Founder & Developer'],['1573496359142-b8d87734a5a2','Priya Sharma','UI/UX Designer'],['1560250097-0b93528c311a','Rahul Verma','Digital Marketing'],['1580489944761-15a19d654956','Sneha Singh','Content Writer']] as $member)
                <div class="col"><img class="team-image rounded-circle mb-2" src="https://images.unsplash.com/photo-{{ $member[0] }}?auto=format&amp;fit=crop&amp;w=300&amp;q=80" alt="{{ $member[1] }}"><b class="d-block small">{{ $member[1] }}</b><small class="text-secondary">{{ $member[2] }}</small></div>
            @endforeach
        </div></div><div id="blog" class="col-lg-5 d-flex flex-column"><div class="d-flex justify-content-between align-items-end mb-4"><div><p class="eyebrow mb-2">Latest blogs</p><h2 class="h3 fw-bold">Insights &amp; <span class="text-brand">Updates</span></h2></div><a class="btn btn-outline-secondary btn-sm" href="#contact">View All →</a></div><div class="row row-cols-3 g-2 flex-grow-1 align-content-center">
            @foreach ([['1558655146-9f40138edfeb','Top 10 Web Development Trends','What modern teams should know before their next build.'],['1522542550221-31fd19575a2d','How SEO Can Grow Your Business','Simple ways to earn visibility and qualified traffic.'],['1611162617474-5b21e879e113','Social Media Marketing Tips','Practical ideas for a consistent social presence.']] as $post)
                <article class="col"><img class="blog-image rounded mb-2" src="https://images.unsplash.com/photo-{{ $post[0] }}?auto=format&amp;fit=crop&amp;w=300&amp;q=80" alt="{{ $post[1] }}"><b class="small lh-sm">{{ $post[1] }}</b><small class="d-block text-secondary">Sep 2025</small></article>
            @endforeach
        </div></div></div></div></section>

        <section id="contact" class="py-4"><div class="container"><div class="cta rounded-2 text-white p-4 p-lg-5"><div class="row align-items-center g-4"><div class="col-lg-7"><p class="eyebrow text-warning mb-2">Let's work together</p><h2 class="h2 fw-bold">Ready to Start Your <span class="text-brand">Project?</span></h2><p class="mb-0">Get in touch with us today and turn your ideas into reality.</p></div><div class="col-lg-5 text-lg-end"><a class="btn btn-light" href="mailto:info@codexnindia.com">Get a Free Consultation →</a></div></div></div></div></section>
    </main>

    @include('partials.site-footer')
    <div class="contact-dock" aria-label="Contact CodexnIndia">
        <a class="dock-button" href="tel:+919876543210" aria-label="Call CodexnIndia"><i class="bi bi-telephone-fill"></i><span>Call</span></a>
        <a class="dock-button" href="mailto:info@codexnindia.com" aria-label="Email CodexnIndia"><i class="bi bi-envelope-fill"></i><span>Email</span></a>
        <button class="dock-button dock-chat-button" data-chat-toggle type="button" aria-label="Open chat" aria-controls="chatPanel" aria-expanded="false"><i class="bi bi-chat-dots-fill"></i><span>Chat</span></button>
    </div>

    <aside class="chat-panel" id="chatPanel" role="dialog" aria-modal="false" aria-labelledby="chatTitle" aria-hidden="true" inert>
        <div class="chat-panel-header"><div><strong id="chatTitle">Chat with CodexnIndia</strong><small>Usually replies within a few hours</small></div><button class="chat-close" data-chat-close type="button" aria-label="Close chat">&times;</button></div>
        <div class="chat-panel-body"><div class="chat-welcome">Hi there. Tell us a little about your project and our team will get back to you.</div><form class="chat-form" id="chatForm"><label class="visually-hidden" for="chatName">Your name</label><input id="chatName" type="text" placeholder="Your name" required><label class="visually-hidden" for="chatMessage">Your message</label><textarea id="chatMessage" rows="3" placeholder="How can we help?" required></textarea><button class="btn btn-brand w-100" type="submit">Send message <i class="bi bi-arrow-up-right ms-1"></i></button></form></div>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
