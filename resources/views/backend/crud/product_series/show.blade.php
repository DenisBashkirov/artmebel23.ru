@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">Серия</h1>

    <h3 class="ui header">{{ $serial->name }}</h3>


    <div class="ui segment">
        <h4 class="ui header">У этой серии есть изделия:</h4>

        <div class="ui list">
            @foreach($serial->items as $item)
                <div class="item"><a href="{{ route('product_items.show', $item->id) }}">{{ $item->name }}</a></div>
            @endforeach
        </div>

        @component('backend.components.crud.button_add')
            {{ route('series.product_items.create', $serial->id) }}
        @endcomponent

    </div>

@endsection