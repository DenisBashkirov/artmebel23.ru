<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>АртМебель - Админ Панель</title>

    <link rel="stylesheet" href="{{ asset('public/libs/semantic-UI/semantic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/backend.css') }}">
</head>
<body>

@yield('body')

<script src="{{ asset('public/libs/JQuery/jquery.3.3.1.min.js') }}"></script>
<script src="{{ asset('public/libs/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('public/libs/semantic-UI/semantic.min.js') }}"></script>
<script src="{{ asset('public/js/backend.js') }}"></script>

</body>
</html>