<header class="body-header">
    <div class="ui menu small">

        <div class="ui simple dropdown right item">
            {{ Auth::user()->name }}
            <i class="dropdown icon"></i>
            <div class="menu small">
                <a href="{{ route('logout') }}" class="item"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Выйти
                </a>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</header>