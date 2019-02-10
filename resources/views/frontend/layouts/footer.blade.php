<footer class="footer header-footer section">

    <nav class="footer__menu">
        @component('frontend.components.nav')
        @endcomponent
    </nav>

    <div class="footer__contacts">
        <div class="footer__contacts-wrapper">

            <div class="header-footer__company">
                <img src="{{ asset('public/img/logo.png') }}" alt="АртМебель логотип" class="logo">
                <p class="header-footer__company-text">Мебель для вашего дома и бизнеса</p>
            </div>

            <div class="header-footer__phone">
                <a href="tel:{{ $our_phones->firstWhere('name', 'main')->value }}" class="link_no-decor"><i class="icon-phone icon_inline-left"></i>{{ $our_phones->firstWhere('name', 'main')->value }}</a>
            </div>

            <div class="header-footer__address">
                <p class="header-footer__city">{{ $our_addresses->firstWhere('name', 'main')->city }}</p>
                <p>{{ $our_addresses->firstWhere('name', 'main')->short }}</p>
            </div>

        </div>
    </div>

</footer>