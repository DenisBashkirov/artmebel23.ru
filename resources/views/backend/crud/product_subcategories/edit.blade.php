@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой подкатегории</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('product_subcategories.update', $subcategory->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'кабинет руководителя',
                        'value'=>$subcategory->name
                    ],
                    [
                        'label'=>'URL-псевдоним (slug)',
                        'name'=>'slug',
                        'type'=>'text',
                        'placeholder'=>'',
                        'value'=>$subcategory->slug
                    ],
                    [
                        'label'=>'Родительская категория',
                        'name'=>'category_id',
                        'type'=>'select',
                        'options'=>$categories,
                        'selected'=>$subcategory->category->name,
                        'value'=>$subcategory->category->id
                    ],
                    [
                        'label'=>'Изображение',
                        'name'=>'img',
                        'type'=>'file',
                        'placeholder'=>'',
                        'value'=>$subcategory->img
                    ]
                ]
        ])
    @endcomponent

@endsection