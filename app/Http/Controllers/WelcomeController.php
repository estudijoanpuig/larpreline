<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Etiqueta;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $etiquetas = Etiqueta::all();
        $posts = Post::orderBy('title', 'desc')->get(); // Ordenar per títol descendent
        return view('welcome', compact('categories', 'etiquetas', 'posts'));
    }

    public function filterByCategory($categoryId)
    {
        $categories = Category::all();
        $etiquetas = Etiqueta::all();
        $posts = Post::where('category_id', $categoryId)
                     ->orderBy('title', 'desc') // Ordenar per títol descendent
                     ->get();
        return view('welcome', compact('categories', 'etiquetas', 'posts'));
    }

    public function search()
{
    $query = request('query'); // Obtenir la consulta de cerca des de la URL o formulari

    // Obtenir categories i etiquetes
    $categories = Category::all();
    $etiquetas = Etiqueta::all();

    // Buscar coincidències en títol, categories o etiquetes
    $posts = Post::where('title', 'like', '%' . $query . '%') // Cerca en títol
        ->orWhereHas('category', function ($q) use ($query) { // Cerca en categories
            $q->where('name', 'like', '%' . $query . '%');
        })
        ->orWhereHas('etiquetas', function ($q) use ($query) { // Cerca en etiquetes
            $q->where('name', 'like', '%' . $query . '%');
        })
        ->orderBy('title', 'desc') // Ordenar per títol descendent
        ->paginate(10); // Canviem get() per paginate()

    // Afegir la consulta de cerca als enllaços de paginació
    $posts->appends(request()->query());

    return view('welcome', compact('categories', 'etiquetas', 'posts'));
}

    public function filterByTag($tagId)
    {
        $categories = Category::all();
        $etiquetas = Etiqueta::all();

        // Obtenir els posts associats a l'etiqueta seleccionada
        $etiqueta = Etiqueta::findOrFail($tagId);
        $posts = $etiqueta->posts()->orderBy('title', 'desc')->get();

        return view('welcome', compact('categories', 'etiquetas', 'posts', 'etiqueta'));
    }
}


