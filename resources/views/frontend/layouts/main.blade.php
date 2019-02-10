<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('public/libs/slick-slider/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/libs/slick-slider/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/icons/style.css') }}">

    <title>{{ $page_title }}</title>

</head>
<body>

@yield('content')

@include('frontend.layouts.footer')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="{{ asset('public/libs/slick-slider/slick.min.js') }}"></script>
<script src="{{ asset('public/libs/JQuery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('public/js/frontend.js') }}"></script>

</body>
</html>