@php
    Theme::layout('default');
@endphp
<div id="banner-wrapper" class="">
    <div class="porto-block ">
        <div class="vc_single_image-wrapper  vc_box_border_grey">
            <img width="100%" height="457"  src="https://mgphutho.com/storage/banners/services.jpg"
                                    class="vc_single_image-img attachment-full" alt="banner-tintuc" decoding="async"
                                    loading="lazy"></div>
        </div>
    </div>
</div>
<div class="container">
    <section class="lanban-section py-5">
        <h2 class="text-center fw-bold mb-4 title">DỰ TOÁN CHI PHÍ</h2>
        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-4 mb-4">
                <div>
                    <img id="image-product" src="https://mgphutho.com/storage/banners/default.png" class="img-fluid rounded">
                </div>
            </div>


            <!-- FORM -->
            <div class="col-lg-4">
                <select id="category_product" class="form-select mb-3">
                    <option>--Chọn dòng xe--</option>
                    @foreach ($categoryProduct as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <select id="product" class="form-select mb-3">
                    <option>--Chọn phiên bản xe--</option>

                </select>

                <select id="location" class="form-select mb-3">
                    <option>--Chọn khu vực--</option>
                    <option value="hanoi">Hà Nội</option>
                    <option value="hcm">TP Hồ Chí Minh</option>
                    <option value="other">Tỉnh khác</option>
                </select>

                <button onclick="calc()" class="btn btn-danger w-100 btn-lg calc-btn">
                    TÍNH CHI PHÍ
                </button>
            </div>

            <!-- RESULT -->
            <div class="col-lg-4">
                <div class="info-box">
                    <div class="info-header">
                        THÔNG TIN
                    </div>

                    <div class="info-body">

                        <div class="info-row">
                            <span>Phiên bản xe</span>
                            <span id="product-name">-- Chọn xe --</span>
                        </div>
                        <div class="info-row">
                            <span>Giá</span>
                            <span id="product-price">--</span>
                        </div>

                        <div class="info-row">
                            <span>Nơi đăng ký trước bạ</span>
                            <span id="registration-location">-- Chọn khu vực --</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
</div>