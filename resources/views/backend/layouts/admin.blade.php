@extends('backend.layouts.main')

@section('body')
    <div class="body-grid">
        @include('backend.layouts.header')
        @include('backend.layouts.sidebar')
        <div class="body-content">
            @yield('content')
        </div>
    </div>
@endsection