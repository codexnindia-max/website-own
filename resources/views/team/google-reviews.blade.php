@extends('layouts.team', ['title' => 'Google Reviews', 'description' => 'Manage the Google Reviews UI for CodexnIndia.'])
@section('content')
<section class="dashboard-content google-reviews-page">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div>
            <a class="enquiries-back" href="{{ route('team.dashboard') }}"><i class="bi bi-arrow-left"></i> Dashboard</a>
            <h1>Google Reviews</h1>
            <p>Review the feedback shown on the public website and prepare new review entries.</p>
        </div>
    </div>

    <div class="dashboard-stats-grid">
        <article><span class="dash-stat-icon"><i class="bi bi-star-fill"></i></span><div><small>Google Rating</small><b>4.9</b><em>★★★★★</em><span>Average customer rating</span></div><i class="bi bi-google"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-chat-square-quote-fill"></i></span><div><small>Total Reviews</small><b>50+</b><em>↑ 12%</em><span>Reviews collected</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-check-circle-fill"></i></span><div><small>Published</small><b>42</b><em>Active</em><span>Visible on the website</span></div><i class="bi bi-eye-fill"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-pencil-square"></i></span><div><small>Pending Drafts</small><b>03</b><em>Needs review</em><span>Ready to prepare</span></div><i class="bi bi-clock-history"></i></article>
    </div>

    <section class="dashboard-card mt-3 p-3 p-lg-4">
        <div class="dash-card-head flex-wrap gap-3">
            <div><h2>Reviews on the website</h2><small class="text-secondary">These UI entries match the Google Reviews section on the home page.</small></div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <button class="btn btn-sm btn-brand rounded-pill review-filter active" type="button" data-review-filter="all">All</button>
                <button class="btn btn-sm btn-outline-secondary rounded-pill review-filter" type="button" data-review-filter="published">Published</button>
                <button class="btn btn-sm btn-outline-secondary rounded-pill review-filter" type="button" data-review-filter="draft">Drafts</button>
                <button class="btn btn-sm btn-brand rounded-pill fw-semibold" type="button" data-review-add-open><i class="bi bi-plus-lg me-1"></i> Add Review</button>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 mt-1" id="reviewCards">
            @foreach ([['Aarav Mehta', 'Business owner', 'A', 'published', 'CodexnIndia understood our idea quickly and turned it into a website that feels polished and easy to use.'], ['Priya Sharma', 'Founder, Nivara', 'P', 'published', 'Clear communication, reliable delivery, and a team that genuinely listens to feedback. Highly recommended.'], ['Rohan Kapoor', 'Marketing lead', 'R', 'published', 'Our search traffic and enquiries improved within months. The support after launch made a big difference.'], ['Meera Joshi', 'Founder, BrightPath', 'M', 'draft', 'A thoughtful team that brought structure and clarity to our next digital project.']] as $review)
                <div class="col review-item" data-review-status="{{ $review[3] }}">
                    <article class="review-card h-100 bg-white border rounded-3 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-3"><div class="d-flex align-items-center gap-2"><span class="review-avatar">{{ $review[2] }}</span><span><b class="d-block small">{{ $review[0] }}</b><small class="text-secondary">{{ $review[1] }}</small></span></div><span class="google-g">G</span></div>
                        <div class="d-flex align-items-center justify-content-between mb-2"><span class="stars">★★★★★</span><span class="dash-status {{ $review[3] }}">{{ ucfirst($review[3]) }}</span></div>
                        <p class="small text-secondary mb-0">“{{ $review[4] }}”</p>
                        <div class="d-flex justify-content-end gap-2 mt-3"><a class="btn btn-sm btn-outline-secondary rounded-pill" href="{{ route('team.google-reviews.edit', Str::slug($review[0])) }}">Edit UI</a><button class="btn btn-sm btn-outline-danger rounded-pill review-remove" type="button">Remove</button></div>
                    </article>
                </div>
            @endforeach
        </div>
        <div class="text-center text-secondary py-4 d-none" id="reviewEmpty">No reviews match this filter.</div>
    </section>

    <section class="dashboard-card mt-3 p-3 p-lg-4 d-none" id="reviewFormPanel">
        <div class="dash-card-head"><div><h2>Add Google Review</h2><small class="text-secondary">UI preview only. This form does not save to a database.</small></div><button class="btn btn-sm btn-light border rounded-pill" type="button" data-review-add-close>Close</button></div>
        <form id="reviewForm" class="row g-3 mt-1">
            <div class="col-md-6"><label class="form-label" for="reviewName">Customer name</label><input class="form-control" id="reviewName" required placeholder="Aarav Mehta"></div>
            <div class="col-md-6"><label class="form-label" for="reviewRole">Role or company</label><input class="form-control" id="reviewRole" required placeholder="Founder, Nivara"></div>
            <div class="col-md-3"><label class="form-label" for="reviewInitial">Avatar initial</label><input class="form-control" id="reviewInitial" maxlength="1" placeholder="A"></div>
            <div class="col-md-3"><label class="form-label" for="reviewStatus">Status</label><select class="form-select" id="reviewStatus"><option value="published">Published</option><option value="draft">Draft</option></select></div>
            <div class="col-12"><label class="form-label" for="reviewText">Review text</label><textarea class="form-control" id="reviewText" rows="4" required placeholder="Write the customer review..."></textarea></div>
            <div class="col-12 d-flex justify-content-end"><button class="btn btn-brand rounded-pill px-4" type="submit">Add to UI</button></div>
        </form>
    </section>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.getElementById('reviewCards');
    const empty = document.getElementById('reviewEmpty');
    const formPanel = document.getElementById('reviewFormPanel');
    const addButtons = document.querySelectorAll('[data-review-add-open]');
    const closeButton = document.querySelector('[data-review-add-close]');

    addButtons.forEach(function (button) { button.addEventListener('click', function () { formPanel.classList.remove('d-none'); formPanel.scrollIntoView({ behavior: 'smooth', block: 'start' }); }); });
    closeButton.addEventListener('click', function () { formPanel.classList.add('d-none'); });

    document.querySelectorAll('.review-filter').forEach(function (button) {
        button.addEventListener('click', function () {
            document.querySelectorAll('.review-filter').forEach(function (item) { item.classList.remove('active', 'btn-brand'); item.classList.add('btn-outline-secondary'); });
            button.classList.add('active', 'btn-brand'); button.classList.remove('btn-outline-secondary');
            const filter = button.dataset.reviewFilter; let visible = 0;
            cards.querySelectorAll('.review-item').forEach(function (item) { const show = filter === 'all' || item.dataset.reviewStatus === filter; item.classList.toggle('d-none', !show); if (show) visible++; });
            empty.classList.toggle('d-none', visible !== 0);
        });
    });

    document.getElementById('reviewForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('reviewName').value.trim();
        const role = document.getElementById('reviewRole').value.trim();
        const initial = (document.getElementById('reviewInitial').value.trim() || name.charAt(0)).toUpperCase();
        const status = document.getElementById('reviewStatus').value;
        const text = document.getElementById('reviewText').value.trim();
        const item = document.createElement('div'); item.className = 'col review-item'; item.dataset.reviewStatus = status;
        item.innerHTML = '<article class="review-card h-100 bg-white border rounded-3 p-4"><div class="d-flex align-items-center justify-content-between mb-3"><div class="d-flex align-items-center gap-2"><span class="review-avatar">' + initial + '</span><span><b class="d-block small">' + name + '</b><small class="text-secondary">' + role + '</small></span></div><span class="google-g">G</span></div><div class="d-flex align-items-center justify-content-between mb-2"><span class="stars">★★★★★</span><span class="dash-status ' + status + '">' + status.charAt(0).toUpperCase() + status.slice(1) + '</span></div><p class="small text-secondary mb-0">“' + text + '”</p><div class="d-flex justify-content-end mt-3"><button class="btn btn-sm btn-outline-danger rounded-pill review-remove" type="button">Remove</button></div></article>';
        cards.appendChild(item); item.querySelector('.review-remove').addEventListener('click', function () { item.remove(); });
        this.reset(); formPanel.classList.add('d-none');
    });
    document.querySelectorAll('.review-remove').forEach(function (button) { button.addEventListener('click', function () { button.closest('.review-item').remove(); }); });
});
</script>
@endsection