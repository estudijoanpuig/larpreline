<?php
 
// app/Http/Controllers/WelcomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Etiqueta;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categoria = Category::where('name', 'pagines')->first();
        $etiquetaBase = Etiqueta::where('name', 'larpreline.test')->first();

        $posts = Post::where('category_id', $categoria->id)
            ->whereHas('etiquetas', function ($query) use ($etiquetaBase) {
                $query->where('etiquetas.id', $etiquetaBase->id);
            })
            ->with('etiquetas')
            ->get();

        $altresEtiquetes = Etiqueta::whereHas('posts', function ($query) use ($categoria, $etiquetaBase) {
            $query->where('category_id', $categoria->id)
                ->whereHas('etiquetas', function ($q) use ($etiquetaBase) {
                    $q->where('etiquetas.id', $etiquetaBase->id);
                });
        })->where('id', '!=', $etiquetaBase->id)->distinct()->get();

        // Filtre opcional des de la URL
        $filtrada = $request->get('etiqueta');
        if ($filtrada) {
            $posts = $posts->filter(function ($post) use ($filtrada) {
                return $post->etiquetas->contains('name', $filtrada);
            });
        }

        return view('home', compact('posts', 'altresEtiquetes'));
    }
}
