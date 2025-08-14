@extends('layouts.uikit')
@section('title', 'llista de Posts datatables ')

@section('content')

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" />


    <style type="text/css">
        h1 {
            font-family: "Monsieur La Doulaise", serif;
            font-weight: 400;
            color: white;
            font-style: normal;
            text-align: center;
            font-size: 70px;
            /* Augmenta el tamany de la lletra */
        }

        .uk-navbar-dropbar {
            background: #252121;
        }

        .uk-navbar-container:not(.uk-navbar-transparent) {
            background: #252121;
        }

        .uk-navbar-nav {
            display: flex;
            gap: 2px;
            /* Espai mínim entre elements */
        }
    </style>



    <div class="uk-container uk-container-expand uk-background-secondary uk-text-muted">

        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <td>id</td>
                    <td>category</td>
                    <td>title</td>
                    <td>resum</td>
                    <td>url</td>
                    <td>ins</td>
                    <td>face</td>
                    <td>youtube</td>


                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>


                        <td>{{ $post->category ? $post->category->name : 'Sin categoría' }}</td>

                        <td>
                            <p class="font-semibold text-blue-600"><a
                                    href="{{ route('posts.detalle', $post->id) }}">{{ $post->title }} </a></p>
                        </td>
                        <td>
                            <p class="text-gray-500">{!! $post->excerpt !!}</p>
                        </td>
                        <td>
                            @if ($post->url)
                                <a href="{{ $post->url }}" target="_blank" class="text-blue-300"><i
                                        class="fas fa-link"></i> </a>
                            @endif
                        </td>
                        <td>
                            @if ($post->ins)
                                <a href="{{ $post->ins }}" target="_blank" class="text-pink-500"><i
                                        class="fab fa-instagram"></i></a>
                            @endif
                        </td>
                        <td>
                            @if ($post->face)
                                <a href="{{ $post->face }}" target="_blank" class="text-blue-600"><i
                                        class="fab fa-facebook"></i></a>
                            @endif
                        </td>
                        <td>
                            @if ($post->youtube)
                                <a data-fancybox="gallery"href="{{ $post->youtube }}" target="_blank"
                                    class="text-red-500"><i class="fab fa-youtube"></i></a>
                            @endif
                        </td>


                    </tr>
                @endforeach
                </td>
                </tr>
            </tbody>

        </table>
    </div>

    <!-- datatables -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.8/js/dataTables.uikit.js"></script>

    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                    responsive: true
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

@stop
