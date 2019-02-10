@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой единицы продукции</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('product_items.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'тумба выкатная'
                    ],
                    [
                        'label'=>'Серия продукции',
                        'name'=>'series_id',
                        'type'=>'select',
                        'options'=>$series,
                        'value'=>$serial->id
                    ],
                    [
                        'label'=>'Типовая группа',
                        'name'=>'group_id',
                        'type'=>'select',
                        'options'=>$groups
                    ],
                    [
                        'label'=>'Изображение',
                        'name'=>'img',
                        'type'=>'file',
                        'placeholder'=>''
                    ]
                ]
        ])
    @endcomponent

@endsection