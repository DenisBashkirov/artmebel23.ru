<section class="primary-screen primary-screen{{ $primary_screen_type }}">

    @include('frontend.layouts.header')

    <nav class="top-menu top-menu_hidden">
        @component('frontend.components.nav')
        @endcomponent
    </nav>

    <div class="primary-screen__content">

        <div class="primary-screen__content-grid primary-screen__content-grid{{ $primary_screen_type }}">

            <div class="h1">
                <h1>{{ $title }}</h1>
                @if (isset($subtitle))
                    <p class="h1__subheader">{{ $subtitle }}</p>
                @endif
            </div>

            <ul class="primary-screen__counter-list">
                <li class="primary-screen__counter-item">01</li>
                <li class="primary-screen__counter-item primary-screen__counter-item_active">02</li>
                <li class="primary-screen__counter-item">03</li>
                <li class="primary-screen__counter-item">04</li>
            </ul>

            @if (isset($action))
                <div class="primary-screen__action">
                    <a href="{{ $action['link'] }}" class="btn btn_lg btn_transp">{{ $action['text'] }}</a>
                </div>
            @endif

        </div>

    </div>

</section>