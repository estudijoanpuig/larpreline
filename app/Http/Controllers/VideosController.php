<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Mostra la galeria de vídeos.
     *
     * @return \Illuminate\View\View
     */
    public function videos()
    {
        // Recupera les categories amb els seus posts associats
        $categories = Category::with(['posts' => function ($query) {
            $query->whereNotNull('youtube'); // Només posts amb URL de YouTube
        }])->get();

        // Retorna la vista amb les categories i els vídeos
        return view('videos.sorpren', compact('categories'));
    }
}
