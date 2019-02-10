@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.sections.primary-screen', [
        'primary_screen_type' => '_narrow',
        'title' => $category->name,
    ])

    @include('frontend.pages.sections.category')

@endsection