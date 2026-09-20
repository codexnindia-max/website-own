@extends('layouts.team', ['title' => 'Edit Google Review', 'description' => 'Edit a Google Review UI entry for CodexnIndia.'])
@section('content')
<section class="dashboard-content google-review-edit-page">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div>
            <a class="enquiries-back" href="{{ route('team.google-reviews') }}"><i class="bi bi-arrow-left"></i> Google Reviews</a>
            <h1>Edit Google Review</h1>
            <p>Update the review preview before it appears on the public Google Reviews section.</p>
        </div>
        <span class="dash-status review-edit-status {{ $review[3] }}">{{ ucfirst($review[3]) }}</span>
    </div>

    <section class="dashboard-card mt-3 p-3 p-lg-4">
        <div class="dash-card-head"><div><h2>Review details</h2><small class="text-secondary">UI preview only. Changes are not saved to a database.</small></div><span class="google-g">G</span></div>
        <form id="editReviewForm" class="row g-3 mt-1">
            <div class="col-md-6"><label class="form-label" for="editReviewName">Customer name</label><input class="form-control" id="editReviewName" value="{{ $review[0] }}" required></div>
            <div class="col-md-6"><label class="form-label" for="editReviewRole">Role or company</label><input class="form-control" id="editReviewRole" value="{{ $review[1] }}" required></div>
            <div class="col-md-3"><label class="form-label" for="editReviewInitial">Avatar initial</label><input class="form-control" id="editReviewInitial" maxlength="1" value="{{ $review[2] }}"></div>
            <div class="col-md-3"><label class="form-label" for="editReviewStatus">Status</label><select class="form-select" id="editReviewStatus"><option value="published" {{ $review[3] === 'published' ? 'selected' : '' }}>Published</option><option value="draft" {{ $review[3] === 'draft' ? 'selected' : '' }}>Draft</option></select></div>
            <div class="col-12"><label class="form-label" for="editReviewText">Review text</label><textarea class="form-control" id="editReviewText" rows="5" required>{{ $review[4] }}</textarea></div>
            <div class="col-12 d-flex justify-content-end gap-2 mt-4"><a class="btn btn-outline-secondary rounded-pill px-4" href="{{ route('team.google-reviews') }}">Cancel</a><button class="btn btn-brand rounded-pill px-4" type="submit">Update UI Preview</button></div>
        </form>
        <div class="alert alert-success mt-3 d-none" id="editReviewSuccess">Review preview updated for this screen. No database changes were made.</div>
    </section>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('editReviewForm').addEventListener('submit', function (event) {
        event.preventDefault();
        document.getElementById('editReviewSuccess').classList.remove('d-none');
    });
});
</script>
@endsection