@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой группы</h1>

    @component('backend.components.crud.forms.create',
        [
            'action'=>route('product_groups.store'),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'низкие шкафы'
                    ],
                ]
        ])
    @endcomponent

@endsection