@extends('frontend.layouts.main')

@section('content')

    @include('frontend.pages.sections.primary-screen', [
        'primary_screen_type' => '_narrow',
        'title' => 'Наш адрес'
    ])

    <div class="contacts">
        <h2>г. {{ $our_addresses->where('name', 'main')->first()->full }}</h2>
        <div class="ymap" id="ymap"></div>
    </div>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <script type="text/javascript">
        // Функция ymaps.ready() будет вызвана, когда
        // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
        ymaps.ready(init);
        function init(){
            // Создание карты.
            var myMap = new ymaps.Map("ymap", {
                // Координаты центра карты.
                // Порядок по умолчнию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [45.054683, 38.9987695],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 16,
                controls: [],
            });

            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('multiTouch');
            myMap.behaviors.disable('drag');

            myPlacemark = new ymaps.Placemark([45.054683, 38.998769], {
                // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
                balloonContentHeader: "ТЦ Медиа-Плаза",
                balloonContentBody: "Вход левее магазина DNS",
                balloonContentFooter: "3 этаж",
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>

@endsection