@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Группы продукции внутри серии</h1>

    @component('backend.components.crud.messages.explanation')
        Под группами продукции подразумеваются группы однотипных изделий. Например, группа "столы" или "высокие шкафы".
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('product_groups.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$groups,
            'thead'=>['id', 'название'],
            'tbody'=>['id', 'name']
        ])

        {{ $route_current }}
    @endcomponent

@endsection