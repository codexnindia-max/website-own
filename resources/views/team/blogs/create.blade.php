@extends('layouts.team', ['title' => 'Create Blog', 'description' => 'Create a new blog post.'])
@section('content')
<section class="dashboard-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Create Blog</h1>
            <p class="text-secondary mb-0">Add a new article to the website blog.</p>
        </div>
        <a href="{{ route('team.blogs.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a>
    </div>

    <section class="dashboard-card p-3 p-lg-4">
        <form method="POST" action="{{ route('team.blogs.store') }}">
            @csrf
            <div class="row g-3">
                <div class="col-md-8">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category') }}" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Subtitle</label>
                    <textarea name="subtitle" class="form-control" rows="2">{{ old('subtitle') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author') }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Author Role</label>
                    <input type="text" name="author_role" class="form-control" value="{{ old('author_role') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date</label>
                    <input type="text" name="date_label" class="form-control" value="{{ old('date_label') }}" placeholder="Aug 20, 2025">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Read Time</label>
                    <input type="text" name="read_time" class="form-control" value="{{ old('read_time') }}" placeholder="6 min read">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Views</label>
                    <input type="text" name="views" class="form-control" value="{{ old('views') }}" placeholder="950 views">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Image URL</label>
                    <input type="text" name="image" class="form-control" value="{{ old('image') }}" placeholder="https://example.com/image.jpg">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Content</label>
                    <textarea name="content" class="form-control" rows="12" required>{{ old('content') }}</textarea>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('team.blogs.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Cancel</a>
                <button type="submit" class="btn btn-brand rounded-pill px-4 py-2">Save Blog</button>
            </div>
        </form>
    </section>
</section>
@endsection
