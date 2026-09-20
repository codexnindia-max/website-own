@php
    $client = $client ?? 'dreamhome-real-estate';
    $clientNames = ['dreamhome-real-estate' => 'DreamHome Real Estate Pvt. Ltd.', 'nexus-property-group' => 'Nexus Property Group', 'medicore-health' => 'MediCore Health', 'northstar-growth' => 'Northstar Growth'];
    $clientName = $clientNames[$client] ?? $clientNames['dreamhome-real-estate'];
@endphp
@extends('layouts.team', ['title' => 'Add Client Work', 'description' => 'Set up a service, project, delivery plan, and payment flow for this client.'])
@section('content')
<section class="dashboard-content client-work-page">
    <div class="work-hero">
        <div class="work-hero-left">
            <span class="work-hero-tag"><i class="bi bi-briefcase-fill"></i> New Service Setup</span>
            <h1>Add Client Work</h1>
            <p>Set up the full service flow for <strong>{{ $clientName }}</strong> — scope, delivery, timeline, and payments in one place.</p>
        </div>
        <a href="{{ route('team.clients') }}" class="btn btn-light border work-back-btn"><i class="bi bi-arrow-left me-1"></i> Back to Clients</a>
    </div>

    <div class="work-layout">
        <form class="work-form">
            <div class="work-step">
                <div class="work-step-head"><span class="work-step-no">1</span><div><h2>Service &amp; Client Need</h2><p>What service is this, and what does the client actually want?</p></div></div>
                <div class="work-step-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Service</label>
                            <select id="workService" class="form-select"><option>Website Development</option><option>SEO</option><option>Digital Marketing</option><option>Software Development</option><option>Branding & Design</option><option>Google Ads</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Work Status</label>
                            <select class="form-select"><option>Planning</option><option>In Progress</option><option>On Hold</option><option>Completed</option></select>
                        </div>
                        <div class="col-md-6">
                            <div class="point-field">
                                <div class="point-field-head"><i class="bi bi-stars"></i><div><label class="form-label mb-0">What does the client want?</label><span class="small text-secondary">Add one point at a time</span></div></div>
                                <div id="clientNeeds" class="work-points"><div class="work-point-row"><input class="form-control" name="client_needs[0]" placeholder="More qualified property enquiries"><button type="button" class="btn btn-outline-danger remove-work-point" aria-label="Remove point"><i class="bi bi-trash3"></i></button></div></div>
                                <button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-work-point" data-target="clientNeeds" data-name="client_needs"><i class="bi bi-plus-lg me-1"></i> Add Point</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="point-field">
                                <div class="point-field-head"><i class="bi bi-clipboard-check"></i><div><label class="form-label mb-0">What are we handling?</label><span class="small text-secondary">Add the scope clearly</span></div></div>
                                <div id="workScope" class="work-points"><div class="work-point-row"><input class="form-control" name="work_scope[0]" placeholder="Responsive website and enquiry flow"><button type="button" class="btn btn-outline-danger remove-work-point" aria-label="Remove point"><i class="bi bi-trash3"></i></button></div></div>
                                <button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-work-point" data-target="workScope" data-name="work_scope"><i class="bi bi-plus-lg me-1"></i> Add Point</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-step">
                <div class="work-step-head"><span class="work-step-no">2</span><div><h2>Delivery Model &amp; Key Points</h2><p>How will the work be delivered, and who owns it?</p></div></div>
                <div class="work-step-body">
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label">Delivery Model</label><input class="form-control" value="Strategy → Design → Develop → Launch"></div>
                        <div class="col-md-6"><label class="form-label">Assigned Team</label><input class="form-control" placeholder="Abhishek Kapoor, Neha Singh"></div>
                        <div class="col-12">
                            <div class="point-field">
                                <div class="point-field-head"><i class="bi bi-list-check"></i><div><label class="form-label mb-0">Key Points</label><span class="small text-secondary">Add every deliverable separately</span></div></div>
                                <div id="keyPoints" class="work-points"><div class="work-point-row"><input class="form-control" name="key_points[0]" placeholder="Responsive website"><button type="button" class="btn btn-outline-danger remove-work-point" aria-label="Remove point"><i class="bi bi-trash3"></i></button></div></div>
                                <button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-work-point" data-target="keyPoints" data-name="key_points"><i class="bi bi-plus-lg me-1"></i> Add Point</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-step">
                <div class="work-step-head"><span class="work-step-no">3</span><div><h2>Timeline, Price &amp; Payment</h2><p>Dates, price, and the payment split are calculated automatically.</p></div></div>
                <div class="work-step-body">
                    <div class="row g-3">
                        <div class="col-md-4"><label class="form-label">Start Date</label><input class="form-control" type="date"></div>
                        <div class="col-md-4"><label class="form-label">End Date / Deadline</label><input class="form-control" type="date"></div>
                        <div class="col-md-4"><label class="form-label">Project Price (₹)</label><input id="workPrice" class="form-control" type="number" placeholder="80000"></div>
                        <div class="col-md-6"><label class="form-label">Invoice Number</label><input class="form-control" placeholder="INV-2025-001"></div>
                        <div class="col-md-6"><label class="form-label">Payment Status</label><select class="form-select"><option>Advance Pending</option><option>Advance Paid</option><option>Final Pending</option><option>Fully Paid</option></select></div>
                    </div>
                </div>
            </div>

            <div class="work-form-actions">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2">Save Draft</button>
                <button type="submit" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold"><i class="bi bi-check2-circle me-1"></i> Add Client Work</button>
            </div>
        </form>

        <aside class="work-summary">
            <div class="work-summary-card">
                <span class="work-summary-tag"><i class="bi bi-lightning-charge-fill"></i> Live Summary</span>
                <h3 id="summaryService">Website Development</h3>
                <p class="work-summary-client"><i class="bi bi-building"></i> {{ $clientName }}</p>

                <div class="work-summary-row"><span>Payment Terms</span><strong id="workTerms">50% advance / 50% final</strong></div>
                <div class="work-summary-price"><small>Project Price</small><strong id="summaryPrice">₹0</strong></div>

                <div class="work-summary-split">
                    <div><small>Advance</small><strong id="workAdvance">₹0</strong></div>
                    <div><small>Final</small><strong id="workFinal">₹0</strong></div>
                </div>

                <div id="workRule" class="client-payment-rule work-summary-rule"><i class="bi bi-info-circle-fill"></i> 50% advance and 50% after project completion.</div>

                <div class="work-summary-note"><i class="bi bi-shield-check"></i> Under ₹10,000 projects automatically switch to 60% upfront / 40% final.</div>
            </div>
        </aside>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.add-work-point').forEach(function (button) {
        button.addEventListener('click', function () {
            const target = document.getElementById(button.dataset.target);
            const index = target.querySelectorAll('.work-point-row').length;
            const row = document.createElement('div');
            row.className = 'work-point-row';
            row.innerHTML = '<input class="form-control" name="' + button.dataset.name + '[' + index + ']" placeholder="Add another point"><button type="button" class="btn btn-outline-danger remove-work-point" aria-label="Remove point"><i class="bi bi-trash3"></i></button>';
            target.appendChild(row);
        });
    });

    document.addEventListener('click', function (event) {
        const remove = event.target.closest('.remove-work-point');
        if (!remove) return;
        const row = remove.closest('.work-point-row');
        const parent = row.parentElement;
        row.remove();
        parent.querySelectorAll('.work-point-row input').forEach(function (input, index) {
            input.name = input.name.replace(/\[\d+\]$/, '[' + index + ']');
        });
    });

    const service = document.getElementById('workService');
    const summaryService = document.getElementById('summaryService');
    service.addEventListener('change', function () { summaryService.textContent = service.value; });

    const price = document.getElementById('workPrice');
    price.addEventListener('input', function () {
        const amount = Number(price.value || 0);
        const rate = amount > 0 && amount < 10000 ? 60 : 50;
        const advance = amount * rate / 100;
        document.getElementById('workTerms').textContent = rate + '% advance / ' + (100 - rate) + '% final';
        document.getElementById('summaryPrice').textContent = amount ? '₹' + amount.toLocaleString('en-IN') : '₹0';
        document.getElementById('workAdvance').textContent = amount ? '₹' + advance.toLocaleString('en-IN') : '₹0';
        document.getElementById('workFinal').textContent = amount ? '₹' + (amount - advance).toLocaleString('en-IN') : '₹0';
        document.getElementById('workRule').innerHTML = '<i class="bi bi-info-circle-fill"></i> ' + (rate === 60 ? 'Under ₹10,000: 60% upfront and 40% after completion.' : '50% advance and 50% after project completion.');
    });
});
</script>
@endsection
