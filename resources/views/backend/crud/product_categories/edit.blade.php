@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Изменение категории</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('product_categories.update', $category->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'для офиса',
                        'value'=>$category->name
                    ],
                    [
                        'label'=>'URL-псевдоним (slug)',
                        'name'=>'slug',
                        'type'=>'text',
                        'placeholder'=>'',
                        'value'=>$category->slug
                    ],
                    [
                        'label'=>'Тип изображения',
                        'name'=>'img_type',
                        'type'=>'text',
                        'placeholder'=>'',
                        'value'=>$category->img_type
                    ]
                ]
        ])
    @endcomponent

@endsection