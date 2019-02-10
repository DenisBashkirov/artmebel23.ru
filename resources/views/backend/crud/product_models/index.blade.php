@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Модели продукции</h1>

    @component('backend.components.crud.messages.explanation')
        Под моделями продукции подразумеваются один тип модели. Например, "КС10" или "КВ08".
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('product_models.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$models,
            'thead'=>['id', 'название', 'изображение', 'единица продукции', 'размер'],
            'tbody'=>['id', 'name', 'img', ['item', 'name'], 'size']
        ])

        {{ $route_current }}
    @endcomponent

@endsection