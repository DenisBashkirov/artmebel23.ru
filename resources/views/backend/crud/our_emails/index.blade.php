@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Список адресов</h1>

    @component('backend.components.crud.messages.explanation')
        Список адресов компании для вывода в шаблонах
    @endcomponent

    @component('backend.components.crud.button_add')
        {{ route('our_emails.create') }}
    @endcomponent

    @component('backend.components.crud.index_table',
        [
            'collection'=>$emails,
            'thead'=>['name', 'value', 'descr'],
            'tbody'=>['name', 'value', 'descr']
        ])

        {{ $route_current }}
    @endcomponent

@endsection