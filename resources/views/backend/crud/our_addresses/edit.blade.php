@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой подкатегории</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('our_addresses.update', $address->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название для вывода в шаблонах',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'main или office',
                        'value'=>$address->name
                    ],
                    [
                        'label'=>'Город',
                        'name'=>'city',
                        'type'=>'text',
                        'placeholder'=>'Москва',
                        'value'=>$address->city
                    ],
                    [
                        'label'=>'Улица или микрорайон',
                        'name'=>'street',
                        'type'=>'text',
                        'placeholder'=>'ул. Ленина',
                        'value'=>$address->street
                    ],
                    [
                        'label'=>'Номер здания',
                        'name'=>'building',
                        'type'=>'text',
                        'placeholder'=>'54/2',
                        'value'=>$address->building
                    ],
                    [
                        'label'=>'Офис (необязательно)',
                        'name'=>'office',
                        'type'=>'text',
                        'placeholder'=>'404',
                        'value'=>$address->office
                    ]
                ]
        ])
    @endcomponent

@endsection