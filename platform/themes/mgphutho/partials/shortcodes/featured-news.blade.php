<div class="section pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="heading_s1 text-center">
                    <h2>{!! BaseHelper::clean($title) !!}</h2>
                </div>
                <p class="leads text-center">
                    @if ($description)
                        {!! BaseHelper::clean($description) !!}
                    @endif
                    @if ($subtitle)
                        {!! BaseHelper::clean($subtitle) !!}
                    @endif
                </p>
            </div>
        </div>
        <div class="justify-content-center">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog_post blog_style2 box_shadow1">
                            <div class="blog_img">
                                <a href="{{ $post->url }}">
                                    <img src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                        alt="{{ $post->name }}" loading="lazy" />
                                </a>
                            </div>
                            <div class="blog_content bg-white">
                                <div class="blog_text">
                                    <h3 class="blog_title"><a href="{{ $post->url }}">{{ $post->name }}</a></h3>
                                    <ul class="list_none blog_meta">
                                        <li><i class="ti-calendar"></i>
                                            {{ $post->created_at->translatedFormat('M d, Y') }}</li>
                                        <li><i class="eye"></i> {{ number_format($post->views) }} {{ __('Views') }}
                                        </li>
                                    </ul>
                                    <p>{{ Str::words($post->description, 35) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div class="block-news">
    <div class="sp-24"></div>
    <div class="container">
        <div class="tt-section text-center text-md-start">Tin tức &amp; Sự kiện</div>

        <div class="flexS block-news__tag mt-4">
            <div class="block-news__scroll">
                <div>
                    <a href="https://mgmotor.vn/tin-tuc/?category=khuyen-mai" class="btn-container btn-container--gray">
                        <span class="btn-container__mas">Khuyến mãi</span>
                        <span class="btn-container__btn">Khuyến mãi</span>
                    </a>
                    <a href="https://mgmotor.vn/tin-tuc/?category=su-kien" class="btn-container btn-container--gray">
                        <span class="btn-container__mas">Sự Kiện</span>
                        <span class="btn-container__btn">Sự Kiện</span>
                    </a>
                    <a href="https://mgmotor.vn/tin-tuc/?category=thuong-hieu"
                        class="btn-container btn-container--gray">
                        <span class="btn-container__mas">Thương Hiệu</span>
                        <span class="btn-container__btn">Thương Hiệu</span>
                    </a>
                </div>
            </div>
            <a href="https://mgmotor.vn/tin-tuc/" class="btn-container btn-container--gray d-none d-md-block">
                <span class="btn-container__mas">XEM TẤT CẢ <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                <span class="btn-container__btn">XEM TẤT CẢ <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
            </a>
        </div>

        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-9ab693f3985595ad" aria-live="polite">
                <div class="swiper-slide swiper-slide-active" style="width: 473.333px; margin-right: 30px;"
                    role="group" aria-label="1 / 9" data-swiper-slide-index="0">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2026/03/8_3_Post_16-9-1-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-quoc-te-phu-nu-08-03/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a
                                    href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-quoc-te-phu-nu-08-03/">CHƯƠNG
                                    TRÌNH ƯU ĐÃI NHÂN NGÀY QUỐC TẾ PHỤ NỮ 08/03</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Chúc mừng ngày Quốc tế Phụ nữ 08/03 cùng MG Việt Nam MG Việt
                                Nam xin gửi lời chúc tốt đẹp nhất đến “một nửa thế giới”, chúc phái đẹp luôn là những
                                đóa hoa tươi tắn, hạnh phúc và tự tin chinh phục mọi hành trình! <img draggable="false"
                                    role="img" class="emoji" alt="🌸"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f338.svg"> <img draggable="false"
                                    role="img" class="emoji" alt="💝"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f49d.svg"> Cơ hội tuyệt vời để
                                lựa chọn mẫu xe MG ưng ý cùng ưu đãi 10.000.000 VNĐ tiền mặt dành tặng cho khách hàng nữ
                                khi đăng ký mua xe trong tháng 3 này, áp dụng trên toàn hệ thống đại lý MG Việt Nam.
                                Thời gian: 01/03/2025 đến hết 31/03/2025. Chương trình áp dụng cho 100 khách hàng nữ đầu
                                tiên đăng ký mua xe trong thời gian ưu đãi. Vui lòng liên hệ Hotline 1800 3366 hoặc cơ
                                sở đại lý gần nhất để tìm hiểu thêm. ______________________________________ Thông tin
                                liên hệ MG Việt Nam Website: mgmotor.vn Hotline: 18003366... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>05/03/2026</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-quoc-te-phu-nu-08-03/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-quoc-te-phu-nu-08-03/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide swiper-slide-next" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="2 / 9" data-swiper-slide-index="1">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2026/03/CTKM_16-9-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-03-cung-mg-viet-nam/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-03-cung-mg-viet-nam/">CHƯƠNG
                                    TRÌNH ƯU ĐÃI THÁNG 03 CÙNG MG VIỆT NAM</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Chương trình ưu đãi khai xuân 2026 với nhiều ưu đãi hấp dẫn
                                diễn ra tại đại lý MG Việt Nam <img draggable="false" role="img" class="emoji"
                                    alt="✨" src="https://s.w.org/images/core/emoji/17.0.2/svg/2728.svg"> MG
                                Việt Nam mang đến chương trình ưu đãi hấp dẫn trong tháng 03, giúp quý khách dễ dàng lựa
                                chọn và sở hữu những mẫu xe MG phù hợp với nhu cầu di chuyển. Từ MG5 năng động, MG ZS
                                tiện nghi, MG HS mạnh mẽ đến MG G50 rộng rãi, tất cả đã sẵn sàng cùng quý khách trên
                                những hành trình khai xuân 2026. <img draggable="false" role="img" class="emoji"
                                    alt="👤" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f464.svg"> Đối
                                tượng áp dụng: Khách hàng đã xuất hóa đơn GTGT trong thời gian diễn ra chương trình <img
                                    draggable="false" role="img" class="emoji" alt="⏰"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/23f0.svg"> Thời gian áp dụng: Từ
                                01/03/2026 đến 31/03/2026 <img draggable="false" role="img" class="emoji"
                                    alt="🔗" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f517.svg"> Chi
                                tiết chương trình ưu đãi tại đây:: Loại xeNăm sản xuấtChi tiết khuyến mãiMG5 1.5
                                STD2025Tặng lệ phí trước bạ trị giá 24,000,000 VNĐMG5 1.5 LUX2025Tặng lệ phí trước bạ
                                trị... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>05/03/2026</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-03-cung-mg-viet-nam/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-03-cung-mg-viet-nam/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="3 / 9" data-swiper-slide-index="2">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2026/03/Khai-xuan_Web_Banner-1-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-cham-soc-khach-hang-ma-dao-khai-xuan-tan-nien-ruoc-loc/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a
                                    href="https://mgmotor.vn/tin-tuc/chuong-trinh-cham-soc-khach-hang-ma-dao-khai-xuan-tan-nien-ruoc-loc/">CHƯƠNG
                                    TRÌNH CHĂM SÓC KHÁCH HÀNG | MÃ ĐÁO KHAI XUÂN – TÂN NIÊN RƯỚC LỘC</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Tri ân quý khách hàng đã tin tưởng và đồng hành cùng MG Việt
                                Nam, chương trình chăm sóc xe đầu năm với nhiều ưu đãi thiết thực là dịp thích hợp để
                                quý khách kiểm tra và bảo dưỡng phương tiện toàn diện, sẵn sàng cho những hành trình an
                                tâm trong năm mới. Chương trình ưu đãi dịch vụ chăm sóc và bảo dưỡng xe MG khai xuân năm
                                2026 tại MG Việt Nam Chương trình được áp dụng trên toàn hệ thống đại lý MG Việt Nam
                                trên toàn quốc, từ ngày 10/03 đến hết ngày 10/04/2026. <img draggable="false"
                                    role="img" class="emoji" alt="🔗"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f517.svg"> Chi tiết chương trình
                                ưu đãi xem tại bảng dưới đây: Nội dungƯu đãiNhóm phụ tùng bảo dưỡng chính phẩmGiảm 15%
                                giá phụ tùng bảo dưỡng chính hãngCông kiểm tra 38 hạng mụcMiễn phí kiểm tra toàn bộ 38
                                hạng mục theo tiêu chuẩn kỹ thuậtGói dịch vụ khử... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>04/03/2026</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-cham-soc-khach-hang-ma-dao-khai-xuan-tan-nien-ruoc-loc/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-cham-soc-khach-hang-ma-dao-khai-xuan-tan-nien-ruoc-loc/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="4 / 9" data-swiper-slide-index="3">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2025/12/251203_MG_CTKM-T12_16-9-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/uu-dai-cuoi-nam-tu-mg-viet-nam-vui-giang-sinh-chao-nam-moi/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a
                                    href="https://mgmotor.vn/tin-tuc/uu-dai-cuoi-nam-tu-mg-viet-nam-vui-giang-sinh-chao-nam-moi/">ƯU
                                    ĐÃI CUỐI NĂM TỪ MG VIỆT NAM – VUI GIÁNG SINH, CHÀO NĂM MỚI</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Không khí mùa lễ đang tới gần, MG Việt Nam mong rằng những
                                ưu đãi đặc biệt sẽ giúp Quý khách dễ dàng lựa chọn được mẫu xe phù hợp, sẵn sàng khởi
                                hành một năm 2026 thật thuận lợi và tràn đầy may mắn bên những người thân yêu. Chương
                                trình ưu đãi tháng 12 với nhiều ưu đãi hấp dẫn diễn ra tại đại lý MG Việt Nam <img
                                    draggable="false" role="img" class="emoji" alt="💥"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f4a5.svg"> Chương trình ưu đãi
                                tháng 12, giúp quý khách dễ dàng lựa chọn những mẫu xe MG phù hợp tại hệ thống Đại lý
                                toàn quốc. <img draggable="false" role="img" class="emoji" alt="👤"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f464.svg"> Đối tượng áp dụng:
                                Khách hàng đã xuất hóa đơn GTGT trong thời gian diễn ra chương trình <img
                                    draggable="false" role="img" class="emoji" alt="⏰"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/23f0.svg"> Thời gian áp dụng: Từ
                                01/12 đến hết 31/12/2025 <img draggable="false" role="img" class="emoji"
                                    alt="🔗" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f517.svg"> Chi
                                tiết chương trình ưu đãi xem tại: Loại xeNăm sản xuấtChi tiết khuyến mãiMG5 1.5
                                STD2024-2025Tặng lệ phí trước bạ trị giá... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>05/12/2025</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/uu-dai-cuoi-nam-tu-mg-viet-nam-vui-giang-sinh-chao-nam-moi/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/uu-dai-cuoi-nam-tu-mg-viet-nam-vui-giang-sinh-chao-nam-moi/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="5 / 9" data-swiper-slide-index="4">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2025/11/251107_MG-Trai-nghiem-MGcare_16-9-2-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/trai-nghiem-mg-care-nhan-qua-cuc-da/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a href="https://mgmotor.vn/tin-tuc/trai-nghiem-mg-care-nhan-qua-cuc-da/">TRẢI NGHIỆM
                                    MG CARE – NHẬN QUÀ CỰC ĐÃ!&nbsp;</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Nhằm tri ân khách hàng đã tin tưởng và đồng hành cùng MG
                                Việt Nam, chương trình bốc thăm nhận quà sau khi trải nghiệm dịch vụ bảo dưỡng tại MG
                                Care chính thức được triển khai trên toàn hệ thống đại lý MG Việt Nam. Chương trình bốc
                                thăm nhận quà hấp dẫn khi trải nghiệm dịch vụ tại MG Care <img draggable="false"
                                    role="img" class="emoji" alt="🗓"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f5d3.svg"> Thời gian: 15/11 –
                                31/12/2025 Đối tượng áp dụng: Khách hàng sử dụng dịch vụ bảo dưỡng hoặc sửa chữa xe ô tô
                                MG tại Đại lý ủy nhiệm của MG trong thời gian diễn ra chương trình. Với mỗi hóa đơn dịch
                                vụ hợp lệ, khách hàng sẽ nhận 01 phiếu bốc thăm trúng thưởng và có cơ hội nhận nhiều
                                phần quà hấp dẫn từ MG: SttGiải Thưởng SMV1Ly cặp2Bình giữ nhiệt3Ly đơn4Bàn du lịch5Dù
                                lớn6Dù nhỏ71 chai Engine Shampoo8Voucher 01 lít nhớt 5W309Áo thun10Túi... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>07/11/2025</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/trai-nghiem-mg-care-nhan-qua-cuc-da/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/trai-nghiem-mg-care-nhan-qua-cuc-da/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="6 / 9" data-swiper-slide-index="5">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-11-hanh-trinh-vuon-xa/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-11-hanh-trinh-vuon-xa/">CHƯƠNG
                                    TRÌNH ƯU ĐÃI THÁNG 11 - HÀNH TRÌNH VƯƠN XA</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Một năm đang dần khép lại, mở ra những dự định mới và nhiều
                                hành trình đang chờ đón. Cùng MG Việt Nam tìm kiếm người bạn đồng hành lý tưởng để bắt
                                đầu những chuyến đi trọn vẹn bên gia đình và người thân. Chương trình ưu đãi tháng 11
                                với nhiều ưu đãi hấp dẫn diễn ra tại đại lý MG Việt Nam <img draggable="false"
                                    role="img" class="emoji" alt="💥"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f4a5.svg"> Chương trình ưu đãi
                                tháng 11, giúp quý khách dễ dàng lựa chọn những mẫu xe MG phù hợp tại hệ thống Đại lý
                                toàn quốc. <img draggable="false" role="img" class="emoji" alt="👤"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f464.svg"> Đối tượng áp dụng:
                                Khách hàng đã xuất hóa đơn GTGT trong thời gian diễn ra chương trình <img
                                    draggable="false" role="img" class="emoji" alt="⏰"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/23f0.svg"> Thời gian áp dụng: Từ
                                01/11 đến hết 30/11/2025 <img draggable="false" role="img" class="emoji"
                                    alt="🔗" src="https://s.w.org/images/core/emoji/17.0.2/svg/1f517.svg"> Chi
                                tiết chương trình ưu đãi xem tại: Loại xeNăm sản xuấtChi tiết khuyến mãiMG5 1.5
                                STD2024-2025Tặng lệ phí trước bạ trị giá 24,000,000 VNĐMG5 1.5 LUX2024-2025Tặng lệ...
                            </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>06/11/2025</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-11-hanh-trinh-vuon-xa/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-11-hanh-trinh-vuon-xa/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="7 / 9" data-swiper-slide-index="6">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2025/10/image-6.png)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/tien-phong-loi-song-hien-dai-cung-cac-mau-sedan-mg/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a
                                    href="https://mgmotor.vn/tin-tuc/tien-phong-loi-song-hien-dai-cung-cac-mau-sedan-mg/">TIÊN
                                    PHONG LỐI SỐNG HIỆN ĐẠI CÙNG CÁC MẪU SEDAN MG</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Sedan là lựa chọn quen thuộc của nhiều khách hàng trẻ nhờ
                                thiết kế gọn gàng, dễ lái và chi phí hợp lý. MG mang đến bộ 3 sedan gồm MG5, New MG5 và
                                MG7 với phong cách và trang bị đa dạng, đáp ứng nhiều nhu cầu khác nhau từ di chuyển
                                hàng ngày, kinh doanh dịch vụ đến trải nghiệm lái cao cấp hơn. MG5 - trẻ trung, năng
                                động MG5 là mẫu sedan hạng C phù hợp với những người trẻ yêu thích phong cách hiện đại.
                                Với mức giá từ 488 triệu đồng, xe mang đến các tiện nghi và những trang bị công nghệ phù
                                hợp cho nhu cầu di chuyển hàng ngày. Di chuyển linh hoạt và tiện nghi cùng MG5 Thiết kế
                                ngoại thất MG5 mang kiểu dáng coupe thể thao, với lưới tản nhiệt hình lục giác đặc
                                trưng, đèn pha LED... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>22/10/2025</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/tien-phong-loi-song-hien-dai-cung-cac-mau-sedan-mg/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/tien-phong-loi-song-hien-dai-cung-cac-mau-sedan-mg/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" style="width: 473.333px; margin-right: 30px;" role="group"
                    aria-label="8 / 9" data-swiper-slide-index="7">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2025/10/251016_MG-Womens-Day_16-9-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-phu-nu-viet-nam-20-10/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a
                                    href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-phu-nu-viet-nam-20-10/">CHƯƠNG
                                    TRÌNH ƯU ĐÃI NHÂN NGÀY PHỤ NỮ VIỆT NAM 20/10</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">Chúc mừng ngày Phụ nữ Việt Nam 20/10 cùng MG Việt Nam Nhân
                                ngày Phụ nữ Việt Nam 20/10, MG Việt Nam xin gửi lời chúc tốt đẹp nhất đến “một nửa thế
                                giới”, chúc phái đẹp luôn là những đóa hoa tươi tắn, hạnh phúc và tự tin chinh phục mọi
                                hành trình! <img draggable="false" role="img" class="emoji" alt="🌸"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f338.svg"> <img
                                    draggable="false" role="img" class="emoji" alt="💝"
                                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f49d.svg"> Cơ hội tuyệt vời để
                                lựa chọn chiếc xe MG ưng ý: Ưu đãi 10.000.000 VNĐ tiền mặt dành tặng riêng cho khách
                                hàng nữ khi đăng ký mua xe MG trong tháng 10 này, áp dụng trên toàn hệ thống đại lý MG
                                Việt Nam. Thời gian: 01/10/2025 đến hết 31/10/2025. Chương trình áp dụng cho 100 khách
                                hàng nữ đầu tiên đăng ký mua xe trong thời gian ưu đãi. Vui lòng liên hệ Hotline 1800
                                3366 hoặc cơ sở đại lý gần nhất để tìm hiểu thêm. ______________________________________
                                Thông tin liên... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>18/10/2025</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-phu-nu-viet-nam-20-10/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-nhan-ngay-phu-nu-viet-nam-20-10/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
                <div class="swiper-slide" role="group" aria-label="9 / 9" data-swiper-slide-index="8"
                    style="width: 473.333px; margin-right: 30px;">

                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url(https://mgmotor.vn/wp-content/uploads/2025/10/Canh-bao-02-scaled.jpg)"></span>
                            </div>
                            <a href="https://mgmotor.vn/tin-tuc/canh-bao-cac-hoat-dong-tuyen-dung-gia-mao-mg-viet-nam/"
                                class="stretched-link"></a>
                        </div>
                        <div class="item-news__content">
                            <div class="mt-4 item-news__tag">
                            </div>
                            <div class="mt-3 fs24 cl-black">
                                <a
                                    href="https://mgmotor.vn/tin-tuc/canh-bao-cac-hoat-dong-tuyen-dung-gia-mao-mg-viet-nam/">THÔNG
                                    BÁO: MG VIỆT NAM KHÔNG TỔ CHỨC TUYỂN DỤNG HAY VẬN ĐỘNG QUYÊN GÓP QUA BẤT KỲ HÌNH
                                    THỨC NÀO</a>
                            </div>
                            <div class="fs18 cl-gray mt-2">MG Việt Nam tiếp tục ghi nhận nhiều trường hợp mạo danh Công
                                ty và thương hiệu MG nhằm thực hiện các hành vi lừa đảo tuyển dụng và kêu gọi quyên góp.
                                Các đối tượng này sử dụng trái phép hình ảnh, văn bản, logo, lấy danh nghĩa MG Việt Nam
                                (Công ty TNHH SAIC Motor Việt Nam) để tạo lòng tin, sau đó gửi tin nhắn, email hoặc
                                đường link giả mạo nhằm đánh cắp thông tin cá nhân hoặc yêu cầu người dùng chuyển tiền
                                dưới các hình thức như “phí tuyển dụng”, “đóng góp thiện nguyện” hay bất kỳ loại chi phí
                                nào khác. Cảnh báo về fanpage không chính thức mạo danh MG Việt Nam đưa ra các hoạt động
                                tuyển dụng Công ty TNHH SAIC Motor Việt Nam (MG Việt Nam) xin thông báo: MG Việt Nam
                                không tổ chức bất kỳ chương trình... </div>
                            <div class="dis-flex">
                                <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                    <span>15/10/2025</span>
                                    <!-- <a href="https://mgmotor.vn/tin-tuc/canh-bao-cac-hoat-dong-tuyen-dung-gia-mao-mg-viet-nam/">Đọc bài viết</a> -->
                                </div>
                            </div>
                        </div>
                        <!-- <a href="https://mgmotor.vn/tin-tuc/canh-bao-cac-hoat-dong-tuyen-dung-gia-mao-mg-viet-nam/" class="stretched-link"></a> -->
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- Add Pagination and Navigation -->
            <div
                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet"
                    tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
                    role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                    tabindex="0" role="button" aria-label="Go to slide 5"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0"
                    role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet"
                    tabindex="0" role="button" aria-label="Go to slide 8"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 9"></span></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                aria-controls="swiper-wrapper-9ab693f3985595ad"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper-9ab693f3985595ad"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>

        <!-- <a href="#" class="d-lg-none btn btn-outline-black w-100 mt-4">XEM TẤT CẢ</a> -->

        <a href="https://mgmotor.vn/tin-tuc/" class="btn-container btn-container--gray btn-full d-lg-none mt-4">
            <span class="btn-container__mas">XEM TẤT CẢ</span>
            <span class="btn-container__btn">XEM TẤT CẢ</span>
        </a>

    </div>
    <div class="sp-24"></div>
</div>
