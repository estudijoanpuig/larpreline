<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Etiqueta;
use App\Models\PostEtiqueta;
use Purifier;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function __construct()
    {
        // Compartir categories i etiquetes amb totes les vistes
        \View::share('categories', Category::all());
        \View::share('etiquetas', Etiqueta::all());
    }
	
	// FUNCIO PER LA PAGINA BLOG
	public function blog(Request $request)
{
    // Buscar l'etiqueta "laravel" en minúscules
    $etiquetaLaravel = Etiqueta::where('name', 'laravel')->first();

    if (!$etiquetaLaravel) {
        return redirect()->route('posts.index')->with('error', 'No hi ha posts amb l\'etiqueta laravel.');
    }

    // Obtenir tots els posts que tenen l'etiqueta "laravel"
    $query = $etiquetaLaravel->posts()->with(['category', 'etiquetas'])->orderBy('updated_at', 'desc');

    // Filtrar per una altra etiqueta seleccionada
    if ($request->has('etiqueta_id') && !empty($request->etiqueta_id)) {
        $query->whereHas('etiquetas', function ($q) use ($request) {
            $q->where('etiquetas.id', $request->etiqueta_id);
        });
    }

    // ✅ Ara definim $posts
    $posts = $query->paginate(12);

    // Obtenir totes les altres etiquetes associades als posts amb "laravel", ordenades per nom ascendent
$altresEtiquetes = Etiqueta::whereHas('posts', function ($query) use ($etiquetaLaravel) {
    $query->whereHas('etiquetas', function ($q) use ($etiquetaLaravel) {
        $q->where('etiquetas.id', $etiquetaLaravel->id);
    });
})
->where('id', '!=', $etiquetaLaravel->id)
->orderBy('name', 'asc') // Ordenar per nom ascendent
->get();

    // ✅ Finalment, retornem la vista
    return view('blog', compact('posts', 'altresEtiquetes'));
}

 	public function show($id)
    {
        // Obtenir el post amb la seva categoria
        $post = Post::with('category')->findOrFail($id);

        // Obtenir les etiquetes del post
        $tags = Etiqueta::whereIn('id', function ($query) use ($id) {
            $query->select('etiqueta_id')
                  ->from('post_etiquetas')
                  ->where('post_id', $id);
        })->get();

        // Obtenir el post anterior
        $previousPost = Post::where('id', '<', $id)->orderBy('id', 'desc')->first();

        // Obtenir el post següent
        $nextPost = Post::where('id', '>', $id)->orderBy('id', 'asc')->first();

        // Obtenir articles relacionats per etiquetes
        $relatedPosts = Post::whereIn('id', function ($query) use ($tags) {
            $query->select('post_id')
                  ->from('post_etiquetas')
                  ->whereIn('etiqueta_id', $tags->pluck('id'));
        })
        ->where('id', '!=', $id)
        ->orderBy('created_at', 'desc')
        ->limit(6)
        ->get();

        return view('posts.show', compact('post', 'tags', 'previousPost', 'nextPost', 'relatedPosts'));
    }

    
	
	public function tailwind_datatables()
{
    $posts = \App\Models\Post::with('category')
        ->orderBy('updated_at', 'desc')
        ->get();

    return view('posts.tailwind_datatables', compact('posts'));
}

	
	public function index()
{
    $posts = Post::all(); // Recupera tots els posts
    return view('posts.index', compact('posts')); // Renderitza la vista 'posts/index.blade.php'
}

	public function videos()
{
    // Extreu categories amb vídeos (només amb camp youtube no nul)
    $categories = \App\Models\Category::with(['posts' => function ($query) {
        $query->whereNotNull('youtube');
    }])->get();

    // Retorna la vista amb les categories
    return view('posts.videos', compact('categories'));
}

