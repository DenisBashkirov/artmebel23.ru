@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Адреса</h1>

    @component('backend.components.crud.messages.explanation')
        Адреса компании для вывода в шаблонах. Например, адреса офисов или складов.
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('our_addresses.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$addresses,
            'thead'=>['название', 'полный вывод', 'короткий вывод', 'описание'],
            'tbody'=>['name', 'full', 'short', 'descr']
        ])

        {{ $route_current }}
    @endcomponent

@endsection