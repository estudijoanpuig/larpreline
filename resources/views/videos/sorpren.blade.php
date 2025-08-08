@extends('layouts.uikit')

@section('title', 'Galeria Videos Impactant')
@section('subtitle', 'Una experiència visual amb els teus vídeos!')

@section('content')
<div class="uk-container uk-container-expand uk-background-secondary" uk-filter="target: .js-filter">

    <!-- Llista de categories -->
    <ul class="uk-subnav uk-subnav-pill uk-flex-center">
        <li uk-filter-control><a href="#">Totes</a></li>
        @foreach ($categories as $category)
            <li uk-filter-control="[data-category='{{ $category->id }}']">
                <a href="#">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>

    <!-- Galeria de vídeos -->
    <div class="js-filter uk-grid uk-grid-match uk-child-width-1-2 uk-child-width-1-4@m uk-grid-large" uk-grid>
        @foreach ($categories as $category)
            @foreach ($category->posts as $post)
                @php
                    // Obtenir la miniatura del vídeo
                    $youtubeId = Str::afterLast($post->youtube, 'v=');
                    $thumbnail = "https://img.youtube.com/vi/{$youtubeId}/hqdefault.jpg";
                @endphp
                <div data-category="{{ $category->id }}">
                    <div class="uk-card uk-card-hover uk-card-default uk-card-body uk-padding-remove">
                        <!-- Miniatura -->
                        <a href="https://www.youtube.com/watch?v={{ $youtubeId }}" data-fancybox class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img src="{{ $thumbnail }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                            <!-- Efecte hover -->
                            <div class="uk-transition-slide-bottom uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <span uk-icon="icon: play; ratio: 2" class="text-white"></span>
                            </div>
                        </a>
                        <!-- Detalls del vídeo -->
                        <div class="uk-card-footer uk-text-center">
                            <h3 class="uk-card-title uk-text-bold">{{ $post->title }}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Verifica si UIKit està funcionant correctament
        console.log("UIKit carregat i funcional.");
    });
</script>
@endsection
