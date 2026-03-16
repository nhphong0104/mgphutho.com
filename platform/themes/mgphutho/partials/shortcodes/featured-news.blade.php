<div class="block-news">
    <div class="sp-24"></div>
    <div class="container">
        <div class="tt-section text-center text-md-start">{!! BaseHelper::clean($title) !!}</div>
        @if ($subtitle)
            <div class="dsc-section text-center text-md-start mt-2"> {!! BaseHelper::clean($subtitle) !!}</div>
        @endif

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    @foreach (get_related_posts(6) as $post)
                    <!-- <div class="col-12 col-lg-4 mt-4"> -->
                            <div class="item-news">
                                <div class="img">
                                    <div class="img__bg">
                                        <span style="background-image: url({{ RvMedia::getImageUrl($post->image) }})"></span>
                                    </div>
                                    <a href="{{ $post->url }}"  class="stretched-link"></a>
                                </div>
                                <div class="item-news__content">
                                    <div class="mt-4 item-news__tag">
                                    </div>
                                    <div class="mt-3 fs24 cl-black">
                                        <a href="{{ $post->url }}">{{ $post->name }}</a>
                                    </div>
                                    <div class="fs18 cl-gray mt-2">{{ Str::limit($post->description, 110) }}</div>
                                    <div class="mt-4 cl-red fw500 text-end d-none d-md-block">
                                        <span>{{ $post->created_at->translatedFormat('d/m/Y') }}</span>
                                        <!--         <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-11-hanh-trinh-vuon-xa/">Đọc bài viết</a> -->
                                    </div>
                                </div>
                                <!-- <a href="https://mgmotor.vn/tin-tuc/chuong-trinh-uu-dai-thang-11-hanh-trinh-vuon-xa/" class="stretched-link"></a> -->
                            </div>
                    <!-- </div> -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="sp-24"></div>
</div>