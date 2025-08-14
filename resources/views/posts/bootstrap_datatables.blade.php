@extends('layouts.bootstrap')
@section('title', 'Posts en datatables')
@section('subtitle', 'aviam el jquery')
@section('content')


    <div class="page-title light-background">
        <div class="container">
            <h1>@yield('title')</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">@yield('title')</li>
                </ol>
            </nav>
        </div>
    </div>
	

    <div class="container mx-auto px-2 py-4">
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <!-- Taula -->
            <table id="postsTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Títol</th>
                        <th>Resum</th>
                        <th>Categoria</th>
                        <th>Enllaç</th>
                        <th>Ins</th>
                        <th>Face</th>
                        <th>YouTube</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td><a href="{{ route('posts.detalle', $post->id) }}">{{ $post->title }} </a></td>
                            <td>{{ $post->excerpt }}</td>
                            <td>{{ $post->category_name ?? 'Sense Categoria' }}</td>
                            <td>
                                @if (!empty($post->url))
                                    <a href="{{ $post->url }}" target="_blank"><i class="fas fa-link"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!empty($post->ins))
                                    <a href="{{ $post->ins }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!empty($post->face))
                                    <a href="{{ $post->face }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                @endif
                            </td>
                            <td>
                                @if (!empty($post->youtube))
                                    <a data-fancybox="gallery"href="{{ $post->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
	
	
	<!-- Incluir scripts necesarios para DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Configurar DataTables -->
<script>
    $(document).ready(function () {
        $('#postsTable').DataTable({
            responsive: true,
            language: {
                search: "Buscar:",
                lengthMenu: "Mostrar _MENU_ entradas",
                info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior"
                }
            }
        });
    });
</script>
	
	
@endsection

