@extends('layouts.team', ['title' => 'Add Service Detail', 'description' => 'Create the public service card and full service detail page UI.'])
@section('content')
<section class="dashboard-content">
    <div class="dashboard-welcome-row align-items-center justify-content-between"><div><h1>Add Service Detail</h1><p>Keep the listing content and full detail-page content together for future database wiring.</p></div><div class="d-flex gap-2 ms-auto" style="grid-column: 3; justify-self: end;"><a href="{{ route('team.services') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">Back</a></div></div>
    <section class="dashboard-card mt-3 p-4">
        <form id="serviceForm" enctype="multipart/form-data">
            <h2 class="h5 fw-bold mb-3">1. Service Listing</h2>
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label">Service Name</label><input class="form-control" name="name" placeholder="Website Development"></div>
                <div class="col-md-6"><label class="form-label">Slug</label><input class="form-control" name="slug" placeholder="website-development"></div>
                <div class="col-md-4"><label class="form-label">Icon Class</label><input class="form-control" name="icon" value="bi-window-stack"></div>
                <div class="col-md-4"><label class="form-label">Status</label><select class="form-select"><option>Published</option><option>Draft</option><option>Scheduled</option></select></div>
                <div class="col-md-4"><label class="form-label">Sort Order</label><input class="form-control" type="number" value="1"></div>
                <div class="col-12"><label class="form-label">Card Description</label><textarea class="form-control" rows="3" placeholder="Short description shown on the main Services page"></textarea></div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <label class="form-label mb-0">Card Bullet Items</label>
                        <span class="small text-secondary">Add each point separately.</span>
                    </div>
                    <div id="cardBulletEntries">
                        <div class="card-bullet-entry d-flex gap-2 mb-2">
                            <input class="form-control" name="card_bullets[0]" placeholder="Business Websites">
                        </div>
                    </div>
                    <button type="button" id="addCardBullet" class="btn btn-outline-brand rounded-pill px-4 py-2 mt-2"><i class="bi bi-plus-lg me-1"></i> Add Point</button>
                </div>
            </div>
            <hr class="my-4">
            <h2 class="h5 fw-bold mb-3">2. Service Detail Hero</h2>
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label">Eyebrow</label><input class="form-control" name="eyebrow" value="WEBSITE DEVELOPMENT"></div>
                <div class="col-md-6"><label class="form-label">Hero Title</label><input class="form-control" name="hero_title" placeholder="Powerful Websites for Your Business Growth"></div>
                <div class="col-12"><label class="form-label">Hero Description</label><textarea class="form-control" rows="3" name="hero_text" placeholder="Description shown below the detail hero title"></textarea></div>
                <div class="col-md-6"><label class="form-label">Hero Image</label><input id="serviceHeroUpload" class="form-control" type="file" accept="image/*"></div>
                <div class="col-md-6"><label class="form-label">Process Image</label><input class="form-control" type="file" accept="image/*"></div>
                <div class="col-12"><img id="serviceHeroPreview" class="img-fluid rounded-3" style="height:220px;width:100%;object-fit:cover" src="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=1200&q=85" alt="Service hero preview"></div>
            </div>
            <hr class="my-4">
            <h2 class="h5 fw-bold mb-3">3. Detail Service Types</h2>
            <div id="serviceTypeEntries">
                <div class="service-type-entry border rounded-4 p-3 mb-3"><div class="row g-3"><div class="col-md-3"><label class="form-label">Icon</label><input class="form-control" name="types[0][icon]" value="bi-globe2"></div><div class="col-md-4"><label class="form-label">Type Heading</label><input class="form-control" name="types[0][heading]" value="Business Websites"></div><div class="col-md-5"><label class="form-label">Type Description</label><input class="form-control" name="types[0][description]" placeholder="Short type description"></div><div class="col-12"><div class="d-flex justify-content-between align-items-center mb-2"><label class="form-label mb-0">Included Items</label><span class="small text-secondary">Add each point separately.</span></div><div class="type-item-entries"><div class="type-item-row d-flex gap-2 mb-2"><input class="form-control" name="types[0][items][0]" placeholder="Corporate Websites"></div></div><button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-type-item"><i class="bi bi-plus-lg me-1"></i> Add Point</button></div></div></div>
            </div>
            <button type="button" id="addServiceType" class="btn btn-outline-brand rounded-pill px-4 py-2"><i class="bi bi-plus-lg me-1"></i> Add Service Type</button>
            <hr class="my-4">
            <h2 class="h5 fw-bold mb-3">4. Process, Benefits & FAQ</h2>
            <div class="row g-4">
                <div class="col-lg-6"><div class="border rounded-4 p-3 h-100"><div class="d-flex justify-content-between align-items-center mb-3"><label class="form-label mb-0">Process Steps</label><span class="small text-secondary">Title + description</span></div><div id="processEntries"><div class="structured-entry border rounded-3 p-2 mb-2"><input class="form-control mb-2" name="process[0][title]" value="Discover" placeholder="Step title"><textarea class="form-control" name="process[0][description]" rows="2" placeholder="Explain this step"></textarea></div></div><button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-structured-entry" data-target="processEntries" data-kind="process"><i class="bi bi-plus-lg me-1"></i> Add Step</button></div></div>
                <div class="col-lg-6"><div class="border rounded-4 p-3 h-100"><div class="d-flex justify-content-between align-items-center mb-3"><label class="form-label mb-0">Why Choose Us Items</label><span class="small text-secondary">Easy-to-understand benefits</span></div><div id="benefitEntries"><div class="structured-entry border rounded-3 p-2 mb-2"><input class="form-control mb-2" name="benefits[0][title]" value="Result-Oriented Approach" placeholder="Benefit heading"><textarea class="form-control" name="benefits[0][description]" rows="2" placeholder="Explain the benefit simply"></textarea></div></div><button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-structured-entry" data-target="benefitEntries" data-kind="benefits"><i class="bi bi-plus-lg me-1"></i> Add Benefit</button></div></div>
                <div class="col-12"><div class="border rounded-4 p-3"><div class="d-flex justify-content-between align-items-center mb-3"><label class="form-label mb-0">Frequently Asked Questions</label><span class="small text-secondary">Question + answer</span></div><div id="faqEntries"><div class="structured-entry border rounded-3 p-2 mb-2"><input class="form-control mb-2" name="faqs[0][question]" placeholder="Ask a common customer question"><textarea class="form-control" name="faqs[0][answer]" rows="2" placeholder="Write a clear answer"></textarea></div></div><button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-structured-entry" data-target="faqEntries" data-kind="faqs"><i class="bi bi-plus-lg me-1"></i> Add Question</button></div></div>
            </div>
            <hr class="my-4">
            <h2 class="h5 fw-bold mb-3">5. Detail CTA & Tools</h2>
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label">Tools / Technologies</label><input class="form-control" placeholder="Laravel, PHP, JavaScript, Bootstrap, MySQL"></div>
                <div class="col-md-6"><label class="form-label">CTA Heading</label><input class="form-control" value="Ready to Build Your Website?"></div>
                <div class="col-12"><label class="form-label">CTA Description</label><textarea class="form-control" rows="2" placeholder="Let's discuss your project and create something amazing together."></textarea></div>
            </div>
            <div class="d-flex justify-content-end gap-2 mt-4"><button type="button" class="btn btn-outline-secondary rounded-pill px-4 py-2">Save Draft</button><button type="submit" class="btn btn-brand rounded-pill px-4 py-2 fw-semibold">Publish Service</button></div>
        </form>
    </section>
