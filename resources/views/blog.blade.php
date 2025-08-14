@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('title', 'Posts sobre Laravel')
@section('subtitle', 'Explora els articles relacionats amb Laravel')

@section('content')
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-10 mx-auto">
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-10">
        <h2 class="text-3xl font-extrabold leading-none block w-full py-2 text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">
            Posts sobre Laravel
        </h2>
        <p class="mt-1 text-gray-600 dark:text-neutral-400">Descobreix les últimes publicacions amb l'etiqueta Laravel.</p>
    </div>
	
	<!-- 🔹 CARD AMB DESPLEGABLE -->
<div class="w-full bg-purple-200 border border-gray-200 shadow-sm rounded-xl p-3 mb-2 dark:bg-neutral-900 dark:border-neutral-700 flex flex-wrap items-center gap-2">
    <form method="GET" action="{{ route('blog') }}" id="filterForm">
       
        <select id="etiqueta_id" name="etiqueta_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:text-white">
            <option value="">Totes les etiquetes</option>
            @foreach ($altresEtiquetes as $etiqueta)
                <option value="{{ $etiqueta->id }}" {{ request('etiqueta_id') == $etiqueta->id ? 'selected' : '' }}>
                    {{ $etiqueta->name }}
                </option>
            @endforeach
        </select>
    </form>
	<button class="bg-transparent hover:bg-purple-400 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-purple-300 hover:border-transparent rounded">
	<a href="blog?etiqueta_id=17">instal.lar </a>
	</button>
	<button class="bg-transparent hover:bg-purple-300 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-purple-300 hover:border-transparent rounded">
	<a href="blog?etiqueta_id=125">migrations </a>
	</button>
	<button class="bg-transparent hover:bg-purple-300 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-purple-300 hover:border-transparent rounded">
	<a href="blog?etiqueta_id=53">model </a>
	</button>
	<button class="bg-transparent hover:bg-purple-300 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-purple-300 hover:border-transparent rounded">
	<a href="blog?etiqueta_id=57">controller </a>
	</button>
	<button class="bg-transparent hover:bg-purple-300 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-purple-300 hover:border-transparent rounded">
	<a href="blog?etiqueta_id=116">routes </a>
	</button>
	<button class="bg-transparent hover:bg-purple-300 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-purple-400 hover:border-transparent rounded">
	<a href="blog?etiqueta_id=58">views </a>
	</button>

</div>

<!-- 🔹 JavaScript per enviar el formulari automàticament -->
<script>
    document.getElementById('etiqueta_id').addEventListener('change', function() {
        document.getElementById('filterForm').submit();
    });
</script>

    <!-- Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($posts as $post)
            <!-- Card -->
            <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="h-52 flex flex-col justify-center items-center rounded-t-xl">
                    <img src="/storage/{{ $post->img }}" alt="{{ $post->title }}" class="h-full  object-cover rounded-t-xl">
                </div>
                <div class="p-4 md:p-6">
                    <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 dark:text-blue-500">
                        {{ $post->category->name ?? 'Sense categoria' }}
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
                        {{ $post->title }}
                    </h3>
                    <p class="mt-3 text-gray-500 dark:text-neutral-500">
                         {{ Str::limit($post->excerpt, 150, '...') }}
                    </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                    @if($post->youtube)
                        <a data-fancybox="gallery"class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800" href="{{ $post->youtube }}" target="_blank">
                            video YouTube
                        </a>
                    @endif
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800" href="{{ route('posts.detalle', $post->id) }}">
                        Llegir més
                    </a>
                </div>
            </div>
            <!-- End Card -->
        @endforeach
    </div>
    <!-- End Grid -->

    <!-- Paginació -->
    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</div>
@endsection
