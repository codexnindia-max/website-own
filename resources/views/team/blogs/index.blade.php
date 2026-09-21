@extends('layouts.team', ['title' => 'Blog Manager', 'description' => 'Manage website blog posts from the admin dashboard.'])
@section('content')
<section class="dashboard-content blog-admin-page">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Blog Manager</h1>
            <p class="text-secondary mb-0">Add and manage blog posts for the public website.</p>
        </div>
        <a href="{{ route('team.blogs.create') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">+ Add Blog</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success rounded-3 mb-4">{{ session('success') }}</div>
    @endif

    <section class="dashboard-card p-3 p-lg-4">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Author</th>
                        <th>Updated</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blog)
                        <tr>
                            <td>
                                <div class="fw-semibold text-dark">{{ $blog->title }}</div>
                                <small class="text-secondary">{{ $blog->slug }}</small>
                            </td>
                            <td>{{ $blog->category }}</td>
                            <td>
                                <span class="badge {{ $blog->status === 'published' ? 'bg-success-subtle text-success' : 'bg-warning-subtle text-warning' }} rounded-pill px-3 py-2">
                                    {{ ucfirst($blog->status) }}
                                </span>
                            </td>
                            <td>{{ $blog->author }}</td>
                            <td>{{ $blog->updated_at?->format('d M Y') }}</td>
                            <td class="text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('team.blogs.edit', $blog) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <form action="{{ route('team.blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Delete this blog?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-secondary py-4">No blog posts yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</section>
@endsection
