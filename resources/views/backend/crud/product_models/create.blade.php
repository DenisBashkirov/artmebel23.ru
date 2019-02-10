@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой модели</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('product_models.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'КВ10'
                    ],
                    [
                        'label'=>'Размер',
                        'name'=>'size',
                        'type'=>'text',
                        'placeholder'=>'1200х1800х1500'
                    ],
                    [
                        'label'=>'Родительская единица',
                        'name'=>'item_id',
                        'type'=>'select',
                        'options'=>$items,
                        'belongsTo'=>'series',
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