@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой серии</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('product_series.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'Вектор'
                    ],
                    [
                        'label'=>'URL-псевдоним (slug)',
                        'name'=>'slug',
                        'type'=>'text',
                        'placeholder'=>''
                    ],
                    [
                        'label'=>'Родительская подкатегория',
                        'name'=>'subcategory_id',
                        'type'=>'select',
                        'options'=>$subcategories
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