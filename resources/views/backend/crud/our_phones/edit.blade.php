@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой подкатегории</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('our_phones.update', $phone->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название для вывода в шаблонах',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'main или office',
                        'value'=>$phone->name
                    ],
                    [
                        'label'=>'Номер',
                        'name'=>'value',
                        'type'=>'text',
                        'placeholder'=>'8(918)999-99-99',
                        'value'=>$phone->value
                    ],
                    [
                        'label'=>'Описание (необязательно)',
                        'name'=>'descr',
                        'type'=>'text',
                        'placeholder'=>'',
                        'value'=>$phone->descr
                    ]
                ]
        ])
    @endcomponent

@endsection