@extends('layouts.team', ['title' => 'Add Team Member', 'description' => 'Add a leader or team member to the backend team manager.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between"><div><h1>Add New Team Member</h1><p>Add the complete profile information used by the public Team page.</p></div><div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.members') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a></div></div>
    <section class="dashboard-card mt-3 p-4">
        <form id="memberForm" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label">Full Name</label><input class="form-control" name="name" placeholder="Abhishek Kapoor"></div>
                <div class="col-md-6"><label class="form-label">Slug</label><input class="form-control" name="slug" placeholder="abhishek-kapoor"></div>
                <div class="col-md-4"><label class="form-label">Profile Type</label><select class="form-select" name="type"><option>Leader</option><option>Member</option></select></div>
                <div class="col-md-4"><label class="form-label">Role</label><input class="form-control" name="role" placeholder="Founder & CEO"></div>
                <div class="col-md-4"><label class="form-label">Department</label><select class="form-select" name="department"><option>Leadership</option><option>Development</option><option>Design</option><option>Marketing</option><option>Operations</option><option>Support</option></select></div>
                <div class="col-12"><label class="form-label">Bio / Description</label><textarea class="form-control" name="bio" rows="4" placeholder="Short public description about this team member"></textarea></div>
                <div class="col-md-6"><label class="form-label">Profile Image</label><input id="memberImageUpload" class="form-control" type="file" name="image" accept="image/*"></div>
                <div class="col-md-6"><label class="form-label">Status</label><select class="form-select" name="status"><option>Published</option><option>Draft</option></select></div>
                <div class="col-12"><img id="memberImagePreview" class="img-fluid rounded-3" style="height:220px;width:100%;object-fit:cover;" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=85" alt="Team member preview"></div>
                <div class="col-md-6"><label class="form-label">LinkedIn URL</label><input class="form-control" name="linkedin" placeholder="https://linkedin.com/in/name"></div>
                <div class="col-md-6"><label class="form-label">Twitter / X URL</label><input class="form-control" name="twitter" placeholder="https://twitter.com/name"></div>
                <div class="col-md-6"><label class="form-label">Instagram URL</label><input class="form-control" name="instagram" placeholder="https://instagram.com/name"></div>
                <div class="col-md-6"><label class="form-label">GitHub URL</label><input class="form-control" name="github" placeholder="https://github.com/name"></div>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2">Save Draft</button><button type="submit" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Add Team Member</button></div>
        </form>
    </section>
</section>
<script>document.addEventListener('DOMContentLoaded',function(){const input=document.getElementById('memberImageUpload');const preview=document.getElementById('memberImagePreview');input.addEventListener('change',function(){const file=this.files&&this.files[0];if(!file)return;const reader=new FileReader();reader.onload=function(event){preview.src=event.target.result;};reader.readAsDataURL(file);});});</script>
@endsection
