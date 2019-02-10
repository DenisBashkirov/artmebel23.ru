@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление нового адреса</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('our_phones.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название для вывода в шаблонах',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'main или office'
                    ],
                    [
                        'label'=>'Номер',
                        'name'=>'value',
                        'type'=>'text',
                        'placeholder'=>'8(918)999-99-99'
                    ],
                    [
                        'label'=>'Описание (необязательно)',
                        'name'=>'descr',
                        'type'=>'text',
                        'placeholder'=>''
                    ]
                ]
        ])
    @endcomponent

@endsection