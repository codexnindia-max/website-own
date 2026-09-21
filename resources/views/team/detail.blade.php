@extends('layouts.site', ['title' => $member[0], 'description' => $member[2]])
@section('content')
@include('partials.project-hero', [
    'heroProject' => [
        'breadcrumb' => 'Home > Team > ' . $member[0],
        'title' => 'Meet',
        'titleAccent' => $member[0],
        'description' => $member[2],
        'badges' => ['Leadership', 'Strategy', 'Execution'],
        'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80',
        'floatingLabel' => 'Team',
        'floatingTitle' => "Build\nWith\nTrust",
    ],
])
@endsection
