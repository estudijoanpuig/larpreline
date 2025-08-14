@extends('layouts.bootstrap')
@section('title', 'Gal.leria de posts')
@section('subtitle', 'bootstrp made')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="company-badge mb-4">
                            <i class="bi bi-gear-fill me-2"></i>
                            Working for your success
                        </div>

                        <h1 class="mb-4">
                            Maecenas Vitae <br>
                            Consectetur Led <br>
                            <span class="accent-text">Vestibulum Ante</span>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                            Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
                        </p>

                        <div class="hero-buttons">
                            <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="btn btn-link mt-2 mt-sm-0 glightbox">
                                <i class="bi bi-play-circle me-1"></i>
                                Play Video
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                        <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

                        <div class="customers-badge">
                            <div class="customer-avatars">
                                <img src="assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                                <img src="assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                                <img src="assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                                <img src="assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                                <img src="assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                                <span class="avatar more">12+</span>
                            </div>
                            <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container py-4">
            <!-- Formulari de Cerca -->
            <form method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar en títols"
                        value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>

            <!-- Categories -->
            <div class='mb-4'>
                <ul class='nav nav-pills'>
                    <li class='nav-item'>
                        <a class='nav-link {{ request()->has('category_id') ? '' : 'active' }}'
                            href="{{ route('bootstrap_gallery') }}">Totes</a>
                    </li>
                    @foreach ($categories as $category)
                        <li class='nav-item'>
                            <a class='nav-link {{ request('category_id') == $category->id ? 'active' : '' }}'
                                href="{{ route('bootstrap_gallery', ['category_id' => $category->id]) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Posts -->
            @if ($posts->count())
                <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3'
                    data-masonry='{"percentPosition": true }'>
                    @foreach ($posts as $post)
                        <div class='col'>
                            <div class='card h-100'>
                                <img src='{{ asset('storage/' . $post->img) }}' class='card-img-top w-100'
                                    style='object-fit: contain;' alt='{{ $post->title }}'>
                                <div class='card-body'>
                                    <h5 class='card-title text-primary'>
                                        <a href="{{ route('posts.detalle', $post->id) }}">{{ $post->title }}</a>
                                    </h5>
                                    <p class='card-text'>{{ $post->excerpt }}</p>

                                    <!-- Etiquetes -->
                                    @if ($post->etiquetas->count())
                                        <div class='d-flex flex-wrap gap-1 align-items-center'>
                                            @foreach ($post->etiquetas as $etiqueta)
                                                <a href="{{ route('bootstrap_gallery', ['etiqueta_id' => $etiqueta->id]) }}"
                                                    class='text-decoration-none'>
                                                    {!! $etiqueta->svg !!}
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class='text-center'>No hi ha posts disponibles.</p>
            @endif



        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>


    </section><!-- /Hero Section -->





@stop
