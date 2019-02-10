@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Серии продукции</h1>

    @component('backend.components.crud.messages.explanation')
        Под сериями продукции подразумеваются линейка изделий, объединённых под одно наименовании стиля. Например, "Вектор" или "Сириус".
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('product_series.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$series,
            'thead'=>['id', 'название', 'url-псевдоним (slug)', 'изображение', 'подкатегория'],
            'tbody'=>['id', 'name', 'slug', 'img', 'orm'=>['subcategory', 'name']]
        ])

        {{ $route_current }}
    @endcomponent

@endsection