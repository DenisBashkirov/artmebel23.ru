<section class="categories-short section-short section">

    <div class="section-short__container">

        <div class="section-short__header">
            <h2 class="h2">Категории</h2>
        </div>

        <div class="section-short__link-more">
            <a href="{{ route('business') }}" class="link_more">все категории</a>
        </div>

        <div class="section-short__list categories-short__list">

            <a href="{{ route('category', 'office') }}" class="categories-short__item">
                <img src="{{ asset('public/img/sections/categories-short/office.jpg') }}" alt="мебель для офиса" class="categories-short__item-img">
                <span class="categories-short__item-arrow"><span class="icon-arrow-right"></span></span>
                <p class="categories-short__item-text">мебель для офиса</p>
            </a>

            <a href="{{ route('category', 'hotels') }}" class="categories-short__item">
                <img src="{{ asset('public/img/sections/categories-short/hotels.jpg') }}" alt="мебель для отелей" class="categories-short__item-img">
                <span class="categories-short__item-arrow"><span class="icon-arrow-right"></span></span>
                <p class="categories-short__item-text">мебель для отелей</p>
            </a>

            <a href="{{ route('category', 'soft_furniture') }}" class="categories-short__item">
                <img src="{{ asset('public/img/sections/categories-short/soft_furniture.jpg') }}" alt="мягкая мебель" class="categories-short__item-img">
                <span class="categories-short__item-arrow"><span class="icon-arrow-right"></span></span>
                <p class="categories-short__item-text">мягкая мебель</p>
            </a>

        </div>

    </div>

</section>