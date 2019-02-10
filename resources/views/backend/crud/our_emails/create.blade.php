@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление нового адреса</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('our_emails.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название для вывода в шаблонах',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'main или office'
                    ],
                    [
                        'label'=>'Адрес',
                        'name'=>'mail',
                        'type'=>'text',
                        'placeholder'=>'email@mail.ru'
                    ]
                ]
        ])
    @endcomponent

@endsection