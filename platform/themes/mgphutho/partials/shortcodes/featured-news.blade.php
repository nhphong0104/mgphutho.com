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
        <div class="tt-section text-center text-md-start">{!! BaseHelper::clean($title) !!}</div>
        @if ($subtitle)
            <div class="dsc-section text-center text-md-start mt-2"> {!! BaseHelper::clean($subtitle) !!}</div>
        @endif

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    @foreach (get_featured_posts(6) as $post)
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