</section>
<script>
document.addEventListener('DOMContentLoaded',function(){
 const upload=document.getElementById('serviceHeroUpload'); const preview=document.getElementById('serviceHeroPreview');
 upload.addEventListener('change',function(){const file=this.files&&this.files[0];if(!file)return;const reader=new FileReader();reader.onload=function(event){preview.src=event.target.result};reader.readAsDataURL(file)});
 const entries=document.getElementById('serviceTypeEntries'); const add=document.getElementById('addServiceType'); let index=1;
 function renumber(){entries.querySelectorAll('.service-type-entry').forEach(function(entry,i){entry.querySelectorAll('[name]').forEach(function(input){input.name=input.name.replace(/types\\[\\d+\\]/,'types['+i+']')})})}
 add.addEventListener('click',function(){const entry=document.createElement('div');entry.className='service-type-entry border rounded-4 p-3 mb-3';entry.innerHTML='<div class="row g-3"><div class="col-md-3"><label class="form-label">Icon</label><input class="form-control" name="types['+index+'][icon]" placeholder="bi-code-slash"></div><div class="col-md-4"><label class="form-label">Type Heading</label><input class="form-control" name="types['+index+'][heading]" placeholder="Type heading"></div><div class="col-md-5"><label class="form-label">Type Description</label><input class="form-control" name="types['+index+'][description]" placeholder="Short type description"></div><div class="col-12"><div class="d-flex justify-content-between align-items-center mb-2"><label class="form-label mb-0">Included Items</label></div><div class="type-item-entries"><div class="type-item-row d-flex gap-2 mb-2"><input class="form-control" name="types['+index+'][items][0]" placeholder="Included item"></div></div><button type="button" class="btn btn-sm btn-outline-brand rounded-pill add-type-item"><i class="bi bi-plus-lg me-1"></i> Add Point</button></div></div>';entries.appendChild(entry);index++;renumber()});
 entries.addEventListener('click',function(event){const addItem=event.target.closest('.add-type-item');if(addItem){const typeEntry=addItem.closest('.service-type-entry');const itemEntries=typeEntry.querySelector('.type-item-entries');const typeIndex=Array.from(entries.querySelectorAll('.service-type-entry')).indexOf(typeEntry);const itemIndex=itemEntries.querySelectorAll('.type-item-row').length;const row=document.createElement('div');row.className='type-item-row d-flex gap-2 mb-2';row.innerHTML='<input class="form-control" name="types['+typeIndex+'][items]['+itemIndex+']" placeholder="Included item"><button type="button" class="btn btn-outline-danger remove-type-item" aria-label="Remove point"><i class="bi bi-trash3"></i></button>';itemEntries.appendChild(row);return}const removeItem=event.target.closest('.remove-type-item');if(removeItem){removeItem.closest('.type-item-row').remove();renumber()}});
 const bulletEntries=document.getElementById('cardBulletEntries'); const addBullet=document.getElementById('addCardBullet'); let bulletIndex=1;
 function renumberBullets(){bulletEntries.querySelectorAll('.card-bullet-entry').forEach(function(entry,i){entry.querySelector('input').name='card_bullets['+i+']'})}
 addBullet.addEventListener('click',function(){const entry=document.createElement('div');entry.className='card-bullet-entry d-flex gap-2 mb-2';entry.innerHTML='<input class="form-control" name="card_bullets['+bulletIndex+']" placeholder="Another service point"><button type="button" class="btn btn-outline-danger remove-card-bullet" aria-label="Remove point"><i class="bi bi-trash3"></i></button>';bulletEntries.appendChild(entry);bulletIndex++;entry.querySelector('.remove-card-bullet').addEventListener('click',function(){entry.remove();renumberBullets()})});
 document.querySelectorAll('.add-structured-entry').forEach(function(button){button.addEventListener('click',function(){const target=document.getElementById(button.dataset.target);const index=target.querySelectorAll('.structured-entry').length;const kind=button.dataset.kind;const fields=kind==='faqs'?'<input class="form-control mb-2" name="faqs['+index+'][question]" placeholder="Ask a common customer question"><textarea class="form-control" name="faqs['+index+'][answer]" rows="2" placeholder="Write a clear answer"></textarea>':'<input class="form-control mb-2" name="'+kind+'['+index+'][title]" placeholder="'+(kind==='process'?'Step title':'Benefit heading')+'"><textarea class="form-control" name="'+kind+'['+index+'][description]" rows="2" placeholder="'+(kind==='process'?'Explain this step simply':'Explain the benefit simply')+'"></textarea>';const entry=document.createElement('div');entry.className='structured-entry border rounded-3 p-2 mb-2';entry.innerHTML=fields+'<button type="button" class="btn btn-sm btn-outline-danger rounded-pill remove-structured-entry mt-2"><i class="bi bi-trash3 me-1"></i> Remove</button>';target.appendChild(entry);entry.querySelector('.remove-structured-entry').addEventListener('click',function(){entry.remove();target.querySelectorAll('.structured-entry').forEach(function(item,i){item.querySelectorAll('[name]').forEach(function(input){input.name=input.name.replace(new RegExp(kind+'\\[\\d+\\]'),' '+kind+'['+i+']').replace(/^ /,'')})})})})});
});
</script>
@endsection
