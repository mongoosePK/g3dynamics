@extends('layouts.g3')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-12 page-container no-padding slider-wrap">
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

<div class="col-lg-9 col-md-9 col-sm-9 col-9 page-container no-padding intro-text">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 inner-text-intro">Who are we? G3 Dynamics' mission is to be the premier competition entertainment company in the world. Our focus is to host competitions across several disciplines, from shooting to archery to Major League Shooting events.</div>
</div>

<div class="col-lg-9 col-md-9 col-sm-9 col-9 page-container no-padding matches-header" id="matches">
    <div class="col-lg-6 col-md-6 col-sm-6 col-6 page-container section-header"> 
        <div class="decoration col-lg-4 col-md-4 col-sm-4 col-4 float-left"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4 float-left section-text-header">MATCHES</div>
        <div class="decoration col-lg-4 col-md-4 col-sm-4 col-4 float-left"></div>
    </div>

    @foreach($posts as $post)
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 post-container post-link">
        <a href="/{{ $post->slug }}">
            <div class="col-lg-4 col-md-4 col-sm-4 col-4 post-image float-left">
                <img src="/storage/{{ $post->image }}" />
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-8 post-text float-left">
                <div class='post-title'><h2>{{ $post->title }}</h2></div>
                <div class="post-content">
                    {!! $post->body !!}
                </div>
            </div>
        </a>
    </div>
    @endforeach

</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/slider-pro.min.css') }}"/>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.sliderPro.js') }}"></script>

@endsection