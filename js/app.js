document.addEventListener('DOMContentLoaded', () => {
	const chatPanel = document.getElementById('chatPanel');
	const chatButton = document.querySelector('[data-chat-toggle]');
	const chatClose = document.querySelector('[data-chat-close]');
	const chatName = document.getElementById('chatName');
	const chatForm = document.getElementById('chatForm');

	const setChatOpen = (isOpen) => {
		if (!chatPanel || !chatButton) return;

		if (isOpen) {
			chatPanel.inert = false;
			chatPanel.classList.add('is-open');
			chatPanel.setAttribute('aria-hidden', 'false');
			chatButton.setAttribute('aria-expanded', 'true');
			window.setTimeout(() => chatName?.focus(), 50);
			return;
		}

		if (chatPanel.contains(document.activeElement)) chatButton.focus();
		chatPanel.classList.remove('is-open');
		chatPanel.setAttribute('aria-hidden', 'true');
		chatPanel.inert = true;
		chatButton.setAttribute('aria-expanded', 'false');
	};

	const closeChat = () => {
		setChatOpen(false);
	};

	setChatOpen(false);
	chatButton?.addEventListener('click', () => {
		setChatOpen(!chatPanel?.classList.contains('is-open'));
	});
	chatClose?.addEventListener('click', closeChat);
	chatForm?.addEventListener('submit', (event) => {
		event.preventDefault();
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') closeChat();
	});

	document.querySelectorAll('[data-auto-carousel]').forEach((carousel) => {
		let resumeTimer = 0;
		let paused = false;

		const halfWidth = () => carousel.scrollWidth / 2;

		const tick = () => {
			if (!paused) {
				carousel.scrollLeft += 0.6;
				if (carousel.scrollLeft >= halfWidth()) carousel.scrollLeft -= halfWidth();
			}
			window.requestAnimationFrame(tick);
		};

		const pauseThenResume = () => {
			paused = true;
			window.clearTimeout(resumeTimer);
			resumeTimer = window.setTimeout(() => { paused = false; }, 2500);
		};

		carousel.addEventListener('mouseenter', () => { paused = true; });
		carousel.addEventListener('mouseleave', () => { window.clearTimeout(resumeTimer); paused = false; });
		carousel.addEventListener('touchstart', () => { paused = true; }, { passive: true });
		carousel.addEventListener('touchend', pauseThenResume);

		document.querySelectorAll(`[data-carousel-prev="${carousel.id}"]`).forEach((button) => {
			button.addEventListener('click', () => { carousel.scrollBy({ left: -300, behavior: 'smooth' }); pauseThenResume(); });
		});
		document.querySelectorAll(`[data-carousel-next="${carousel.id}"]`).forEach((button) => {
			button.addEventListener('click', () => { carousel.scrollBy({ left: 300, behavior: 'smooth' }); pauseThenResume(); });
		});

		window.requestAnimationFrame(tick);
	});

	// Blog category tabs and sidebar filter
	const blogCatButtons = document.querySelectorAll('[data-blog-category], [data-blog-filter]');
	const blogPostItems = document.querySelectorAll('.blog-post-item, .blog-post');
	const blogSideSearch = document.getElementById('blogSideSearch') || document.querySelector('[data-blog-search]');
	const blogSideCats = document.querySelectorAll('[data-side-cat]');

	const filterBlogPosts = (category, query = '') => {
		blogPostItems.forEach((post) => {
			const postCat = post.dataset.category;
			const postText = post.innerText.toLowerCase();
			const matchesCat = !category || category === 'all' || postCat === category;
			const matchesQuery = !query || postText.includes(query.toLowerCase());

			if (matchesCat && matchesQuery) {
				post.classList.remove('d-none');
			} else {
				post.classList.add('d-none');
			}
		});
	};

	let currentBlogCat = 'all';

	blogCatButtons.forEach((btn) => {
		btn.addEventListener('click', () => {
			currentBlogCat = btn.dataset.blogCategory || btn.dataset.blogFilter || 'all';
			blogCatButtons.forEach((b) => b.classList.remove('active'));
			btn.classList.add('active');
			filterBlogPosts(currentBlogCat, blogSideSearch?.value.trim());
		});
	});

	blogSideCats.forEach((link) => {
		link.addEventListener('click', (e) => {
			e.preventDefault();
			currentBlogCat = link.dataset.sideCat;
			blogCatButtons.forEach((b) => {
				const cat = b.dataset.blogCategory || b.dataset.blogFilter;
				b.classList.toggle('active', cat === currentBlogCat);
			});
			filterBlogPosts(currentBlogCat, blogSideSearch?.value.trim());
		});
	});

	blogSideSearch?.addEventListener('input', () => {
		filterBlogPosts(currentBlogCat, blogSideSearch.value.trim());
	});

	// Team members category filter
	const teamFilterButtons = document.querySelectorAll('[data-team-filter]');
	const teamMembers = document.querySelectorAll('.team-member-col');

	teamFilterButtons.forEach((btn) => {
		btn.addEventListener('click', () => {
			const category = btn.dataset.teamFilter;
			teamFilterButtons.forEach((b) => b.classList.remove('active'));
			btn.classList.add('active');

			teamMembers.forEach((member) => {
				if (category === 'all' || member.dataset.category === category) {
					member.classList.remove('d-none');
				} else {
					member.classList.add('d-none');
				}
			});
		});
	});

	const preloader = document.getElementById('sitePreloader');

	if (!preloader) {
		return;
	}

	document.body.classList.add('preloader-active');

	const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	const exitDelay = reducedMotion ? 350 : 2050;
	const exitDuration = reducedMotion ? 20 : 1500;

	window.setTimeout(() => {
		preloader.classList.add('is-exiting');
		document.body.classList.remove('preloader-active');
		document.body.classList.add('page-revealing');
	}, exitDelay);

	window.setTimeout(() => {
		preloader.classList.add('is-hidden');
	}, exitDelay + exitDuration);

	const statsSection = document.querySelector('.stats-section');
	const statNumbers = document.querySelectorAll('.stat-number');

	if (!statsSection || !statNumbers.length) {
		return;
	}

	const animateStats = () => {
		statNumbers.forEach((stat) => {
			const target = Number(stat.dataset.target);
			const duration = 1100;
			const startedAt = performance.now();

			const update = (now) => {
				const progress = Math.min((now - startedAt) / duration, 1);
				const easedProgress = 1 - Math.pow(1 - progress, 3);
				stat.textContent = `${Math.round(target * easedProgress)}+`;

				if (progress < 1) {
					window.requestAnimationFrame(update);
				}
			};

			window.requestAnimationFrame(update);
		});
	};

	const statsObserver = new IntersectionObserver((entries, observer) => {
		if (entries.some((entry) => entry.isIntersecting)) {
			animateStats();
			observer.disconnect();
		}
	}, { threshold: 0.35 });

	statsObserver.observe(statsSection);
});
