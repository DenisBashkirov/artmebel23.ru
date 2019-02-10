@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Добавление новой серии</h1>

    @component('backend.components.crud.forms.edit',
        [
            'action'=>route('product_groups.update', $group->id),
            'inputs'=>
                [
                    [
                        'label'=>'Название',
                        'name'=>'name',
                        'type'=>'text',
                        'placeholder'=>'низкие шкафы',
                        'value'=>$group->name
                    ],
                ]
        ])
    @endcomponent

@endsection