@extends('layouts.team', ['title' => 'Edit Blog', 'description' => 'Edit an existing blog post.'])
@section('content')
<section class="dashboard-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Edit Blog</h1>
            <p class="text-secondary mb-0">Update article information and content.</p>
        </div>
        <a href="{{ route('team.blogs.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a>
    </div>

    <section class="dashboard-card p-3 p-lg-4">
        <form method="POST" action="{{ route('team.blogs.update', $blog) }}">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-md-8">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" value="{{ old('category', $blog->category) }}" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Subtitle</label>
                    <textarea name="subtitle" class="form-control" rows="2">{{ old('subtitle', $blog->subtitle) }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Author Role</label>
                    <input type="text" name="author_role" class="form-control" value="{{ old('author_role', $blog->author_role) }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date</label>
                    <input type="text" name="date_label" class="form-control" value="{{ old('date_label', $blog->date_label) }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Read Time</label>
                    <input type="text" name="read_time" class="form-control" value="{{ old('read_time', $blog->read_time) }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Views</label>
                    <input type="text" name="views" class="form-control" value="{{ old('views', $blog->views) }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="draft" {{ old('status', $blog->status) === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $blog->status) === 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Image URL</label>
                    <input type="text" name="image" class="form-control" value="{{ old('image', $blog->image) }}">
                </div>
                <div class="col-md-12">
                    <label class="form-label">Content</label>
                    <textarea name="content" class="form-control" rows="12" required>{{ old('content', $blog->content) }}</textarea>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('team.blogs.index') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Cancel</a>
                <button type="submit" class="btn btn-brand rounded-pill px-4 py-2">Update Blog</button>
            </div>
        </form>
    </section>
</section>
@endsection
