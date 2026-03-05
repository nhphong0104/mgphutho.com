<div class="container">

    <div class="primary-product group">
        <div class="image-block group slider-product">
            <div class="owl-carousel owl-theme owl-gallery-images">
                @foreach ($productImages as $img)
                <div class="item">
                    <a data-fancybox="gallery" data-caption="New MG5 1.5 MT" title="New MG5 1.5 MT"
                        href="{{ RvMedia::getImageUrl($img, 'medium') }}">
                        <img alt="{{ $product->name }}" class="lazyload"
                            data-src="{{ RvMedia::getImageUrl($img) }}" />
                    </a>
                </div>
                @endforeach
            </div>
            <div class="owl-carousel owl-theme owl-gallery-thumbs">
                 @foreach ($productImages as $img)
                <div class="item"><img class="img-fullwidth lazyload" alt="New MG5 1.5 MT"
                        data-src="{{ RvMedia::getImageUrl($img, 'thumb') }}" /></div>
                @endforeach
            </div>
        </div>
        <div class="detail-block group">
            <h1 class="product-name">{{ $product->name }}</h1>
            <div class="product-rating">
                <p class="rating">
                    <span class="rating-box">
                        <i class="star"></i><i class="star"></i><i class="star"></i><i class="star"></i><i
                            class="star"></i>
                        <span style="width:100.0%"><i class="star"></i><i class="star"></i><i
                                class="star"></i><i class="star"></i><i class="star"></i></span>
                    </span>
                    <span class="rating-value">(<a class="linkscroll" href="#reviewcontent">1 <span
                                data-lang="detailproduct_review_label">đánh giá</span></a>)</span>
                </p>
                <div class="social-sharing" data-name="All New MG7 2.0 Turbo Premium"
                    data-url="https://mg-langha.com/all-new-mg7-2-0-turbo-premium-1469730.html">
                    <a class="btn btn-facebook" data-type="facebook" href="javascript:void(0)"><i
                            class="fa fa-facebook"></i> Share</a>
                    <a class="btn btn-twitter" data-type="twitter" href="javascript:void(0)"><i
                            class="fa fa-twitter"></i> Tweet</a>
                    <a class="btn btn-linkedin" data-type="linkedin" href="javascript:void(0)"><i
                            class="fa fa-linkedin"></i> Linkedin</a>
                </div>
            </div>
            <p class="product-row">
                <label data-lang="detailproduct_price">Giá sản phẩm :</label>
                <span class="product-price">{{ number_format($product->price, 0, ',', '.') }} đ</span>
            </p>
            <p class="product-row">
                @include(EcommerceHelper::viewPath('includes.product-specification'))
            </p>
            <div class="mt-3">
                <a href="#" class="btn-container btn-container--gray add-to-cart" data-id="5572"
                    data-title="Cyberster" data-price="3200000000"
                    data-img="https://mgmotor.vn/wp-content/uploads/2024/11/Hinh-anh-210x140-1.png">
                    <span class="btn-container__mas">Thêm vào giỏ hàng</span>
                    <span class="btn-container__btn">Thêm vào giỏ hàng</span>
                </a>
                <a href="/dai-ly/" class="btn-container btn-container--red">
                    <span class="btn-container__mas">Danh sách cửa hàng</span>
                    <span class="btn-container__btn btn1">Danh sách cửa hàng</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="block-product-feature">
    <div class="block-product-feature__wrap">
        <div class="container">
            <div class="sp-24"></div>
            <div class="tt-section"></div>
            <div class="content">
                {!! html_entity_decode($product->content) !!}
            </div>
        </div>
    </div>
</div>
