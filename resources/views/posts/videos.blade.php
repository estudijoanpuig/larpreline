@extends('layouts.uikit')

@section('title', 'Gal.leria de Videos')
@section('subtitle', 'estic mirant de fer un hover ben chulo amb la IA chatGpt')

@section('content')
    <div class="uk-container uk-container-expand uk-background-secondary uk-text-center" uk-filter="target: .js-filter">

        <!-- Llista de categories -->
        <ul class="uk-subnav uk-subnav-pill">
            <li uk-filter-control><a href="#">Totes</a></li>
            @foreach ($categories as $category)
                <li uk-filter-control="[data-category='{{ $category->id }}']">
                    <a href="#">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>

        <!-- Galeria de vídeos -->
        <div class="js-filter uk-grid uk-grid-match uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
            @foreach ($categories as $category)
                @foreach ($category->posts as $post)
                    @php
                        // Obtenir la miniatura del vídeo
                        $youtubeId = Str::afterLast($post->youtube, 'v=');
                        $thumbnail = "https://img.youtube.com/vi/{$youtubeId}/hqdefault.jpg";
                    @endphp
                    <div class="video-card shadow-lg " data-category="{{ $category->id }}">
                        <a data-fancybox href="https://www.youtube.com/watch?v={{ $youtubeId }}"
                            class="relative block group">
                            <!-- Miniatura -->
                            <div class="relative w-full h-80">
                                <img src="{{ $thumbnail }}" alt="Video Thumbnail"
                                    class="w-full h-full object-cover rounded">
                                <!-- Icono de play al centre -->

                            </div>
                        </a>
                        <!-- Títol del vídeo -->
                        <div class="uk-text-center uk-margin-small-top">
                            <p class=" uk-text-muted">{{ $post->title }}</p>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .video-card {
            position: relative;
            overflow: hidden;
        }

        .video-card img {
            transition: transform 0.3s ease;
        }

        .video-card:hover img {
            transform: scale(1.05);
        }

        .video-card .group:hover .opacity-0 {
            opacity: 1;
        }
    </style>
@endsection

@section('scripts')
    <script>
        // Fancybox inicialització (opcional si no està carregat ja en el layout)
        document.addEventListener("DOMContentLoaded", () => {
            Fancybox.bind("[data-fancybox]", {});
        });
    </script>
@endsection
