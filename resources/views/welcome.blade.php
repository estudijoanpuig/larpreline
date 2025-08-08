@extends('layouts.app')
@section('ruta', '/')
@section('title', 'presentacio projecte laravel')
@section('descripcio', 'tailwind 3, filament 3.')
@section('content')


<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
  <!-- Grid -->
  <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
    <div>
      <h1 class="mt-10 mb-10 text-6xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
                <span>@yield('ruta')</span> <span class="block w-full py-4 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-purple-500 lg:inline"> @yield('title'): {{ config('app.name') }}</span> <span></span>
            </h1>

      <p class="font-mono font-light italic ">Actualitzat desde v11 a Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}), @yield('descripcio') </p>

      <!-- Buttons -->
      <div class="mt-7 grid gap-3 w-full sm:inline-flex">
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
          Get started
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          Contact sales team
        </a>
      </div>
      <!-- End Buttons -->
<h1 class="mt-10 mb-10 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-4xl md:tracking-tight">
                 <span class="block w-full py-4 text-gray-900">gal.leria de posts</span> <span></span>
            </h1>

      
    </div>
    <!-- End Col -->

    <div class="relative ms-4">
      <img class=" rounded-md" src="{{ asset('images/joan.jpg') }}" alt="Hero Image">
      <div class="absolute inset-0 -z-1 bg-linear-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div>

      <!-- SVG-->
      <div class="absolute bottom-0 start-0">
        <svg class="w-2/3 ms-auto h-auto text-white dark:text-neutral-900" width="630" height="451" viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="531" y="352" width="99" height="99" fill="currentColor"/>
          <rect x="140" y="352" width="106" height="99" fill="currentColor"/>
          <rect x="482" y="402" width="64" height="49" fill="currentColor"/>
          <rect x="433" y="402" width="63" height="49" fill="currentColor"/>
          <rect x="384" y="352" width="49" height="50" fill="currentColor"/>
          <rect x="531" y="328" width="50" height="50" fill="currentColor"/>
          <rect x="99" y="303" width="49" height="58" fill="currentColor"/>
          <rect x="99" y="352" width="49" height="50" fill="currentColor"/>
          <rect x="99" y="392" width="49" height="59" fill="currentColor"/>
          <rect x="44" y="402" width="66" height="49" fill="currentColor"/>
          <rect x="234" y="402" width="62" height="49" fill="currentColor"/>
          <rect x="334" y="303" width="50" height="49" fill="currentColor"/>
          <rect x="581" width="49" height="49" fill="currentColor"/>
          <rect x="581" width="49" height="64" fill="currentColor"/>
          <rect x="482" y="123" width="49" height="49" fill="currentColor"/>
          <rect x="507" y="124" width="49" height="24" fill="currentColor"/>
          <rect x="531" y="49" width="99" height="99" fill="currentColor"/>
        </svg>
      </div>
      <!-- End SVG-->
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Hero -->
<div class="relative overflow-hidden">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-5 sm:py-10">
    <div class="text-center">
      

      <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
        <!-- Form -->
        <form method="GET" action="{{ route('search') }}">
    <div class="relative z-10 flex gap-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-gray-900/20">
        <div class="w-full">
            <label for="hs-search-article-1" class="block text-sm text-gray-700 font-medium dark:text-white"><span class="sr-only">Search article</span></label>
            <input type="text" name="query" id="hs-search-article-1" class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search article">
        </div>
        <div>
            <button type="submit" class="size-[46px] inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </button>
        </div>
    </div>
</form>

        <!-- End Form -->

        <!-- SVG Element -->
        <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
          <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- End SVG Element -->

        <!-- SVG Element -->
        <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
          <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- End SVG Element -->
      </div>

      <div class="mt-10 sm:mt-20">
    @foreach($categories as $category)
       <a class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" 
   href="{{ route('categories.filter', $category->id) }}">
    {!! $category->svg !!} {{ $category->name }}
</a>
    @endforeach
</div>

    </div>
  </div>
</div>
<!-- End Hero -->


<div class="container mx-auto px-4">


 <div class="masonry">
                @foreach ($posts as $post)
                    <div class="masonry-item bg-white p-6 rounded-lg shadow-lg">
                        <a href="{{ route('post.show', $post->id) }}">
                            <img src="/storage/{{ $post->img }}" class="w-full h-90 object-cover object-center mb-6"
                                alt="{{ $post->title }}">
                            <h2 class="text-lg text-cyan-600 font-medium title-font mb-4 break-words">{{ $post->title }}</h2>
                            <p class="leading-relaxed text-sm mb-4">{!! $post->excerpt !!}</p>
                        </a>
                        <div class="flex space-x-4 mt-4">
                            @if ($post->url)
                                <a href="{{ $post->url }}" target="_blank" class="text-blue-500">
                                    <i class="fas fa-link"></i>
                                </a>
                            @endif
                            @if ($post->ins)
                                <a href="{{ $post->ins }}" target="_blank" class="text-pink-500">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            @endif
                            @if ($post->face)
                                <a href="{{ $post->face }}" target="_blank" class="text-blue-700">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            @endif
                            @if ($post->youtube)
                                <a data-fancybox="gallery" href="{{ $post->youtube }}" target="_blank"
                                    class="text-red-500">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            @endif
                        </div>
                        <div class="mt-4">
                            @foreach ($post->etiquetas as $etiqueta)
                                <a href="{{ route('posts.gallery', ['etiqueta_id' => $etiqueta->id]) }}"
                                    class="inline-block bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded hover:bg-green-200">
                                    {{ $etiqueta->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

</div>

<div class="mt-6 flex justify-center">
    {{ $posts->appends(request()->query())->links('pagination::tailwind') }}
</div>





@stop