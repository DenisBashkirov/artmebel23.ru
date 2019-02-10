@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой серии</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('product_items.update', $item->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'тумба выкатная',
                        'value'=>$item->name
                    ],
                    [
                        'label'=>'Серия продукции',
                        'name'=>'series_id',
                        'type'=>'select',
                        'options'=>$series,
                        'selected'=>$item->series->name,
                        'value'=>$item->series->id
                    ],
                    [
                        'label'=>'Типовая группа',
                        'name'=>'group_id',
                        'type'=>'select',
                        'options'=>$groups,
                        'selected'=>$item->group->name,
                        'value'=>$item->group->id
                    ],
                    [
                        'label'=>'Изображение',
                        'name'=>'img',
                        'type'=>'file',
                        'placeholder'=>'',
                        'value'=>$item->img
                    ]
                ]
        ])
    @endcomponent

@endsection