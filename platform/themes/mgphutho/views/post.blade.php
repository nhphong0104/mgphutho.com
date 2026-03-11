@php Theme::set('pageName', __('Blog')) @endphp
<div class="block-detail">
    <div class="container">
        <div class="block-detail__top">
            <div class="cl-gray text-end">{{ $post->created_at->translatedFormat('d/m/Y') }}</div>
        </div>
        <h2 class="fs48 mt-3">{{ $post->name }}</h2>
        <div class="mt-3 block-detail__content">
            <div class="detail-content">
                {!! BaseHelper::clean($post->content) !!}
            </div>
            <p>______________________________________</p>

            <p><em>Thông tin liên hệ MG Phú Thọ</em></p>

            <ul class="wp-block-list">
                {{-- <li><em>Website:</em><a href="http://mgmotor.vn/"><em> mgmotor.vn</em></a></li>
                <li><em>Hotline: 18003366</em></li>
                <li><em>Email: info.smv@smil.com&nbsp;</em></li>
                <li><em>Tiktok:</em><a href="https://www.tiktok.com/@mgmotorvietnam"><em> @mgmotorvietnam</em></a></li>
                <li><em>Facebook:</em><a href="https://www.facebook.com/mgvietnam.vn/"><em> mgvietnam.vn</em></a></li>
                <li><em>Youtube:</em><a href="https://www.youtube.com/@MGVietnam"><em> @MGVietnam</em></a></li> --}}
            </ul>
            <p></p>
        </div>
        <div class="block-detail_tags">
        </div>
    </div>
</div>
@php $relatedPosts = get_related_posts($post->id, 2); @endphp

@if ($relatedPosts->count())
    <br>
    <div class="related_post">
        <div class="content_title">
            <h5>{{ __('Related posts') }}</h5>
        </div>
        <div class="row">
            @foreach ($relatedPosts as $relatedItem)
                <div class="col-12 col-lg-4 mt-4">
                    <div class="item-news">
                        <div class="img">
                            <div class="img__bg">
                                <span
                                    style="background-image: url({{ RvMedia::getImageUrl($post->image, false, RvMedia::getDefaultImage()) }})"></span>
                            </div>
                            <a href="{{ $post->url }}" class="stretched-link"></a>
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
                </div>
            @endforeach
        </div>
    </div>
@endif
