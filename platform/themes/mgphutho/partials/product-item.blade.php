@if ($product)
    <div class="category-car">
        <div class="category-car-image">
            <a href="{{ $product->url }}" title="{{ $product->name }}">
                <img width="100%" alt="{{ $product->name }}" src="{{ RvMedia::getImageUrl($product->image) }}"/></a>
        </div>
        <div class="tt-product">
            <h3 class="category-car-name"><a href="{{ $product->url }}" title="{{ $product->name }}">{!! BaseHelper::clean($product->name) !!}</a>
            </h3>

            <p class="category-car-price">Giá từ: <strong>{{ number_format($product->price) }} VND</strong></p>
        </div>
    </div>
@endif

    