@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление нового адреса</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('our_addresses.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название для вывода в шаблонах',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'main или office'
                    ],
                    [
                        'label'=>'Город',
                        'name'=>'city',
                        'type'=>'text',
                        'placeholder'=>'Москва'
                    ],
                    [
                        'label'=>'Улица или микрорайон',
                        'name'=>'street',
                        'type'=>'text',
                        'placeholder'=>'ул. Ленина'
                    ],
                    [
                        'label'=>'Номер здания',
                        'name'=>'building',
                        'type'=>'text',
                        'placeholder'=>'54/2'
                    ],
                    [
                        'label'=>'Офис (необязательно)',
                        'name'=>'office',
                        'type'=>'text',
                        'placeholder'=>'404'
                    ]
                ]
        ])
    @endcomponent

@endsection