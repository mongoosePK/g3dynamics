@extends('layouts.g3')

@section('content')
<div class="page-container no-padding slider-wrap col-12">
    <div class="slider-pro" id="g3slider">
            <div class="sp-slides">
                @foreach($images as $image)
                <div class="sp-slide">
                    <img class="sp-image" src="/storage/images/{{$image->image_name}}"/>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container intro-text">
    <div class="col-9 inner-text-intro">Who are we? G3 Dynamics' mission is to be the premier competition entertainment company in the world. Our focus is to host competitions across several disciplines, from shooting to archery to Major League Shooting events.</div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="decoration col-2"></div>
        <div class="col-6 col-md-2 section-text-header">MATCHES</div>
        <div class="decoration col-2"></div>
    </div>
</div>

    @foreach($posts as $post)
    <div class="container post-link col-9">
        <a href="/{{ $post->slug }}">
            <div class="col-4 post-image float-left">
                <img src="/storage/{{ $post->image }}"/>
            </div>
            <div class="col-8 float-left">
                <div class='post-title'><h2>{{ $post->title }}</h2></div>
                <div class="post-content">
                    {!! $post->body !!}
                </div>
            </div>
        </a>
    </div>
    @endforeach

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/slider-pro.min.css') }}"/>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.sliderPro.js') }}"></script>

@endsection

