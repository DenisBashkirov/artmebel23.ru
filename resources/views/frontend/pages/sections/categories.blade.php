<section class="categories" id="categories">
    <div class="categories__container">

        <h2>Основные категории</h2>

        <div class="categories__list">

            @foreach ($categories as $category)
                <a href="{{ route('category', $category->slug) }}" class="categories__item categories__item_{{ $category->img_type }}">
                    <div class="categories__item-img-overlay"></div>
                    <img src="{{ asset('public/img/sections/categories/' . $category->slug . '_' . $category->img_type . '.jpg') }}" alt="{{ $category->name }}" class="categories__item-img">
                    <p class="categories__item-text">{{ $category->name }}</p>
                    <span class="categories__item-arrow"><span class="icon-arrow-right"></span></span>
                </a>
            @endforeach

        </div>

    </div>
</section>