@extends('layouts.team', ['title' => 'Newsletter Subscribers', 'description' => 'View newsletter subscribers from the team dashboard.'])
@section('content')
<section class="dashboard-content newsletter-page">
    <div class="dashboard-welcome-row newsletter-welcome-row align-items-center justify-content-between">
        <div>
            <a class="enquiries-back" href="{{ route('team.dashboard') }}"><i class="bi bi-arrow-left"></i> Dashboard</a>
            <h1>Newsletter Subscribers</h1>
            <p>View the email addresses added through the website newsletter form.</p>
        </div>
        <span class="badge rounded-pill text-bg-light border px-3 py-2 newsletter-ui-badge">UI Preview Only</span>
    </div>

    <div class="dashboard-stats-grid">
        <article><span class="dash-stat-icon"><i class="bi bi-envelope-paper-fill"></i></span><div><small>Total Subscribers</small><b id="subscriberCount">05</b><em>Active</em><span>Website newsletter list</span></div><i class="bi bi-people-fill"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-calendar-check-fill"></i></span><div><small>New This Month</small><b id="monthlySubscriberCount">03</b><em>↑ 18%</em><span>Recent signups</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-bar-chart-fill"></i></span><div><small>Open Rate</small><b>68%</b><em>↑ 6%</em><span>Last campaign</span></div><i class="bi bi-envelope-open-fill"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-shield-check-fill"></i></span><div><small>List Health</small><b>Good</b><em>Verified</em><span>Demo status</span></div><i class="bi bi-check-circle-fill"></i></article>
    </div>

    <section class="dashboard-card mt-3 p-3 p-lg-4">
        <div class="dash-card-head newsletter-card-head flex-wrap gap-3"><div><h2>Subscriber List</h2><small class="text-secondary">Emails added from the public website appear here in this browser.</small></div><div class="newsletter-tools d-flex gap-2"><input id="subscriberSearch" class="form-control form-control-sm" type="search" placeholder="Search email..." aria-label="Search subscribers"><button class="btn btn-sm btn-outline-danger rounded-pill" id="clearSubscribers" type="button">Clear UI List</button></div></div>
        <div class="table-responsive"><table class="dash-table newsletter-table"><thead><tr><th>#</th><th>Email Address</th><th>Source</th><th>Added</th><th>Status</th><th>Action</th></tr></thead><tbody id="subscriberRows"></tbody></table></div>
        <div class="text-center text-secondary py-4 d-none" id="subscriberEmpty">No subscribers found.</div>
    </section>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const key = 'codexnindia_newsletter_subscribers';
    const demoSubscribers = [{ email: 'aarav@example.com', date: '15 Sep 2025' }, { email: 'priya@example.com', date: '14 Sep 2025' }, { email: 'rohan@example.com', date: '12 Sep 2025' }, { email: 'meera@example.com', date: '10 Sep 2025' }, { email: 'hello@brightpath.in', date: '08 Sep 2025' }];
    const rows = document.getElementById('subscriberRows');
    const empty = document.getElementById('subscriberEmpty');
    let stored = [];
    try {
        const savedSubscribers = JSON.parse(localStorage.getItem(key) || '[]');
        stored = Array.isArray(savedSubscribers) ? savedSubscribers.filter(function (subscriber) { return subscriber && subscriber.email; }) : [];
    } catch (error) {
        localStorage.removeItem(key);
    }
    const subscribers = demoSubscribers.concat(stored);
    function render(query) {
        rows.innerHTML = '';
        const filtered = subscribers.filter(function (subscriber) { return subscriber.email.toLowerCase().includes((query || '').toLowerCase()); });
        filtered.forEach(function (subscriber, index) {
            const row = document.createElement('tr');
            row.innerHTML = '<td>' + (index + 1) + '</td><td><strong></strong></td><td>Website Newsletter</td><td>' + subscriber.date + '</td><td><span class="dash-status converted">Subscribed</span></td><td><button class="btn btn-sm btn-outline-danger rounded-pill remove-subscriber" type="button">Remove</button></td>';
            row.querySelector('strong').textContent = subscriber.email;
            row.querySelector('.remove-subscriber').addEventListener('click', function () { row.remove(); });
            rows.appendChild(row);
        });
        empty.classList.toggle('d-none', filtered.length !== 0);
        document.getElementById('subscriberCount').textContent = String(subscribers.length).padStart(2, '0');
    }
    document.getElementById('subscriberSearch').addEventListener('input', function () { render(this.value); });
    document.getElementById('clearSubscribers').addEventListener('click', function () { localStorage.removeItem(key); while (rows.firstChild) rows.removeChild(rows.firstChild); subscribers.splice(demoSubscribers.length); render(''); });
    render('');
});
</script>
@endsection