@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой категории</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('product_categories.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'для офиса'
                    ],
                    [
                        'label'=>'URL-псевдоним (slug)',
                        'name'=>'slug',
                        'type'=>'text',
                        'placeholder'=>''
                    ],
                    [
                        'label'=>'Раздел категории',
                        'name'=>'type_id',
                        'type'=>'select',
                        'options'=>$category_types
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