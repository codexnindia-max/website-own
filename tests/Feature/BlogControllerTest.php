<?php

use App\Http\Controllers\BlogController;

test('blog controller exists and public detail page loads', function () {
    expect(class_exists(BlogController::class))->toBeTrue();

    $response = $this->get('/blog/google-ads-vs-meta-ads');

    $response->assertOk();
    $response->assertSeeText('Google Ads vs Meta Ads');
});

test('team blog page loads at the backend route', function () {
    $response = $this->get('/team/blog');

    $response->assertOk();
    $response->assertSee('Blog Manager');
});

test('team projects manager and add page load', function () {
    $manager = $this->get('/team/projects');
    $create = $this->get('/team/projects/create');

    $manager->assertOk();
    $manager->assertSee('Projects Manager');
    $manager->assertSee('Challenge');
    $create->assertOk();
    $create->assertSee('Project Screenshots');
    $create->assertSee('Technologies Used');
});

test('team blog page loads from the backend sidebar route', function () {
    $response = $this->get('/team/blog');

    $response->assertOk();
    $response->assertSee('Blog Manager');
});

test('public team page uses the website layout', function () {
    $response = $this->get('/team');

    $response->assertOk();
    $response->assertSee('The People Behind');
    $response->assertDontSee('dashboard-sidebar');
});

test('team members manager and add page load', function () {
    $manager = $this->get('/team/members');
    $create = $this->get('/team/members/create');

    $manager->assertOk();
    $manager->assertSee('Team Manager');
    $manager->assertSee('Vikas Sharma');
    $manager->assertSee('Pooja Verma');
    $create->assertOk();
    $create->assertSee('Add New Team Member');
    $create->assertSee('LinkedIn URL');
});

test('services page includes the interactive service detail flow', function () {
    $response = $this->get('/services');

    $response->assertOk();
    $response->assertSee('Learn More');
    $response->assertSee('/services/website-development');
});

test('backend services manager and detail editor load', function () {
    $manager = $this->get('/team/services');
    $create = $this->get('/team/services/create');

    $manager->assertOk();
    $manager->assertSee('Services Manager');
    $manager->assertSee('Website Development');
    $manager->assertSee('Software Development');
    $create->assertOk();
    $create->assertSee('Add Service Detail');
    $create->assertSee('Detail Service Types');
    $create->assertSee('Process, Benefits');
});

test('backend clients flow loads', function () {
    $manager = $this->get('/team/clients');
    $create = $this->get('/team/clients/create');
    $detail = $this->get('/team/clients/dreamhome-real-estate');
    $secondDetail = $this->get('/team/clients/nexus-property-group');
    $edit = $this->get('/team/clients/dreamhome-real-estate/edit');
    $work = $this->get('/team/clients/dreamhome-real-estate/work/create');

    $manager->assertOk();
    $manager->assertSee('Clients');
    $manager->assertSee('DreamHome Real Estate Pvt. Ltd.');
    $manager->assertDontSee('>Open</a>');
    $manager->assertSee('Add Service');
    $create->assertOk();
    $create->assertSee('Add New Client');
    $create->assertSee('projectPrice');
    $create->assertSee('paymentRule');
    $edit->assertOk();
    $edit->assertSee('Edit Client');
    $edit->assertSee('Save Changes');
    $work->assertOk();
    $work->assertSee('Add Client Work');
    $work->assertSee('Delivery Model');
    $work->assertSee('Add Point');
    $work->assertSee('client_needs[0]');
    $detail->assertOk();
    $detail->assertSee('client-detail-page');
    $detail->assertSee('client-panel');
    $detail->assertSee('DreamHome Real Estate Pvt. Ltd.');
        $detail->assertSee('Open Brief');
        $detail->assertSee('service-brief');
    $secondDetail->assertOk();
    $detail->assertSee('payment-summary');
    $detail->assertSee('invoice-list');
});

    test('backend project detail page loads', function () {
        $response = $this->get('/team/projects/nivara-finance');

        $response->assertOk();
        $response->assertSee('Nivara Finance Dashboard');
        $response->assertSee('Delivery Progress');
        $response->assertSee('payment-summary');
        $response->assertSee('Project Gallery');
    });

test('website development opens the reference-style service page', function () {
    $response = $this->get('/services/website-development');

    $response->assertOk();
    $response->assertSee('services-reference-hero');
    $response->assertSee('service-types-section');
});
