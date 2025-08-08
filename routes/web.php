<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyTestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostFinanzaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Galleryb5Controller;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

use App\Models\Post;

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/questions', function () {
    return view('questions');
});

Route::get('/sobre_mi', function () {
    return view('sobre_mi');
});

Route::get('/blog', [PostController::class, 'blog'])->name('blog');


Route::get('/install', function () {
    return view('install');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');


Route::get('/tailwind_datatables', [PostController::class, 'tailwind_datatables'])->name('tailwind_datatables');


Route::get('/categories/{id}', [PostController::class, 'welcome'])->name('categories.filter');

Route::get('/search', [WelcomeController::class, 'search'])->name('search');
Route::get('/etiquetas/{id}', [WelcomeController::class, 'filterByTag'])->name('etiquetas.filter');

Route::get('/', [PostController::class, 'welcome'])->name('posts.gallery');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/bootstrap_gallery', [PostController::class, 'bootstrap_gallery'])->name('bootstrap_gallery');
Route::get('/bootstrap_datatables', [PostController::class, 'bootstrap_datatables'])->name('posts.bootstrap_datatables');


Route::get('/indexgallery', [PostController::class, 'indexGallery'])->name('posts.indexGallery');
Route::get('/posts/{id}', [PostController::class, 'detalle'])->name('posts.detalle');


Route::get('/datatables', [PostController::class, 'datatables'])->name('datatables');
Route::get('/videos', [PostController::class, 'videos'])->name('posts.videos');
Route::get('/sorpren', [VideosController::class, 'videos'])->name('videos.sorpren');
Route::get('/filtered-slider', [PostController::class, 'filteredSlider'])->name('filtered.slider');


Route::get('/routes', [RouteController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
