@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Подкатегории продукции</h1>

    @component('backend.components.crud.messages.explanation')
        Под подкатегориями продукции подразумеваются категории второго уровня. Например, кабинеты руководителя или мебель для персонала.
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('product_subcategories.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$subcategories,
            'thead'=>['id', 'название', 'url-псевдоним (slug)', 'изображение', 'категория'],
            'tbody'=>['id', 'name', 'slug', 'img', 'orm'=>['category', 'name']]
        ])

        {{ $route_current }}
    @endcomponent

@endsection