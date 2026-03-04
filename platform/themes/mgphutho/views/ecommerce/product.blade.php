<div class="container">
    <div class="block-product-parameter__info show active">
        <div class="tt-product">
            <div class="tt-product__bg"></div>
            <span class="tt-product__car">{{ $product->name }}</span>
            <span class="tt-product__price">Từ <strong>{{ number_format($product->price, 0, ',', '.') }}</strong>
                VNĐ</span>
        </div>
        <div class="block-product-parameter__car">
            <div class="product-image">
                <div class="product_img_box">
                    <img id="product_img" src="{{ RvMedia::getImageUrl($product->image, 'medium', false, RvMedia::getDefaultImage()) }}" data-zoom-enable="{{ theme_option('enabled_product_image_zoom', 'yes') == 'yes' ? 'true' : 'false' }}" data-zoom-image="{{ RvMedia::getImageUrl($product->image, null, false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}" loading="lazy" />
                    <a href="#" class="product_img_zoom" title="Zoom">
                        <span class="linearicons-zoom-in"></span>
                    </a>
                </div>
                <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                    @foreach ($productImages as $img)
                        <div class="item">
                            <a href="#" class="product_gallery_item @if ($loop->first) active @endif" data-image="{{ RvMedia::getImageUrl($img, 'medium') }}" data-zoom-image="{{ RvMedia::getImageUrl($img) }}">
                                <img src="{{ RvMedia::getImageUrl($img, 'thumb') }}" alt="{{ $product->name }}" loading="lazy"/>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="tp-product-details-additional-info">
            @include(EcommerceHelper::viewPath('includes.product-specification'))
        </div>

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

<div class="block-product-feature">
  <div class="block-product-feature__wrap">
    <div class="container">
      <div class="sp-24"></div>
      <div class="tt-section"></div>
      <div class="content">
        <div class="fs32 fw700">MG Cyberster là mẫu roadster kỷ niệm 100 năm thương hiệu MG</div>
        <div class="mt-1 fs20">MG Cyberster là mẫu roadster thuần điện 2 chỗ, sử dụng hệ dẫn động 4 bánh với tổng công suất 536hp cho khả năng tăng tốc 0-100km/h trong chưa đầy 3.2s. MG Cyberster hội tụ những giá trị cốt lõi nhất và mang trên mình dấu ấn của thương hiệu MG: Hiệu suất vượt trội, Thiết kế hiện đại, và Công nghệ tiên tiến.        </div>
        <ul class="mt-3">
                  </ul>
      </div>
      <div class="img">
        
      </div>
    </div>

  </div>
  <div class="container">
    <div class="sp-24"></div>
    <div class="fs32 fw700">
          </div>

    <div class="swiper swiper-product-feature mt-3 swiper-initialized swiper-horizontal swiper-backface-hidden">
      <div class="swiper-wrapper" id="swiper-wrapper-ab372a4c2af9a2a7" aria-live="polite">
              </div>
      <div class="swiper-pagination swiper-pagination--gray swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span></div>
		<div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ab372a4c2af9a2a7" aria-disabled="true"></div>
  		<div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ab372a4c2af9a2a7" aria-disabled="true"></div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <div class="cl-gray3 fst-italic"></div>
    <div class="sp-24"></div>
  </div>
</div>