@extends('backend.layouts.admin')

@section('content')

    <h1 class="ui header">подкатегория</h1>

    <h3 class="ui header">{{ $subcategory->name }}</h3>


    <div class="ui segment">
        <h4 class="ui header">Серии, привязанные к данной подкатегории:</h4>
        <div class="ui list">
            @foreach($subcategory->series as $series)
                <div class="item"><a href="{{ route('product_series.show', $series->id) }}">{{ $series->name }}</a></div>
            @endforeach
        </div>
    </div>

@endsection