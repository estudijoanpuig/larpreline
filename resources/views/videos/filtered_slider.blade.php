@extends('layouts.uikit')

@section('title', 'Filtered Slider')
@section('subtitle', 'Carrusel filtrat per categoria i etiqueta')

@section('content')
<div class="uk-container uk-container-expand  uk-background-secondary">
    <h1 class="uk-text-center">Carrusel de Models People</h1>
    <div class="uk-visible-toggle uk-slider uk-slider-container" uk-slider="center: true; autoplay: true; autoplay-interval: 3000; pause-on-hover: true;">
        <div class="uk-position-relative uk-visible-toggle uk-light">
            <ul class="uk-slider-items uk-grid uk-child-width-1-3@m">
                @foreach ($filteredPosts as $post)
                    <li>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <!-- Miniatura del post -->
                            <div class="uk-card-media-top">
                                <img src="storage/{{ $post->img }}" alt="{{ $post->title }}" class="scaled-image">
                            </div>
                            <!-- Cos del post -->
                            <div class="uk-card-body uk-text-center">
                                <h3 class="uk-card-title">{{ $post->title }}</h3>
                                <p>{{ $post->excerpt }}</p>
                                <!-- Botons -->
                                <div class="uk-button-group">
                                    <a href="{{ $post->youtube }}" class="uk-button uk-button-primary" data-fancybox>Watch</a>
                                    <a href="{{ route('posts.detalle', $post->id) }}" class="uk-button uk-button-secondary">Details</a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <a class="uk-position-center-left uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
<a class="uk-position-center-right uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    </div>
</div>
@endsection

@section('styles')
<style>
    .uk-card {
        border-radius: 10px;
        overflow: hidden;
    }
    .uk-card-media-top img {
        width: 50%; /* Redueix la mida al 50% */
        height: auto;
        object-fit: cover;
        margin: 0 auto;
    }
    .uk-button-group {
        display: flex;
        gap: 10px; /* Espai entre botons */
        justify-content: center;
        margin-top: 10px;
    }
	.uk-slidenav-previous, .uk-slidenav-next {
        color: red !important;
        background-color: transparent;
        border: 2px solid red;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    .uk-slidenav-previous:hover, .uk-slidenav-next:hover {
        background-color: red;
        color: white !important;
    }
</style>
@endsection
