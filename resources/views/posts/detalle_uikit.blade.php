@extends('layouts.uikit')
@section('title', $post->title)
@section('subtitle', 'gal.leria de fotos')
@section('content')

    <style>
        h3 {
            color: #6c757d;
            /* Color gris fosc per indicar que està apagat */
            font-style: italic;
            /* Opcional: afegeix estil cursiva */
        }
    </style>

    <!-- NanoGallery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>

    <div class="uk-container uk-container-expand post-container uk-background-secondary uk-padding-remove">

        <p class="uk-text-meta uk-text-center uk-padding-remove">
            <a href="{{ route('posts.indexGallery') }}" style="color: red; font-size: 3rem; font-weight: bold;">
                <span class="uk-margin-small-right" uk-icon="icon: arrow-left; ratio: 3.5"></span>
                <span uk-icon="icon: check; ratio: 3.5"></span>
            </a>Created at: {{ $post->created_at }} | Updated at: {{ $post->updated_at }}
        </p>

        <!-- Links socials -->
        <div class="uk-flex uk-flex-center uk-margin-top uk-text-muted uk-padding-remove">
            @if ($post->url)
                <a href="{{ $post->url }}" target="_blank" class="uk-icon-button" uk-icon="link"></a>
            @endif
            @if ($post->ins)
                <a href="{{ $post->ins }}" target="_blank" class="uk-icon-button" uk-icon="instagram"></a>
            @endif
            @if ($post->face)
                <a href="{{ $post->face }}" target="_blank" class="uk-icon-button" uk-icon="facebook"></a>
            @endif
            @if ($post->youtube)
                <a data-fancybox="gallery" href="{{ $post->youtube }}" target="_blank" class="uk-icon-button"
                    uk-icon="youtube"></a>
            @endif
        </div>

        <!-- Contingut del post -->
        <div id="post-content" class="uk-container -top uk-text-muted">
            {!! $post->content !!}
        </div>

        <!-- Galeria si la categoria és 7 -->
        @if ($post->category_id == 7)
            <div id="nanogallery2" class="uk-margin-large-top"
                data-nanogallery2='{
            "thumbnailHeight": 350,
            "thumbnailWidth": 350,
            "itemsBaseURL": "{{ url('/img/people/' . urlencode($post->title)) }}/"
        }'>
                @for ($i = 1; $i <= 18; $i++)
                    <a href="{{ url('/img/people/' . urlencode($post->title) . '/' . $i . '.jpg') }}"
                        data-fancybox="gallery" data-ngThumb="{{ $i }}.jpg">
                        <img src="{{ url('/img/people/' . urlencode($post->title) . '/' . $i . '.jpg') }}"
                            alt="{{ $post->title }} {{ $i }}" class="w-full h-auto">
                    </a>
                @endfor
            </div>
        @endif

        <!-- Imatge del post -->
        <div class="uk-flex uk-flex-center uk-margin-large-top">
            <img src="{{ asset('storage/' . $post->img) }}" alt="{{ $post->title }}" class="uk-border-rounded"
                style="max-height: 300px; object-fit: cover;">
        </div>

    @stop
