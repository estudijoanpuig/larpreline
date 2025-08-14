@extends('layouts.uikit')
@section('title', 'Gal.leria de posts')
@section('subtitle', 'amb cards gallery Zzseba78')
@section('content')

    <section class="uk-section uk-section-small uk-section-default uk-background-secondary">
        <div class="uk-container uk-container-expand uk-margin-large-bottom">
            <ul class="uk-subnav uk-subnav-pill">
                <li class="uk-active" data-uk-filter-control><a href="{{ route('posts.indexGallery') }}">Show All</a></li>
                @foreach ($categories as $categoria)
                    <li data-uk-filter-control=".{{ strtolower(str_replace(' ', '-', $categoria->name)) }}-card">
                        <a href="#">{{ $categoria->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl uk-grid-match js-filter"
                data-uk-grid="masonry: true">
                @foreach ($posts as $post)
                    <div class="{{ strtolower(str_replace(' ', '-', $post->category->name)) }}-card"
                        data-tags="{{ strtolower($post->title . ' ' . $post->etiquetas->pluck('name')->implode(' ')) }}">
                        <div class="uk-card uk-card-small uk-card-default">
                            <div class="uk-card-header">
                                <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <span class="cat-txt">{{ $post->category->name }}</span>
                                    </div>
                                    <div class="uk-width-auto uk-text-right uk-text-muted">
                                        <span data-uk-icon="icon:clock; ratio: 0.8"></span> {{ $post->updated_at }}
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-media">
                                <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                    <img class="lazy" data-src="storage/{{ $post->img }}" data-uk-img
                                        alt="{{ $post->title }}">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <a href="{{ route('posts.detalle', $post->id) }}">
                                    <h4 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">
                                        {{ $post->title }}
                                    </h4>
                                </a>
                                <p class="uk-text-small uk-text-muted">{{ $post->excerpt }}</p>
                                <div class="uk-flex uk-flex-wrap">
                                    @if ($post->url)
                                        <a href="{{ $post->url }}" target="_blank" class="uk-icon-link"
                                            uk-icon="icon: link"></a>
                                    @endif
                                    @if ($post->ins)
                                        <a href="{{ $post->ins }}" target="_blank" class="uk-icon-link"
                                            uk-icon="icon: instagram"></a>
                                    @endif
                                    @if ($post->face)
                                        <a href="{{ $post->face }}" target="_blank" class="uk-icon-link"
                                            uk-icon="icon: facebook"></a>
                                    @endif
                                    @if ($post->youtube)
                                        <a data-fancybox="gallery" href="{{ $post->youtube }}" target="_blank"
                                            class="uk-icon-link" uk-icon="icon: youtube"></a>
                                    @endif
                                </div>
                                <div class="uk-flex uk-flex-wrap">
                                    @foreach ($post->etiquetas as $etiqueta)
                                        <a href="#" data-uk-tooltip="title: {{ $etiqueta->name }}"
                                            data-uk-filter-control="[data-tags*='{{ strtolower(str_replace(' ', '-', $etiqueta->name)) }}']">
                                            {!! $etiqueta->svg !!}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function filterCards(value) {
            const searchValue = value.toLowerCase().trim();
            const cards = document.querySelectorAll('[data-tags]');
            cards.forEach(card => {
                const tags = card.getAttribute('data-tags').toLowerCase();
                if (tags.includes(searchValue)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>


@stop
