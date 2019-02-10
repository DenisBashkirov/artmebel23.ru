@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой серии</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('product_series.update', $serial->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'Вектор',
                        'value'=>$serial->name
                    ],
                    [
                        'label'=>'URL-псевдоним (slug)',
                        'name'=>'slug',
                        'type'=>'text',
                        'placeholder'=>'',
                        'value'=>$serial->slug
                    ],
                    [
                        'label'=>'Родительская подкатегория',
                        'name'=>'subcategory_id',
                        'type'=>'select',
                        'options'=>$subcategories,
                        'selected'=>$serial->subcategory->name
                    ],
                    [
                        'label'=>'Изображение',
                        'name'=>'img',
                        'type'=>'file',
                        'placeholder'=>'',
                        'value'=>$serial->img
                    ]
                ]
        ])
    @endcomponent

@endsection