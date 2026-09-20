@extends('layouts.team', ['title' => 'Company Settings', 'description' => 'Manage company information shown across the CodexnIndia website.'])
@section('content')
<section class="dashboard-content company-settings-page">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div>
            <a class="enquiries-back" href="{{ route('team.dashboard') }}"><i class="bi bi-arrow-left"></i> Dashboard</a>
            <h1>Company Settings</h1>
            <p>Manage the master company information used across the website interface.</p>
        </div>
        <span class="badge rounded-pill text-bg-light border px-3 py-2 settings-preview-badge">UI Preview Only</span>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-8">
            <section class="dashboard-card p-3 p-lg-4 h-100">
                <div class="dash-card-head"><div><h2>Master Company Information</h2><small class="text-secondary">Logo, contact details, address, and social media.</small></div><i class="bi bi-building text-brand fs-4"></i></div>
                <form id="companySettingsForm" class="row g-3 mt-1">
                    <div class="col-12"><label class="form-label" for="companyLogo">Company logo</label><input class="form-control" id="companyLogo" type="file" accept="image/*"><small class="text-secondary">Recommended: transparent PNG or SVG logo.</small></div>
                    <div class="col-md-6"><label class="form-label" for="companyName">Company name</label><input class="form-control" id="companyName" value="CodexnIndia"></div>
                    <div class="col-md-6"><label class="form-label" for="companyTagline">Tagline</label><input class="form-control" id="companyTagline" value="Technology for a brighter tomorrow."></div>
                    <div class="col-12"><label class="form-label" for="companyAddress">Address</label><textarea class="form-control" id="companyAddress" rows="2">Noida, Uttar Pradesh, India</textarea></div>
                    <div class="col-md-6"><label class="form-label" for="companyPhone">Phone number</label><input class="form-control" id="companyPhone" type="tel" value="+91 98765 43210"></div>
                    <div class="col-md-6"><label class="form-label" for="companyEmail">Email address</label><input class="form-control" id="companyEmail" type="email" value="info@codexnindia.com"></div>
                    <div class="col-12"><hr class="my-2"><h3 class="h6 fw-bold mb-0">Social media</h3></div>
                    <div class="col-md-6"><label class="form-label" for="companyLinkedin"><i class="bi bi-linkedin me-1"></i> LinkedIn</label><input class="form-control" id="companyLinkedin" value="https://linkedin.com/company/codexnindia"></div>
                    <div class="col-md-6"><label class="form-label" for="companyInstagram"><i class="bi bi-instagram me-1"></i> Instagram</label><input class="form-control" id="companyInstagram" value="https://instagram.com/codexnindia"></div>
                    <div class="col-md-6"><label class="form-label" for="companyFacebook"><i class="bi bi-facebook me-1"></i> Facebook</label><input class="form-control" id="companyFacebook" value="https://facebook.com/codexnindia"></div>
                    <div class="col-md-6"><label class="form-label" for="companyYoutube"><i class="bi bi-youtube me-1"></i> YouTube</label><input class="form-control" id="companyYoutube" value="https://youtube.com/@codexnindia"></div>
                    <div class="col-12 d-flex justify-content-end gap-2 mt-4"><button class="btn btn-outline-secondary rounded-pill px-4" type="button" id="resetCompanySettings">Reset</button><button class="btn btn-brand rounded-pill px-4" type="submit">Update UI Preview</button></div>
                </form>
                <div class="alert alert-success mt-3 d-none" id="companySettingsSuccess">Company information preview updated. No database changes were made.</div>
            </section>
        </div>
        <div class="col-lg-4">
            <section class="dashboard-card p-3 p-lg-4 company-settings-preview h-100">
                <div class="dash-card-head"><h2>Live Preview</h2><span class="text-secondary">Website identity</span></div>
                <div class="company-preview-logo"><img id="companyLogoPreview" src="{{ asset('images/Codexnindia-logo.png') }}" alt="CodexnIndia logo"></div>
                <h3 id="companyNamePreview" class="h5 fw-bold mt-4 mb-1">CodexnIndia</h3>
                <p id="companyTaglinePreview" class="small text-secondary">Technology for a brighter tomorrow.</p>
                <div class="company-preview-details small mt-4"><p><i class="bi bi-geo-alt-fill"></i><span id="companyAddressPreview">Noida, Uttar Pradesh, India</span></p><p><i class="bi bi-telephone-fill"></i><span id="companyPhonePreview">+91 98765 43210</span></p><p><i class="bi bi-envelope-fill"></i><span id="companyEmailPreview">info@codexnindia.com</span></p></div>
                <div class="d-flex gap-2 mt-4"><a id="linkedinPreview" href="#" aria-label="LinkedIn" class="company-social"><i class="bi bi-linkedin"></i></a><a id="instagramPreview" href="#" aria-label="Instagram" class="company-social"><i class="bi bi-instagram"></i></a><a id="facebookPreview" href="#" aria-label="Facebook" class="company-social"><i class="bi bi-facebook"></i></a><a id="youtubePreview" href="#" aria-label="YouTube" class="company-social"><i class="bi bi-youtube"></i></a></div>
            </section>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('companySettingsForm');
    const fields = { name: document.getElementById('companyName'), tagline: document.getElementById('companyTagline'), address: document.getElementById('companyAddress'), phone: document.getElementById('companyPhone'), email: document.getElementById('companyEmail') };
    const previews = { name: document.getElementById('companyNamePreview'), tagline: document.getElementById('companyTaglinePreview'), address: document.getElementById('companyAddressPreview'), phone: document.getElementById('companyPhonePreview'), email: document.getElementById('companyEmailPreview') };
    const socials = { linkedin: document.getElementById('companyLinkedin'), instagram: document.getElementById('companyInstagram'), facebook: document.getElementById('companyFacebook'), youtube: document.getElementById('companyYoutube') };
    const socialPreviews = { linkedin: document.getElementById('linkedinPreview'), instagram: document.getElementById('instagramPreview'), facebook: document.getElementById('facebookPreview'), youtube: document.getElementById('youtubePreview') };
    function updatePreview() { Object.keys(fields).forEach(function (key) { previews[key].textContent = fields[key].value; }); Object.keys(socials).forEach(function (key) { socialPreviews[key].href = socials[key].value || '#'; }); }
    Object.values(fields).concat(Object.values(socials)).forEach(function (field) { field.addEventListener('input', updatePreview); });
    document.getElementById('companyLogo').addEventListener('change', function () { const file = this.files && this.files[0]; if (!file) return; const reader = new FileReader(); reader.onload = function (event) { document.getElementById('companyLogoPreview').src = event.target.result; }; reader.readAsDataURL(file); });
    form.addEventListener('submit', function (event) { event.preventDefault(); updatePreview(); document.getElementById('companySettingsSuccess').classList.remove('d-none'); });
    document.getElementById('resetCompanySettings').addEventListener('click', function () { form.reset(); updatePreview(); document.getElementById('companyLogoPreview').src = '{{ asset('images/Codexnindia-logo.png') }}'; });
});
</script>
@endsection