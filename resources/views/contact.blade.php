@extends('layouts.site', ['title' => 'Contact Us', 'description' => 'Tell CodexnIndia about your next digital project.'])
@section('content')
<section class="contact-reference-hero">
  <div class="container">
    <div class="row align-items-center g-0">
      <div class="col-lg-7 contact-hero-copy">
        <p class="contact-breadcrumb">Home <span>›</span> Contact</p>
        <p class="eyebrow">GET IN TOUCH</p>
        <h1>Let's Build<br>Something <span>Amazing</span><br><b>Together</b></h1>
        <p>Have a project in mind, a question, or just want to say hello? We would love to hear from you and help turn your ideas into real digital solutions.</p>
        <div class="contact-hero-points">
          <span><i class="bi bi-lightning-charge-fill"></i> Quick Response</span>
          <span><i class="bi bi-person-check-fill"></i> Expert Support</span>
          <span><i class="bi bi-calendar-check-fill"></i> Free Consultation</span>
          <span><i class="bi bi-heart-fill"></i> Long-Term Partnership</span>
        </div>
      </div>
      <div class="col-lg-5 contact-hero-art">
        <div class="contact-hero-scribble">Ideas<br>Discussions<br><em>Solutions</em><br>Growth</div>
        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1000&q=88" alt="CodexnIndia team discussing a project">
        <div class="contact-hero-card"><span>Your</span><strong>Success<br>Starts with a<br>Conversation</strong></div>
      </div>
    </div>
  </div>
</section>

<section class="contact-info-strip py-3">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-0 contact-info-card">
      <div class="col"><div><i class="bi bi-telephone-fill"></i><span><b>Call Us</b><small>+91 98765 43210<br>Mon - Sat, 10AM - 7PM</small></span></div></div>
      <div class="col"><div><i class="bi bi-envelope-fill"></i><span><b>Email Us</b><small>info@codexnindia.com<br>We reply within 24 hours</small></span></div></div>
      <div class="col"><div><i class="bi bi-geo-alt-fill"></i><span><b>Visit Our Office</b><small>Noida, India<br>Let's meet and discuss</small></span></div></div>
      <div class="col"><div><i class="bi bi-chat-square-dots-fill"></i><span><b>Live Chat</b><small>Chat with our team<br>Available on website</small></span></div></div>
    </div>
  </div>
</section>

<section class="contact-workspace py-5">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-lg-7">
        <div class="contact-section-label"><span></span> SEND US A MESSAGE</div>
        <h2 class="contact-section-title">Tell Us About <span>Your Project</span></h2>
        <p class="text-secondary mb-4">Fill out the form below and our team will get back to you as soon as possible.</p>
        <form class="contact-form-card" onsubmit="return false;">
          <div class="row g-3">
            <div class="col-md-6"><label for="contactName">Full Name <b>*</b></label><input id="contactName" type="text" placeholder="Enter your name" required></div>
            <div class="col-md-6"><label for="contactEmail">Email Address <b>*</b></label><input id="contactEmail" type="email" placeholder="Enter your email" required></div>
            <div class="col-md-6"><label for="contactCompany">Company Name</label><input id="contactCompany" type="text" placeholder="Enter your company name"></div>
            <div class="col-md-6"><label for="contactPhone">Phone Number</label><input id="contactPhone" type="tel" placeholder="Enter your phone number"></div>
            <div class="col-md-6"><label for="contactType">Project Type</label><select id="contactType"><option>Select a service</option><option>Website Development</option><option>Digital Marketing</option><option>Software Development</option><option>Branding</option></select></div>
            <div class="col-md-6"><label for="contactBudget">Budget Range</label><select id="contactBudget"><option>Select budget range</option><option>Under ₹25,000</option><option>₹25,000 - ₹75,000</option><option>₹75,000 - ₹2,00,000</option><option>₹2,00,000+</option></select></div>
            <div class="col-12"><label for="contactMessage">Your Message</label><textarea id="contactMessage" rows="5" placeholder="Tell us about your project, goals, or any questions..."></textarea></div>
            <div class="col-12"><button class="btn btn-brand w-100 py-3" type="submit">Send Message <i class="bi bi-arrow-right ms-2"></i></button></div>
          </div>
          <small class="contact-form-note"><i class="bi bi-lock-fill"></i> Your information is safe with us. We never share your details with third parties.</small>
        </form>
      </div>
      <div class="col-lg-5">
        <div class="contact-section-label"><span></span> OUR OFFICE</div>
        <h2 class="contact-section-title h3">Come Say Hello</h2>
        <p class="text-secondary">Visit us at our office or schedule a meeting.</p>
        <div class="contact-office-card">
          <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=85" alt="CodexnIndia office">
          <div class="contact-office-details">
            <p><i class="bi bi-geo-alt-fill"></i><span><b>Noida, India</b><small>320-A, 3rd Floor, Living Style Mall,<br>Sector 4, Noida, New Delhi - 110025</small></span></p>
            <p><i class="bi bi-telephone-fill"></i><b>+91 98765 43210</b></p>
            <p><i class="bi bi-envelope-fill"></i><b>info@codexnindia.com</b></p>
            <p><i class="bi bi-clock-fill"></i><span><b>Mon - Sat: 10:00 AM - 7:00 PM</b><small>Sunday: Closed</small></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-faq py-4"><div class="container"><div class="contact-section-label"><span></span> FAQ</div><h2 class="contact-section-title h3">Frequently Asked <span>Questions</span></h2><p class="text-secondary">Quick answers to common questions.</p><div class="accordion" id="contactFaq"><div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faqOne" type="button">How quickly can you start my project?</button></h3><div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body small text-secondary">We usually schedule an initial discovery call within two business days.</div></div></div><div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faqTwo" type="button">Do you provide ongoing support and maintenance?</button></h3><div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body small text-secondary">Yes. We offer practical support, maintenance, and growth plans after launch.</div></div></div><div class="accordion-item"><h3 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faqThree" type="button">What information do you need to provide a quote?</button></h3><div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#contactFaq"><div class="accordion-body small text-secondary">A short description of your goals, timeline, audience, and preferred features is a great start.</div></div></div></div></div></section>

<section class="contact-cta-wrap py-4"><div class="container"><div class="team-join-cta p-4 p-lg-5 rounded-4 text-white"><div class="row align-items-center g-4"><div class="col-lg-8"><span class="team-cta-tag">READY TO DISCUSS?</span><h2 class="display-6 fw-bold mt-2">Let's Turn Your <span class="text-brand">Ideas Into Reality</span></h2><p class="text-white-50 mb-0">Send us a message and let's discuss how we can help your business grow.</p></div><div class="col-lg-4 text-lg-end"><a href="mailto:info@codexnindia.com" class="btn btn-light rounded-pill px-4 fw-bold">Schedule a Call →</a></div></div></div></div></section>
@endsection
