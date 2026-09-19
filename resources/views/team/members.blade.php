@extends('layouts.team', ['title' => 'Team Manager', 'description' => 'Manage leaders and team members from the backend dashboard.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div><h1>Team Manager</h1><p>Manage all leaders and team members shown on the public website.</p></div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.members.create') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">+ Add Team Member</a></div>
    </div>
    <div class="dashboard-stats-grid">
        <article><span class="dash-stat-icon"><i class="bi bi-people-fill"></i></span><div><small>Total Members</small><b>12</b><em>↑ 8%</em><span>Leaders and team members</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-star-fill"></i></span><div><small>Leaders</small><b>04</b><em>Active</em><span>Leadership team</span></div><i class="bi bi-person-badge-fill"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-diagram-3-fill"></i></span><div><small>Departments</small><b>05</b><em>Active</em><span>Across the company</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-image-fill"></i></span><div><small>Profile Images</small><b>12</b><em>Ready</em><span>Public profile assets</span></div><i class="bi bi-check-circle-fill"></i></article>
    </div>
    <section class="dashboard-card mt-3">
        <div class="dash-card-head"><h2>Existing Team Data</h2><a href="#">View All →</a></div>
        <div class="table-responsive">
            <table class="dash-table">
                <thead><tr><th>Name</th><th>Type</th><th>Role</th><th>Department</th><th>Bio</th><th>Image</th><th>LinkedIn</th><th>Twitter</th><th>Instagram</th><th>GitHub</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @foreach([
                        ['Abhishek Kapoor','Leader','Founder & CEO','Leadership','Passionate about technology and building digital solutions that create real value.','leader-abhishek.jpg','Yes','Yes','No','Yes'],
                        ['Priya Verma','Leader','Operations Head','Operations','Ensures smooth operations and client success with a people-first approach.','leader-priya.jpg','Yes','Yes','Yes','No'],
                        ['Rohit Mehta','Leader','Technical Lead','Development','Leads development and architecture for scalable and high-performance solutions.','leader-rohit.jpg','Yes','Yes','No','Yes'],
                        ['Neha Singh','Leader','Marketing Head','Marketing','Drives brand growth and digital marketing strategies to help businesses succeed.','leader-neha.jpg','Yes','Yes','Yes','No'],
                        ['Vikas Sharma','Member','Sr. Laravel Developer','Development','', 'vikas-sharma.jpg','No','No','No','No'],
                        ['Kajal Jain','Member','UI/UX Designer','Design','', 'kajal-jain.jpg','No','No','No','No'],
                        ['Amit Yadav','Member','Frontend Developer','Development','', 'amit-yadav.jpg','No','No','No','No'],
                        ['Simran Kaur','Member','SEO Specialist','Marketing','', 'simran-kaur.jpg','No','No','No','No'],
                        ['Deepak Raj','Member','Cloud & DevOps','Development','', 'deepak-raj.jpg','No','No','No','No'],
                        ['Ritika Soni','Member','Content Writer','Marketing','', 'ritika-soni.jpg','No','No','No','No'],
                        ['Arjun Mehta','Member','Business Analyst','Operations','', 'arjun-mehta.jpg','No','No','No','No'],
                        ['Pooja Verma','Member','HR & Operations','Operations','', 'pooja-verma.jpg','No','No','No','No'],
                    ] as $member)
                        <tr>
                            <td>{{ $member[0] }}</td><td>{{ $member[1] }}</td><td>{{ $member[2] }}</td><td>{{ $member[3] }}</td><td>{{ $member[4] ?: 'No public bio yet.' }}</td><td>{{ $member[5] }}</td><td>{{ $member[6] }}</td><td>{{ $member[7] }}</td><td>{{ $member[8] }}</td><td>{{ $member[9] }}</td><td><span class="dash-status published">Published</span></td><td class="text-nowrap"><a href="{{ route('team.members.create') }}" class="btn btn-sm btn-outline-secondary">Edit</a> <button type="button" class="btn btn-sm btn-outline-danger delete-member">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</section>
<script>document.addEventListener('DOMContentLoaded',function(){document.querySelectorAll('.delete-member').forEach(function(button){button.addEventListener('click',function(){if(confirm('Remove this team member from the UI list?'))button.closest('tr').remove();});});});</script>
@endsection
