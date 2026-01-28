@extends('layouts.app')

@section('title', 'Our Work')

@section('content')

<section class="portfolio-banner">
    <div class="banner-overlay text-center">
        <h1 class="display-3 fw-bold">Our Work</h1>
    </div>
</section>

<div class="container py-5">

@php
$portfolio = [
    'Digital Marketing' => [
        'type' => 'image',
        'items' => [
            'dm1.jpg',
            'dm2.jpg',
            'dm3.jpg',
            'dm4.jpg',
        ]
    ],

    'Website Development' => [
        'type' => 'video',
        'items' => [
            'website-laptop-video-1_jpLg6bZD.mp4',
            'web2.mp4',
            'web3.mp4',
            'web4.mp4',
        ]
    ],

    'Photoshoot' => [
        'type' => 'video',
        'items' => [
            'Country Clean 1 video (1) (1).mp4',
            'sam-jas-3-video_ZsbwCD26.mp4',
            'sam-jas-4-video_maMgTA3E.mp4',
            'deepu-international-1-video_1fk3S1jg.mp4',
        ]
    ],

    'Product Listing' => [
        'type' => 'image',
        'items' => [
            'listing1.jpg',
            'listing2.jpg',
            'listing3.jpg',
            'listing4.jpg',
        ]
    ],

    'App Development' => [
        'type' => 'video',
        'items' => [
            'app1.mp4',
            'app2.mp4',
            'app3.mp4',
            'app4.mp4',
        ]
    ],

    'Software Development' => [
        'type' => 'video',
        'items' => [
            'soft1.mp4',
            'soft2.mp4',
            'soft3.mp4',
            'soft4.mp4',
        ]
    ],
];
@endphp

@foreach($portfolio as $service => $data)

    <div class="portfolio-section mb-5 text-center">
        <h2 class="section-title mb-4">{{ $service }}</h2>

        <div class="video-grid">
            @foreach($data['items'] as $item)
                <div class="video-card">
                    <div class="electric-border"></div>
                    <div class="electric-glow"></div>

                    <div class="card-inner">
                        @if($data['type'] === 'video')
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('assets/videos/' . $item) }}" type="video/mp4">
                            </video>
                        @else
                            <img src="{{ asset('assets/images/portfolio/' . $item) }}" alt="{{ $service }}">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <hr class="section-divider">

@endforeach

</div>

@endsection
