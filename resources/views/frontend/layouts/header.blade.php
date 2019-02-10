<header class="header header-footer">
    <div class="header__container">

        <div class="header-footer__company header__company">
            <img src="{{ asset('public/img/logo.png') }}" alt="АртМебель логотип" class="logo">
        </div>

        <div class="header-footer__phone header__phone">
            <a href="tel:{{ $our_phones->firstWhere('name', 'main')->value }}" class="link_no-decor link_iconed"><i class="icon-phone icon_inline-left"></i>{{ $our_phones->firstWhere('name', 'main')->value }}</a>
        </div>

        <div class="header-footer__email header__email">
            <a href="mailto:{{ $our_emails->firstWhere('name', 'main')->value }}" class="link_no-decor link_iconed"><i class="icon-mail icon_inline-left"></i>{{ $our_emails->firstWhere('name', 'main')->value }}</a>
        </div>

        <div class="header-footer__address header__address">
            <p class="header-footer__city">{{ $our_addresses->firstWhere('name', 'main')->city }}</p>
            <p>{{ $our_addresses->firstWhere('name', 'main')->short }}</p>
        </div>

        <div class="header__hamburger">
            <button class="hamburger js-hamburger-btn hamburger--spring" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>

    </div>
</header>