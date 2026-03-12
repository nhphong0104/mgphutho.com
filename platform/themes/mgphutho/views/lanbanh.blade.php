@php
    Theme::layout('default');
@endphp
<div class="container">
    <section class="lanban-section py-5">
        <h2 class="text-center fw-bold mb-4 title">DỰ TOÁN CHI PHÍ</h2>
        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-4 mb-4">
                <img src="/images/calculator.jpg" class="img-fluid rounded">
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

                <select class="form-select mb-3">
                    <option>--Chọn khu vực--</option>
                    <option>Hà Nội</option>
                    <option>TP Hồ Chí Minh</option>
                    <option>Tỉnh khác</option>
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
                            <span>-- Chọn xe --</span>
                        </div>

                        <div class="info-row">
                            <span>Nơi đăng ký trước bạ</span>
                            <span>-- Chọn khu vực --</span>
                        </div>

                    </div>

                    <div class="info-total">
                        0 VNĐ
                    </div>

                </div>

            </div>

        </div>
    </section>
</div>
