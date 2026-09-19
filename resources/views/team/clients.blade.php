@extends('layouts.team', ['title' => 'Clients Manager', 'description' => 'Manage clients, contacts, projects, tasks, and activity from the team dashboard.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between">
        <div><h1>Clients</h1><p>Manage client relationships, projects, documents, tasks, and activity.</p></div>
        <div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.clients.create') }}" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">+ Add New Client</a></div>
    </div>
    <div class="dashboard-stats-grid">
        <article><span class="dash-stat-icon"><i class="bi bi-person-vcard-fill"></i></span><div><small>Total Clients</small><b>56</b><em>↑ 15%</em><span>Compared to last month</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-briefcase-fill"></i></span><div><small>Active Projects</small><b>18</b><em>↑ 8%</em><span>Across all clients</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-currency-rupee"></i></span><div><small>Monthly Revenue</small><b>₹8.4L</b><em>↑ 12%</em><span>Active retainers</span></div><i class="bi bi-graph-up-arrow"></i></article>
        <article><span class="dash-stat-icon"><i class="bi bi-chat-left-text-fill"></i></span><div><small>Open Tasks</small><b>42</b><em>↓ 5%</em><span>Need attention</span></div><i class="bi bi-check-circle-fill"></i></article>
    </div>
    <section class="dashboard-card mt-3">
        <div class="dash-card-head"><h2>All Clients</h2><a href="#">View All →</a></div>
        <div class="table-responsive"><table class="dash-table"><thead><tr><th>Client</th><th>Primary Contact</th><th>Email</th><th>Industry</th><th>Location</th><th>Projects</th><th>Status</th><th>Last Activity</th><th>Actions</th></tr></thead><tbody>
            @foreach([
                ['dreamhome-real-estate','DreamHome Real Estate Pvt. Ltd.','Rohit Sharma','rohit@dreamhome.in','Real Estate','New Delhi, India','04','Active','2 hours ago'],
                ['nexus-property-group','Nexus Property Group','Amit Sharma','amit@nexusproperty.in','Real Estate','Gurugram, India','03','Active','Yesterday'],
                ['medicore-health','MediCore Health','Neha Singh','neha@medicore.in','Healthcare','Mumbai, India','02','Active','3 days ago'],
                ['northstar-growth','Northstar Growth','Priya Verma','priya@northstar.in','Marketing','Bengaluru, India','01','Onboarding','5 days ago'],
            ] as $client)
                <tr><td><strong>{{ $client[1] }}</strong></td><td>{{ $client[2] }}</td><td>{{ $client[3] }}</td><td>{{ $client[4] }}</td><td>{{ $client[5] }}</td><td>{{ $client[6] }}</td><td><span class="dash-status {{ Str::slug($client[7]) }}">{{ $client[7] }}</span></td><td>{{ $client[8] }}</td><td class="text-nowrap"><a href="{{ route('team.clients.work.create', $client[0]) }}" class="btn btn-sm btn-brand">+ Add Service</a> <a href="{{ route('team.clients.edit', $client[0]) }}" class="btn btn-sm btn-outline-secondary">Edit</a> <button type="button" class="btn btn-sm btn-outline-danger delete-client">Delete</button></td></tr>
            @endforeach
        </tbody></table></div>
    </section>
</section>
<script>document.addEventListener('DOMContentLoaded',function(){document.querySelectorAll('.delete-client').forEach(function(button){button.addEventListener('click',function(){if(confirm('Remove this client from the UI list?'))button.closest('tr').remove();});});});</script>
@endsection
