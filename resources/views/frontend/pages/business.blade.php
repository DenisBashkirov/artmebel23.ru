@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.sections.primary-screen', [
        'primary_screen_type' => '_full-vh',
        'title' => 'Мебель для вашего бизнеса',
        'subtitle' => 'Собственное производство и поставка под заказ с производств Италии, Китая и других стран',
        'action' => ['link' => '#categories', 'text' => 'основные категории']
    ])

    @include('frontend.pages.sections.category-about')
    @include('frontend.pages.sections.categories')

@endsection