@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Категории продукции</h1>

    @component('backend.components.crud.messages.explanation')
        Под категориями продукции подразумеваются самые общие уровни каталога. Например, мебель для офиса или мебель для гостиниц
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('product_categories.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$categories,
            'thead'=>['id', 'название', 'url-псевдоним (slug)', 'img_type', 'type'],
            'tbody'=>['id', 'name', 'slug', 'img_type', 'type']
        ])

        {{ $route_current }}
    @endcomponent

@endsection