public function filteredSlider()
{
    // Filtrar posts per categoria 'people' i etiqueta 'models_people'
    $filteredPosts = \App\Models\Post::where('category_id', 7)
        ->whereHas('etiquetas', function ($query) {
            $query->where('etiquetas.id', 22); // Prefixar amb 'etiquetas.'
        })
		->orderBy('title', 'asc') // Ordena pel camp 'title' en ordre ascendent
        ->get();

    // Retornar els posts a la vista
    return view('videos.filtered_slider', compact('filteredPosts'));
}


    /**
     * Mostra la pàgina de benvinguda (welcome).
     */
  public function welcome(Request $request, $id = null)
{
    $query = Post::with(['category', 'etiquetas']); // Carregar categories i etiquetes

    // Cercar per títol
    if ($request->has('search')) {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    // Filtrar per categoria
    if ($id) {
        $query->where('category_id', $id);
    } elseif ($request->has('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    // 🔹 Filtrar per etiqueta (EVITAR QUE RETORNI UNA COL·LECCIÓ)
    if ($request->has('etiqueta_id')) {
        $query->whereHas('etiquetas', function ($q) use ($request) {
            $q->where('etiquetas.id', $request->etiqueta_id);
        });
    }

    // 🔹 Afegeix paginació al final
    $posts = $query->orderBy('updated_at', 'desc')->paginate(12);
	
	

    return view('welcome', compact('posts'));
}



    public function bootstrap_gallery(Request $request)
    {
        Paginator::useBootstrapFive(); // Configura la paginació per a Bootstrap 5

        $query = Post::with(['category', 'etiquetas']); // Carregar categories i etiquetes

        // Cercar per títol
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filtrar per categoria
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filtrar per etiqueta
        if ($request->has('etiqueta_id')) {
            $query->whereHas('etiquetas', function ($q) use ($request) {
                $q->where('etiquetas.id', $request->etiqueta_id);
            });
        }

        $posts = $query->orderBy('updated_at', 'desc')->paginate(25);

        return view('posts.bootstrap_gallery', compact('posts'));
    }
	
	public function bootstrap_datatables()
{
    $posts = Post::with(['category', 'etiquetas'])->orderBy('updated_at', 'desc')->get();
    return view('posts.bootstrap_datatables', compact('posts'));
}


public function indexGallery(Request $request)
{
    $query = Post::with(['category', 'etiquetas']);

    // Aplicar búsqueda
    if ($request->has('search')) {
        $query->where('title', 'like', '%' . $request->search . '%');
    }

    // Aplicar filtro de categoría
    if ($request->has('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    // Aplicar filtro de etiqueta
    if ($request->has('etiqueta_id')) {
        $query->whereHas('etiquetas', function ($q) use ($request) {
            $q->where('etiquetas.id', $request->etiqueta_id);
        });
    }

    // Ordenar los resultados por el campo 'updated_at' en orden descendente
    $query->orderBy('updated_at', 'desc');
    $posts = $query->get();

    // Obtener todas las categorías para la lista horizontal
    $categories = Category::all();

    return view('posts.index_gallery', compact('posts', 'categories'));
}


    public function datatables(Request $request)
    {
        $query = Post::with(['category', 'etiquetas']);

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Ordenar los resultados por el campo 'updated_at' en orden descendente
        $query->orderBy('updated_at', 'desc');
        $posts = $query->get();

        return view('posts.datatables', compact('posts'));
    }

    /**
     * Filtra els posts per categoria.
     */
    public function filterByCategory($id)
    {
        $posts = Post::where('category_id', $id)->with(['category', 'etiquetas'])->paginate(12);

        return view('posts.index', compact('posts'));
    }

    /**
     * Filtra els posts per etiqueta.
     */
    public function filterByEtiqueta($id)
    {
        $etiqueta = Etiqueta::findOrFail($id);
        $posts = $etiqueta->posts()->with(['category', 'etiquetas'])->paginate(12);

        return view('posts.index', compact('posts', 'etiqueta'));
    }

    /**
     * Mostra els detalls d'un post.
     */
    public function detalle($id)
    {
        $post = Post::with(['category', 'etiquetas'])->findOrFail($id);

        return view('posts.detalle', compact('post'));
    }

    /**
     * Formulari per crear un nou post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Desa un nou post.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        $post = Post::create($request->only(['title', 'category_id', 'excerpt', 'content']));

        return redirect()->route('welcome')->with('success', 'Post created successfully.');
    }

    

    /**
     * Actualitza un post existent.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->only(['title', 'category_id', 'excerpt', 'content']));

        return redirect()->route('welcome')->with('success', 'Post updated successfully.');
    }

    /**
     * Elimina un post.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('welcome')->with('success', 'Post deleted successfully.');
    }
}
