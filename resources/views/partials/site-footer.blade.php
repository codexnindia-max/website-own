<footer class="border-top">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-3">
                <a class="brand d-inline-flex align-items-center" href="{{ url('/') }}">
                    <img class="brand-logo" src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia">
                </a>
                <p class="small text-secondary mt-3">Technology for a brighter tomorrow.</p>
                <div class="d-flex gap-2">
                    <a class="social-link" href="#contact" aria-label="LinkedIn">in</a>
                    <a class="social-link" href="#contact" aria-label="Instagram">ig</a>
                    <a class="social-link" href="#contact" aria-label="Facebook">f</a>
                    <a class="social-link" href="#contact" aria-label="YouTube">▶</a>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <h3 class="h6 fw-bold">Portal Login</h3>
                <p class="small text-secondary">Choose your client or team workspace.</p>
                <a class="btn btn-brand btn-sm rounded-pill px-3" href="{{ route('login') }}">Choose Login <i class="bi bi-arrow-up-right ms-1"></i></a>
            </div>
            <div class="col-6 col-lg-2">
                <h3 class="h6 fw-bold">Our Services</h3>
                <a class="d-block small text-secondary mb-2" href="{{ route('service.detail', 'website-development') }}">Website Development</a>
                <a class="d-block small text-secondary mb-2" href="{{ route('service.detail', 'seo') }}">SEO</a>
                <a class="d-block small text-secondary mb-2" href="{{ route('service.detail', 'branding') }}">Branding</a>
                <a class="d-block small text-secondary mb-2" href="{{ route('service.detail', 'software-development') }}">Software Development</a>
            </div>
            <div class="col-lg-2">
                <h3 class="h6 fw-bold">Contact Us</h3>
                <p class="small text-secondary mb-2">Noida, India</p>
                <a class="d-block small text-secondary mb-2" href="mailto:info@codexnindia.com">info@codexnindia.com</a>
                <p class="small text-secondary">+91 98765 43210</p>
            </div>
            <div class="col-lg-3">
                <h3 class="h6 fw-bold">Newsletter</h3>
                <p class="small text-secondary">Get latest updates and tech insights.</p>
                <form class="input-group" id="newsletterSignupForm">
                    <input class="form-control" id="newsletterEmail" type="email" placeholder="Enter your email" aria-label="Email address" required>
                    <button class="btn btn-brand" type="submit">Subscribe</button>
                </form>
                <small class="text-success d-none" id="newsletterSignupMessage">You are subscribed. Thank you!</small>
            </div>
        </div>
    </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('newsletterSignupForm');
    if (!form) return;
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const input = document.getElementById('newsletterEmail');
        const email = input.value.trim().toLowerCase();
        let subscribers = [];
        try {
            const savedSubscribers = JSON.parse(localStorage.getItem('codexnindia_newsletter_subscribers') || '[]');
            subscribers = Array.isArray(savedSubscribers) ? savedSubscribers.filter(function (subscriber) { return subscriber && subscriber.email; }) : [];
        } catch (error) {
            localStorage.removeItem('codexnindia_newsletter_subscribers');
        }
        if (!subscribers.some(function (subscriber) { return subscriber.email === email; })) {
            subscribers.push({ email: email, date: new Date().toLocaleDateString('en-IN') });
            localStorage.setItem('codexnindia_newsletter_subscribers', JSON.stringify(subscribers));
        }
        input.value = '';
        document.getElementById('newsletterSignupMessage').classList.remove('d-none');
    });
});
</script>
