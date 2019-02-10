<section class="primary-screen primary-screen_narrow">

    @include('frontend.layouts.header')

    <nav class="top-menu">
        @component('frontend.components.nav')
        @endcomponent
    </nav>

    <div class="primary-screen__content">

        <div class="primary-screen__content-grid">

            <div class="h1">
                <h1>Мебель для вашего дома и бизнеса</h1>
                <p class="h1__subheader">Изготавливаем сами и поставляем под заказ с производств Италии, Китая и других стран</p>
            </div>

            <ul class="primary-screen__counter-list">
                <li class="primary-screen__counter-item">01</li>
                <li class="primary-screen__counter-item primary-screen__counter-item_active">02</li>
                <li class="primary-screen__counter-item">03</li>
                <li class="primary-screen__counter-item">04</li>
            </ul>

            <div class="primary-screen__action">
                <a href="#gallery-short" class="btn btn_lg btn_transp">смотреть работы</a>
            </div>

        </div>

    </div>

</section>