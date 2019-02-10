@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.sections.primary-screen', [
        'primary_screen_type' => '_full-vh',
        'title' => 'Мебель для дома и бизнеса',
        'subtitle' => 'Собственное производство и поставка под заказ с производств Италии, Китая и других стран',
        'action' => ['link' => '#gallery-short', 'text' => 'примеры работ']
    ])

    @include('frontend.pages.sections.about-us-short')
    @include('frontend.pages.sections.categories-short')
    @include('frontend.pages.sections.our-benefits')

    <div class="gallery-short-and-feedbacks">
        @include('frontend.pages.sections.gallery-short')
        <!-- @include('frontend.pages.sections.feedbacks') -->
    </div>

@endsection