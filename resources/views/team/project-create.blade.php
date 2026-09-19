@extends('layouts.team', ['title' => 'Add Project', 'description' => 'Add a complete project entry for the public projects and detail pages.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div><h1>Add New Project</h1><p>Add every field used by the Projects listing and project detail page.</p></div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.projects') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a></div>
    </div>

    <section class="dashboard-card mt-3 p-4">
        <form id="projectForm" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label">Project Title</label><input class="form-control" name="title" placeholder="Nivara Finance Dashboard"></div>
                <div class="col-md-6"><label class="form-label">Slug</label><input class="form-control" name="slug" placeholder="nivara-finance"></div>
                <div class="col-md-4"><label class="form-label">Category</label><select class="form-select" name="category"><option>Website</option><option>E-commerce</option><option>Mobile App</option><option>Software</option><option>Digital Marketing</option><option>Branding & Design</option><option>UI/UX Design</option></select></div>
                <div class="col-md-4"><label class="form-label">Status</label><select class="form-select" name="status"><option>Published</option><option>Draft</option><option>Scheduled</option></select></div>
                <div class="col-md-4"><label class="form-label">Featured</label><select class="form-select" name="featured"><option>Yes</option><option>No</option></select></div>
                <div class="col-12"><label class="form-label">Card Summary</label><textarea class="form-control" name="card_summary" rows="2" placeholder="Short summary shown on the Projects page"></textarea></div>
                <div class="col-12"><label class="form-label">Project Overview</label><textarea class="form-control" name="overview" rows="3" placeholder="Main overview shown on the detail page"></textarea></div>
                <div class="col-md-6"><label class="form-label">The Challenge</label><textarea class="form-control" name="challenge" rows="5" placeholder="What problem did the client need to solve?"></textarea></div>
                <div class="col-md-6"><label class="form-label">Our Solution</label><textarea class="form-control" name="solution" rows="5" placeholder="What solution did the team deliver?"></textarea></div>
                <div class="col-12"><label class="form-label">Card / Hero Image</label><input id="projectImageUpload" class="form-control" type="file" accept="image/*" name="image"></div>
                <div class="col-12"><img id="projectImagePreview" class="img-fluid rounded-3" style="max-height:240px;width:100%;object-fit:cover;" src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=85" alt="Project image preview"></div>
                <div class="col-12"><label class="form-label">Key Features</label><textarea class="form-control" name="features" rows="5" placeholder="One feature per line&#10;Project listings with detailed information&#10;Advanced search and filter options&#10;Mobile responsive design"></textarea></div>
                <div class="col-12"><label class="form-label">Project Results / Stats</label><textarea class="form-control" name="stats" rows="3" placeholder="Example: 3x Increase in Online Inquiries | 60% More Organic Traffic | 40% Better Lead Conversion"></textarea></div>
                <div class="col-12"><label class="form-label">Project Screenshots</label><input class="form-control" type="file" accept="image/*" multiple name="gallery[]"><small class="text-secondary">Add homepage, listing, detail, dashboard, or other project screenshots.</small></div>
                <div class="col-12"><label class="form-label">Gallery Labels</label><input class="form-control" name="gallery_labels" placeholder="Homepage, Project Listings, Project Detail Page"></div>
                <div class="col-12"><label class="form-label">Technologies Used</label><input class="form-control" name="technologies" placeholder="Laravel, Bootstrap, MySQL, JavaScript, Google Maps, SEO"></div>
                <div class="col-md-8"><label class="form-label">Testimonial</label><textarea class="form-control" name="testimonial" rows="4" placeholder="Client testimonial shown on the detail page"></textarea></div>
                <div class="col-md-4"><label class="form-label">Testimonial Author</label><input class="form-control" name="testimonial_author" placeholder="Amit Sharma"></div>
                <div class="col-md-6"><label class="form-label">Author Role / Company</label><input class="form-control" name="testimonial_role" placeholder="Director, Nexus Property"></div>
                <div class="col-md-6"><label class="form-label">CTA Heading</label><input class="form-control" name="cta_heading" value="Have a Similar Project in Mind?"></div>
                <div class="col-12"><label class="form-label">CTA Description</label><textarea class="form-control" name="cta_description" rows="2" placeholder="Get in touch with us today and let’s turn your ideas into reality."></textarea></div>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-4 w-100"><button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2">Save Draft</button><button type="submit" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Publish Project</button></div>
        </form>
    </section>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('projectImageUpload');
        const preview = document.getElementById('projectImagePreview');
        input.addEventListener('change', function () {
            const file = this.files && this.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = function (event) { preview.src = event.target.result; };
            reader.readAsDataURL(file);
        });
    });
</script>
@endsection
