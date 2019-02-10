@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой подкатегории</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('product_subcategories.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'кабинет руководителя'
                    ],
                    [
                        'label'=>'URL-псевдоним (slug)',
                        'name'=>'slug',
                        'type'=>'text',
                        'placeholder'=>''
                    ],
                    [
                        'label'=>'Родительская категория',
                        'name'=>'category_id',
                        'type'=>'select',
                        'options'=>$categories
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