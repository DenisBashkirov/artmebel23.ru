@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Редактирование модели</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('product_models.update', $model->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'КВ10',
                        'value'=>$model->name
                    ],
                    [
                        'label'=>'Размер',
                        'name'=>'size',
                        'type'=>'text',
                        'placeholder'=>'1200х1800х1500',
                        'value'=>$model->size
                    ],
                    [
                        'label'=>'Родительская единица',
                        'name'=>'item_id',
                        'type'=>'select',
                        'options'=>$items,
                        'belongsTo'=>'series',
                        'selected'=>$model->item->name . ' (' . $model->item->series->name . ')',
                        'value'=>$model->item->id
                    ],
                    [
                        'label'=>'Изображение',
                        'name'=>'img',
                        'type'=>'file',
                        'placeholder'=>'',
                        'value'=>$model->img
                    ]
                ]
        ])
    @endcomponent

@endsection