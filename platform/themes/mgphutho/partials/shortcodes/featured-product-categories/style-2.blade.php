<div class="section small_pb small_pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="heading_s4 text-center">
                    <h2>{!! BaseHelper::clean($shortcode->title) !!}</h2>
                </div>
                <p class="text-center leads">
                    @if ($shortcode->description)
                        {!! BaseHelper::clean($shortcode->description) !!}
                    @endif
                    @if ($shortcode->subtitle)
                        {!! BaseHelper::clean($shortcode->subtitle) !!}
                    @endif
                </p>
            </div>
        </div>
        <div class="row align-items-center">
            @foreach ($categories as $category)
            <div class="col-12 col-md-6">
                 <div class="category-car">
                <div class="category-car-image">
                    <a href="{{ $category->url }}" title="{{ $category->name }}">
                        <img alt="{{ $category->name }}" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            style="width: 600px;" class="lazyload"
                            data-src="{{ RvMedia::getImageUrl($category->image) }}" /></a>
                </div>
                <div class="tt-product">
                    <h3 class="category-car-name"><a href="{{ $category->url }}" title="MG4 EV">{!! BaseHelper::clean($category->name) !!}</a>
                    </h3>

                    <p class="category-car-price">Giá từ: <strong>{{ number_format($category->price) }} VND</strong></p>
                </div>

                <div class="category-car-desc detail-content">
                    <div class="block-car__info">
                        {!! BaseHelper::clean($category->category_intro) !!}
                    </div>
                </div>

                <!-- {!! Theme::partial('btn-action') !!} -->
            </div>
            </div>
           
            @endforeach
        </div>
    </div>
</div>
