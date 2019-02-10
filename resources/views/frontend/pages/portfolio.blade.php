@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.sections.primary-screen', [
        'primary_screen_type' => '_narrow',
        'title' => 'Примеры наших работ'
    ])

    @include('frontend.pages.sections.gallery')

@endsection