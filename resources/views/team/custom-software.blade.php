@extends('layouts.team', ['title' => 'Add New Software', 'description' => 'Add software access entries under a main project name.'])
@section('content')
<section class="dashboard-content custom-software-manager">
    <div class="dashboard-welcome-row custom-software-welcome-row align-items-center justify-content-between">
        <div><h1>Add New Software</h1><p>Add multiple software access entries under the same main project name.</p></div>
        <span class="badge rounded-pill text-bg-light border px-3 py-2 custom-software-preview-badge">UI Preview Only</span>
    </div>
    <section class="dashboard-card mt-3 p-3 p-lg-4">
        <div class="dash-card-head"><div><h2>Software Project Details</h2><small class="text-secondary">One main project can contain many software URLs and role-based logins.</small></div></div>
        <form id="softwareEntryForm">
            <div class="row g-3 mb-4">
                <div class="col-lg-6"><label class="form-label fw-semibold" for="projectName">Main Project Name</label><input class="form-control" id="projectName" required placeholder="Example: Nivara Finance Platform"></div>
                <div class="col-lg-6"><label class="form-label fw-semibold" for="projectStatus">Project Status</label><select class="form-select" id="projectStatus"><option>Active</option><option>Draft</option><option>Completed</option></select></div>
            </div>
            <div class="d-flex align-items-center justify-content-between gap-2 mb-2"><div><h3 class="h6 fw-bold mb-1">Software Access Entries</h3><small class="text-secondary">Add as many URLs and login roles as this project needs.</small></div><button class="btn btn-outline-brand rounded-pill" id="addSoftwareEntry" type="button"><i class="bi bi-plus-lg me-1"></i>Add Entry</button></div>
            <div id="softwareEntries">
                <div class="software-entry border rounded-3 p-3 mb-3"><div class="row g-3 align-items-end"><div class="col-lg-3"><label class="form-label">Software Name</label><input class="form-control" name="software_name[]" placeholder="Admin Panel" required></div><div class="col-lg-3"><label class="form-label">URL</label><input class="form-control" name="software_url[]" type="url" placeholder="https://example.com" required></div><div class="col-lg-2"><label class="form-label">Login ID</label><input class="form-control" name="login_id[]" placeholder="admin@example.com" required></div><div class="col-lg-2"><label class="form-label">Password</label><input class="form-control" name="password[]" type="password" placeholder="Password" required></div><div class="col-lg-2"><label class="form-label">Role</label><input class="form-control" name="role[]" placeholder="Admin" required></div></div></div>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-4"><button class="btn btn-outline-secondary rounded-pill" id="clearSoftwareForm" type="button">Clear</button><button class="btn btn-brand rounded-pill px-4" type="submit"><i class="bi bi-check2 me-1"></i>Save Software Entry</button></div>
        </form>
    </section>
    <section class="dashboard-card mt-3 p-3 p-lg-4"><div class="dash-card-head"><div><h2>Saved Software Access</h2><small class="text-secondary">Entries are saved in this browser for UI preview only.</small></div></div><div class="table-responsive"><table class="dash-table"><thead><tr><th>Main Project</th><th>Software</th><th>URL</th><th>Login ID</th><th>Password</th><th>Role</th><th>Action</th></tr></thead><tbody id="savedSoftwareRows"></tbody></table></div><div class="text-center text-secondary py-4 d-none" id="softwareEmpty">No software entries saved yet.</div></section>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const key = 'codexnindia_custom_software_entries';
    const form = document.getElementById('softwareEntryForm');
    const entries = document.getElementById('softwareEntries');
    const rows = document.getElementById('savedSoftwareRows');
    const empty = document.getElementById('softwareEmpty');
    let saved = [];
    try { const stored = JSON.parse(localStorage.getItem(key) || '[]'); saved = Array.isArray(stored) ? stored : []; } catch (error) { localStorage.removeItem(key); }
    function render() {
        rows.innerHTML = '';
        saved.forEach(function (entry, index) {
            const row = document.createElement('tr');
            row.innerHTML = '<td></td><td></td><td><a target="_blank" rel="noopener"></a></td><td></td><td>••••••••</td><td></td><td><button class="btn btn-sm btn-outline-danger remove-entry" type="button">Remove</button></td>';
            row.children[0].textContent = entry.project; row.children[1].textContent = entry.software;
            row.querySelector('a').href = entry.url; row.querySelector('a').textContent = entry.url;
            row.children[3].textContent = entry.login; row.children[5].textContent = entry.role;
            row.querySelector('.remove-entry').addEventListener('click', function () { saved.splice(index, 1); localStorage.setItem(key, JSON.stringify(saved)); render(); });
            rows.appendChild(row);
        });
        empty.classList.toggle('d-none', saved.length > 0);
    }
    document.getElementById('addSoftwareEntry').addEventListener('click', function () {
        const entry = entries.firstElementChild.cloneNode(true); entry.querySelectorAll('input').forEach(function (input) { input.value = ''; });
        const remove = document.createElement('button'); remove.type = 'button'; remove.className = 'btn btn-outline-danger remove-form-entry mt-2'; remove.innerHTML = '<i class="bi bi-trash3"></i>';
        entry.querySelector('.row').appendChild(remove); remove.addEventListener('click', function () { entry.remove(); }); entries.appendChild(entry);
    });
    document.getElementById('clearSoftwareForm').addEventListener('click', function () { form.reset(); while (entries.children.length > 1) entries.lastElementChild.remove(); });
    form.addEventListener('submit', function (event) {
        event.preventDefault(); const project = document.getElementById('projectName').value.trim();
        entries.querySelectorAll('.software-entry').forEach(function (entry) { const fields = entry.querySelectorAll('input'); if (fields[0].value.trim()) saved.push({ project: project, software: fields[0].value.trim(), url: fields[1].value.trim(), login: fields[2].value.trim(), password: fields[3].value, role: fields[4].value.trim() }); });
        localStorage.setItem(key, JSON.stringify(saved)); render(); form.reset(); while (entries.children.length > 1) entries.lastElementChild.remove();
    });
    render();
});
</script>
@endsection
