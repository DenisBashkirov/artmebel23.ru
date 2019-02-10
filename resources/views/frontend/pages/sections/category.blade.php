<div class="category">

    @if (count($import) > 0)
        <h2 class="text_underlined">Ассортимент нашего производства</h2>
    @endif

    <p class="text_accent">Вы можете заказать любую мебель нашего производства по индивидуальным размерам и дизайн-проектам</p>

    @if ($category->template_type == 'small')
        <div class="category__items-list">
    @endif

    @foreach ($series as $series)
        <div class="category__item">

            @if ($series->name)
                <h2 class="category__item-title">{{ $series->name }}</h2>
            @endif

            <div class="category__item-images-list">
                @foreach ($series->images as $image)
                    <div class="category__item-img-wrapper category__item-img-wrapper_{{ $image->type }}">
                        <div class="img-overlay"></div>
                        <img src="{{ asset("public/img/sections/series/$category->slug/"  . $series->slug . '/' . $image->img) }}" alt="{{ $series->name }}" class="category__item-img">
                    </div>
                @endforeach
            </div>

            @if (count($series->items) > 0)
                <div class="category__catalog-list">
                    @foreach($series->items as $item)
                        <div class="category__catalog-item">
                            <p class="category__catalog-item-title">{{ $item->name }}</p>
                            <div class="category__catalog-item-img-wrapper">
                                <img src="{{ asset("public/img/sections/series/$category->slug/"  . $series->slug . '/items/' . $item->img) }}" alt="{{ $item->name }}" class="category__catalog-item-img">
                            </div>
                            <p class="category__catalog-item-size">{{ $item->size }}</p>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    @endforeach

    @if (count($import) > 0)
        <h2 class="text_underlined">Ассортимент импортного производства</h2>

        @foreach ($import as $series)
            <div class="category__item">
                <h2 class="category__item-title">{{ $series->name }}</h2>

                <div class="category__item-images-list">
                    @foreach ($series->images as $image)
                        <div class="category__item-img-wrapper category__item-img-wrapper_{{ $image->type }}">
                            <div class="img-overlay"></div>
                            <img src="{{ asset("public/img/sections/series/$category->slug/"  . $series->slug . '/' . $image->img) }}" alt="{{ $series->name }}" class="category__item-img">
                        </div>
                    @endforeach
                </div>

                @if (count($series->items) > 0)
                    <div class="category__catalog-list">
                        @foreach($series->items as $item)
                            <div class="category__catalog-item">
                                <p class="category__catalog-item-title">{{ $item->name }}</p>
                                <div class="category__catalog-item-img-wrapper">
                                    <img src="{{ asset("public/img/sections/series/$category->slug/"  . $series->slug . '/items/' . $item->img) }}" alt="{{ $item->name }}" class="category__catalog-item-img">
                                </div>
                                <p class="category__catalog-item-size">{{ $item->size }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        @endforeach

    @endif

    @if ($category->template_type == 'small')
        </div>
    @endif

</div>