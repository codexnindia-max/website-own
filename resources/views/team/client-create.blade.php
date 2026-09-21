@extends('layouts.team', ['title' => 'Add Client', 'description' => 'Add a client profile and relationship details.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between"><div><h1>Add New Client</h1><p>Create the client profile used by the backend overview and project workflow.</p></div><div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.clients') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a></div></div>
    <section class="dashboard-card mt-3 p-4"><form>
        <h2 class="h5 fw-bold mb-3">Client Information</h2><div class="row g-3">
            <div class="col-md-6"><label class="form-label">Company / Client Name</label><input class="form-control" placeholder="DreamHome Real Estate Pvt. Ltd."></div><div class="col-md-6"><label class="form-label">Industry</label><select class="form-select"><option>Real Estate</option><option>Healthcare</option><option>Finance</option><option>Marketing</option><option>Technology</option></select></div>
            <div class="col-md-6"><label class="form-label">Primary Contact</label><input class="form-control" placeholder="Rohit Sharma (Manager)"></div><div class="col-md-6"><label class="form-label">Email</label><input class="form-control" type="email" placeholder="rohit@dreamhome.in"></div>
            <div class="col-md-6"><label class="form-label">Phone</label><input class="form-control" placeholder="+91 98765 43210"></div><div class="col-md-6"><label class="form-label">Website</label><input class="form-control" placeholder="https://dreamhome.in"></div>
            <div class="col-12"><label class="form-label">Address</label><textarea class="form-control" rows="2" placeholder="Sector 62, Noida, Uttar Pradesh, India"></textarea></div><div class="col-12"><label class="form-label">Notes</label><textarea class="form-control" rows="4" placeholder="Long-term client notes, goals, preferences, and important context."></textarea></div>
            <div class="col-md-4"><label class="form-label">Status</label><select class="form-select"><option>Active</option><option>Onboarding</option><option>Paused</option><option>Archived</option></select></div><div class="col-md-4"><label class="form-label">Added Date</label><input class="form-control" type="date"></div><div class="col-md-4"><label class="form-label">Client Logo / Avatar</label><input class="form-control" type="file" accept="image/*"></div>
        </div>
        <hr class="my-4"><h2 class="h5 fw-bold mb-3">Initial Relationship Setup</h2><div class="row g-3"><div class="col-md-4"><label class="form-label">Account Manager</label><select class="form-select"><option>Abhishek Kapoor</option><option>Priya Verma</option><option>Neha Singh</option></select></div><div class="col-md-4"><label class="form-label">Default Project Status</label><select class="form-select"><option>Planning</option><option>In Progress</option><option>Not Started</option></select></div><div class="col-md-4"><label class="form-label">Billing Currency</label><select class="form-select"><option>INR (₹)</option><option>USD ($)</option></select></div></div>
        <hr class="my-4"><h2 class="h5 fw-bold mb-3">Project & Payment Setup</h2><div class="row g-3"><div class="col-md-6"><label class="form-label">Service / Project</label><input class="form-control" placeholder="Website Development"></div><div class="col-md-3"><label class="form-label">Project Price (₹)</label><input id="projectPrice" class="form-control" type="number" min="0" placeholder="80000"></div><div class="col-md-3"><label class="form-label">Payment Terms</label><input id="paymentTerms" class="form-control" value="50% advance / 50% final" readonly></div><div class="col-md-4"><label class="form-label">Start Date</label><input class="form-control" type="date"></div><div class="col-md-4"><label class="form-label">End Date / Deadline</label><input class="form-control" type="date"></div><div class="col-md-4"><label class="form-label">Invoice Number</label><input class="form-control" placeholder="INV-2025-001"></div><div class="col-md-6"><label class="form-label">Advance Payment Due</label><input id="advanceAmount" class="form-control" readonly placeholder="Calculated from project price"></div><div class="col-md-6"><label class="form-label">Final Payment Due</label><input id="finalAmount" class="form-control" readonly placeholder="Calculated from project price"></div><div class="col-12"><div id="paymentRule" class="client-payment-rule">Payment rule: 50% advance and 50% after project completion.</div></div></div>
        <div class="d-flex justify-content-end gap-2 mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2">Save Draft</button><button type="submit" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Add Client</button></div>
    </form></section>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const price = document.getElementById('projectPrice');
    const terms = document.getElementById('paymentTerms');
    const advance = document.getElementById('advanceAmount');
    const final = document.getElementById('finalAmount');
    const rule = document.getElementById('paymentRule');
    function updatePayment() {
        const amount = Number(price.value || 0);
        const advanceRate = amount > 0 && amount < 10000 ? 60 : 50;
        const advanceValue = amount * advanceRate / 100;
        terms.value = advanceRate + '% advance / ' + (100 - advanceRate) + '% final';
        advance.value = amount ? '₹' + advanceValue.toLocaleString('en-IN') : '';
        final.value = amount ? '₹' + (amount - advanceValue).toLocaleString('en-IN') : '';
        rule.textContent = amount > 0 && amount < 10000 ? 'Payment rule: projects below ₹10,000 require 60% upfront and 40% after completion.' : 'Payment rule: 50% advance and 50% after project completion.';
    }
    price.addEventListener('input', updatePayment);
});
</script>
@endsection
