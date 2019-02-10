@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой подкатегории</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('our_emails.update', $email->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название для вывода в шаблонах',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'main или office',
                        'value'=>$email->name
                    ],
                    [
                        'label'=>'Адрес',
                        'name'=>'mail',
                        'type'=>'text',
                        'placeholder'=>'email@mail.ru',
                        'value'=>$email->mail
                    ]
                ]
        ])
    @endcomponent

@endsection