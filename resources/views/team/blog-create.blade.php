@extends('layouts.team', ['title' => 'Add Blog', 'description' => 'Add a new blog article from the team dashboard.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div>
            <h1>Add New Blog</h1>
            <p>Create a new article with the same structure used across the blog detail pages.</p>
        </div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;">
            <a href="{{ route('team.blog') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a>
        </div>
    </div>

    <section class="dashboard-card mt-3 p-4">
        <form id="blogForm" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" placeholder="Laravel 12: What's New">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" placeholder="laravel-12-whats-new">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Category</label>
                    <select class="form-select">
                        <option>Web Development</option>
                        <option>Digital Marketing</option>
                        <option>SEO</option>
                        <option>Technology</option>
                        <option>Business Growth</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option>Published</option>
                        <option>Draft</option>
                        <option>Scheduled</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Hero Title</label>
                    <input type="text" class="form-control" value="SEO">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Hero Subtitle</label>
                    <input type="text" class="form-control" value="Rank Higher in 2025">
                </div>
                <div class="col-12">
                    <label class="form-label">Subtitle</label>
                    <textarea class="form-control" rows="3" placeholder="Short summary for the article"></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Author</label>
                    <input type="text" class="form-control" value="Abhishek Kapoor">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Author Role</label>
                    <input type="text" class="form-control" value="Founder & Developer">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Date</label>
                    <input type="text" class="form-control" value="15 Sep 2025">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Read Time</label>
                    <input type="text" class="form-control" value="8 min read">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Views</label>
                    <input type="text" class="form-control" value="1.2K views">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Image</label>
                    <input id="blogImageUpload" type="file" class="form-control" accept="image/*">
                </div>
                <div class="col-12">
                    <label class="form-label">Author Image</label>
                    <input id="authorImageUpload" type="file" class="form-control" accept="image/*">
                </div>
                <div class="col-12">
                    <div class="border rounded-4 p-3 bg-light-subtle">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <strong class="small text-uppercase text-muted">Image Preview</strong>
                        </div>
                        <img id="blogImagePreview" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1200&q=85" alt="Blog preview" class="img-fluid rounded-3" style="max-height:260px; object-fit:cover; width:100%;">
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <label class="form-label mb-0">Article Sections</label>
                        <span class="small text-secondary">Add one heading and description for each point.</span>
                    </div>
                    <div id="blogSections">
                        <div class="blog-section-item border rounded-4 p-3 mb-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <strong class="blog-section-number">Section 1</strong>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Heading</label>
                                <input type="text" class="form-control" name="sections[0][heading]" value="1. Focus on search intent" placeholder="Section heading">
                            </div>
                            <div>
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="sections[0][description]" rows="4" placeholder="Explain this section in detail..."></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="addBlogSection" class="btn btn-outline-brand rounded-pill px-4 py-2">
                        <i class="bi bi-plus-lg me-1"></i> Add Section
                    </button>
                </div>
                <div class="col-12">
                    <label class="form-label">Quote</label>
                    <textarea class="form-control" rows="3" placeholder="Optional quote for the blog detail page"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Quote Author</label>
                    <input type="text" class="form-control" value="Rahul Verma">
                </div>
                <div class="col-12">
                    <label class="form-label">Tags</label>
                    <input type="text" class="form-control" placeholder="Laravel 12, PHP, Web Development">
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4 w-100">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2">Save Draft</button>
                <button type="submit" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Publish Blog</button>
            </div>
        </form>
    </section>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const uploadInput = document.getElementById('blogImageUpload');
        const preview = document.getElementById('blogImagePreview');

        uploadInput.addEventListener('change', function () {
            const file = this.files && this.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        });

        const sections = document.getElementById('blogSections');
        const addSectionButton = document.getElementById('addBlogSection');

        const renumberSections = () => {
            sections.querySelectorAll('.blog-section-item').forEach((section, index) => {
                const sectionNumber = index + 1;
                section.querySelector('.blog-section-number').textContent = `Section ${sectionNumber}`;
                section.querySelector('[name$="[heading]"]').name = `sections[${index}][heading]`;
                section.querySelector('[name$="[description]"]').name = `sections[${index}][description]`;
            });
        };

        addSectionButton.addEventListener('click', function () {
            const section = document.createElement('div');
            section.className = 'blog-section-item border rounded-4 p-3 mb-3';
            section.innerHTML = `
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <strong class="blog-section-number">Section</strong>
                    <button type="button" class="btn btn-sm btn-outline-danger rounded-pill remove-blog-section">
                        <i class="bi bi-trash3 me-1"></i> Remove
                    </button>
                </div>
                <div class="mb-3">
                    <label class="form-label">Heading</label>
                    <input type="text" class="form-control" name="section-heading" placeholder="Section heading">
                </div>
                <div>
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="section-description" rows="4" placeholder="Explain this section in detail..."></textarea>
                </div>
            `;

            sections.appendChild(section);
            section.querySelector('.remove-blog-section').addEventListener('click', function () {
                section.remove();
                renumberSections();
            });
            renumberSections();
        });

        renumberSections();
    });
</script>
@endsection
