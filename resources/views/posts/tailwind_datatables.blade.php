@extends('layouts.app')


@section('content')
<div class="container w-full mx-auto text-center bg-cover bg-center mb-2">
    <h1 class="text-3xl sm:text-4xl text-left md:text-center font-medium tracking-tighter lg:text-5xl">
        Codes en Datatables
    </h1>
    <p class="font-mono font-light italic text-center">
        Portats de la taula posts de bbdd postslar11
    </p>
</div>

<div class="container mx-auto px-2 py-4">
    <!-- Taula de posts -->
    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
        <table id="postsTable" class="stripe hover" style="width:100%; padding-top: 1em; padding-bottom: 1em;">
            <thead class="bg-gray-50">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Títol</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Extracte</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Categoria</th>
                    <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Data</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-sm">
                            <a href="{{ route('posts.detalle', $post->id) }}" class="text-blue-500 hover:underline">
                                {{ $post->title }}
                            </a>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-sm">
                            {{ $post->excerpt }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-sm">
                            {{ $post->category->name ?? 'Sense categoria' }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-sm">
                            {{ $post->updated_at}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="border border-gray-300 px-4 py-2 text-center text-sm text-gray-500">
                            No hi ha posts disponibles.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Incluir scripts necessaris per a DataTables -->
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
                lengthMenu: "Mostrar _MENU_ entrades",
                info: "Mostrant _START_ a _END_ de _TOTAL_ entrades",
                paginate: {
                    first: "Primer",
                    last: "Últim",
                    next: "Següent",
                    previous: "Anterior"
                }
            }
        });
    });
</script>
@endsection
