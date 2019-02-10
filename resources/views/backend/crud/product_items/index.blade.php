@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Изделия</h1>

    @component('backend.components.crud.messages.explanation')
        Под изделиием подразумевается один конкретный продукт. Например, стол или шкаф.
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('product_items.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$items,
            'thead'=>['id', 'название', 'изображение', 'серия', 'группа'],
            'tbody'=>['id', 'name', 'img', ['series', 'name'], ['group', 'name']]
        ])

        {{ $route_current }}
    @endcomponent

@endsection