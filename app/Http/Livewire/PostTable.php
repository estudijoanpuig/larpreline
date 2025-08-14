<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\{Column, PowerGrid, PowerGridComponent, PowerGridEloquent};

class PostTable extends PowerGridComponent
{
    public function setUp(): array
    {
        return [
            PowerGrid::header()->showSearchInput(), // Afegeix barra de cerca
        ];
    }

    public function datasource(): Builder
    {
        // Recupera tots els posts
        return Post::query();
    }

    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id') // Afegir columna ID
            ->addColumn('title') // Afegir columna Títol
            ->addColumn('content') // Afegir columna Contingut
            ->addColumn('created_at_formatted', fn (Post $model) => $model->created_at->format('d/m/Y'))
            ->addColumn('updated_at_formatted', fn (Post $model) => $model->updated_at->format('d/m/Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),

            Column::make('TÍTOL', 'title')
                ->sortable()
                ->searchable(),

            Column::make('CONTINGUT', 'content'),

            Column::make('CREAT A', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::make('ACTUALITZAT A', 'updated_at_formatted', 'updated_at')
                ->sortable(),
        ];
    }
}
