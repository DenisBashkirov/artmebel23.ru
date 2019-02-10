<div class="sidebar">
    <div class="ui vertical menu fluid">

        <div class="item">
            <div class="header">Каталог</div>
            <div class="menu">
                <a href="{{ route('product_categories.index') }}" class="item">Категории</a>
                <a href="{{ route('product_series.index') }}" class="item">Серии</a>
            </div>
        </div>

        <div class="item">
            <div class="header">Наши реквизиты</div>
            <div class="menu">
                <a href="{{ route('our_addresses.index') }}" class="item">Адреса</a>
                <a href="{{ route('our_phones.index') }}" class="item">Телефоны</a>
                <a href="{{ route('our_emails.index') }}" class="item">Email</a>
            </div>
        </div>

    </div>
</div>