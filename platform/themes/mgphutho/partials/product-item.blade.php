@if ($product)
    <div class="category-car">
        <div class="category-car-image">
            <a href="{{ $product->url }}" title="{{ $product->name }}">
                <img alt="{{ $product->name }}" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                    style="width: 600px;" class="lazyload"
                    data-src="{{ RvMedia::getImageUrl($product->image) }}" /></a>
        </div>
        <div class="tt-product">
            <h3 class="category-car-name"><a href="{{ $product->url }}" title="MG4 EV">{!! BaseHelper::clean($product->name) !!}</a>
            </h3>

            <p class="category-car-price">Giá từ: <strong>{{ number_format($product->price) }} VND</strong></p>
        </div>

        <div class="category-car-desc detail-content">
            <div class="block-car__info">
                {!! BaseHelper::clean($product->description) !!}
            </div>
        </div>

        <div class="row row-form">
            <div class="col-6">
                <a href="#" class="btn-container btn-container--gray full-container"
                    ref="tel:{{ theme_option('hotline') }}">
                    <span class="btn-container__mas">GỌI NGAY</span>
                    <span class="btn-container__btn btn1">GỌI NGAY</span>
                </a>
            </div>
            <div class="col-6">
                <a href="#" class="btn-container btn-container--gray full-container"
                    ref="tel:0971593326">
                    <span class="btn-container__mas">NHẬN ƯU ĐÃI</span>
                    <span class="btn-container__btn">NHẬN ƯU ĐÃI</span>
                </a>
            </div>
        </div>
    </div>

@endif

    