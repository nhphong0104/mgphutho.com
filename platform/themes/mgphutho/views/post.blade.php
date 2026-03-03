@php Theme::set('pageName', __('Blog')) @endphp

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="single_post">
                    <h2 class="blog_title">{{ $post->name }}</h2>
                    <ul class="list_none blog_meta">
                        <li><i class="ti-calendar"></i> {{ $post->created_at->translatedFormat('M d, Y') }}</li>
                        <li><i class="ti-pencil-alt"></i>
                            @if (!$post->categories->isEmpty())
                                @foreach ($post->categories as $category)
                                    <a href="{{ $category->url }}">{{ $category->name }}</a>
                                    @if (!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            @endif
                        </li>
                        <li><i class="ti-eye"></i> {{ number_format($post->views) }} {{ __('Views') }}</li>
                    </ul>
                    <div class="blog_img">
                        <img src="{{ RvMedia::getImageUrl($post->image, null, false, RvMedia::getDefaultImage()) }}"
                            alt="{{ $post->name }}" loading="lazy" />
                    </div>
                    <div class="blog_content">
                        <div class="blog_text">
                            <div class="ck-content">{!! BaseHelper::clean($post->content) !!}</div>
                            <div class="blog_post_footer">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <div class="tags">
                                            @if (!$post->tags->isEmpty())
                                                @foreach ($post->tags as $tag)
                                                    <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="social_icons text-md-right">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->url) }}&title={{ rawurldecode($post->description) }}"
                                                    target="_blank" title="{{ __('Share on Facebook') }}"><i
                                                        class="ion-social-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet?url={{ urlencode($post->url) }}&text={{ rawurldecode($post->description) }}"
                                                    target="_blank" title="{{ __('Share on Twitter') }}"><i
                                                        class="ion-social-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($post->url) }}&summary={{ rawurldecode($post->description) }}&source=Linkedin"
                                                    title="{{ __('Share on Linkedin') }}" target="_blank"><i
                                                        class="ion-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br>
                            {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $post) !!}
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
                                <div class="col-md-6">
                                    <div class="blog_post blog_style2 box_shadow1">
                                        <div class="blog_img">
                                            <a href="{{ $relatedItem->url }}"><img
                                                    src="{{ RvMedia::getImageUrl($relatedItem->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                                    alt="{{ $relatedItem->name }}" loading="lazy" /></a>
                                        </div>
                                        <div class="blog_content bg-white">
                                            <div class="blog_text">
                                                <h3 class="blog_title"><a
                                                        href="{{ $relatedItem->url }}">{{ $relatedItem->name }}</a>
                                                </h3>
                                                <ul class="list_none blog_meta">
                                                    <li><i class="ti-calendar"></i>
                                                        {{ $relatedItem->created_at->translatedFormat('M d, Y') }}</li>
                                                    <li><i class="ti-eye"></i> {{ number_format($relatedItem->views) }}
                                                        {{ __('Views') }}</li>
                                                </ul>
                                                <p>{{ Str::limit($relatedItem->description, 110) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-xl-3 mt-4 pt-2 mt-xl-0 pt-xl-0">
                <div class="sidebar">
                    {!! dynamic_sidebar('primary_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="block-detail">
    <div class="container">
        <div class="block-detail__top">
            <div class="cl-gray text-end">November 6, 2025</div>
        </div>
        <h2 class="fs48 mt-3">CHƯƠNG TRÌNH ƯU ĐÃI THÁNG 11 – HÀNH TRÌNH VƯƠN XA</h2>
        <div class="mt-3 block-detail__content">

            <p>Một năm đang dần khép lại, mở ra những dự định mới và nhiều hành trình đang chờ đón. Cùng MG Việt Nam tìm
                kiếm người bạn đồng hành lý tưởng để bắt đầu những chuyến đi trọn vẹn bên gia đình và người thân.</p>


            <div class="wp-block-image">
                <figure class="aligncenter size-large"><img fetchpriority="high" decoding="async" width="1024"
                        height="576"
                        src="https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-1024x576.jpg"
                        alt="" class="wp-image-7610"
                        srcset="https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-1024x576.jpg 1024w, https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-300x169.jpg 300w, https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-768x432.jpg 768w, https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-1536x864.jpg 1536w, https://mgmotor.vn/wp-content/uploads/2025/11/251104_MG-CTKM-T11_16-9-1-2048x1152.jpg 2048w"
                        sizes="(max-width: 1024px) 100vw, 1024px">
                    <figcaption class="wp-element-caption"><em>Chương trình ưu đãi tháng 11 với nhiều ưu đãi hấp dẫn
                            diễn ra tại đại lý MG Việt Nam</em></figcaption>
                </figure>
            </div>


            <p><img draggable="false" role="img" class="emoji" alt="💥"
                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f4a5.svg"> Chương trình ưu đãi tháng 11, giúp quý
                khách dễ dàng lựa chọn những mẫu xe MG phù hợp tại hệ thống Đại lý toàn quốc.</p>



            <ul class="wp-block-list">
                <li><img draggable="false" role="img" class="emoji" alt="👤"
                        src="https://s.w.org/images/core/emoji/17.0.2/svg/1f464.svg"> Đối tượng áp dụng: Khách hàng đã
                    xuất hóa đơn GTGT trong thời gian diễn ra chương trình</li>



                <li><img draggable="false" role="img" class="emoji" alt="⏰"
                        src="https://s.w.org/images/core/emoji/17.0.2/svg/23f0.svg"> Thời gian áp dụng: Từ 01/11 đến hết
                    30/11/2025</li>
            </ul>



            <p><img draggable="false" role="img" class="emoji" alt="🔗"
                    src="https://s.w.org/images/core/emoji/17.0.2/svg/1f517.svg"> Chi tiết chương trình ưu đãi xem tại:
            </p>



            <figure class="wp-block-table">
                <table class="has-fixed-layout">
                    <tbody>
                        <tr>
                            <td>Loại xe</td>
                            <td>Năm sản xuất</td>
                            <td>Chi tiết khuyến mãi</td>
                        </tr>
                        <tr>
                            <td>MG5 1.5 STD</td>
                            <td>2024-2025</td>
                            <td>Tặng lệ phí trước bạ trị giá 24,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>MG5 1.5 LUX</td>
                            <td>2024-2025</td>
                            <td>Tặng lệ phí trước bạ trị giá 26,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>ZS 1.5 STD</td>
                            <td>2025</td>
                            <td>Tặng lệ phí trước bạ trị giá 26,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>ZS 1.5 LUX</td>
                            <td>2025</td>
                            <td>Tặng lệ phí trước bạ trị giá 29,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>HS 1.5T DEL</td>
                            <td>2024</td>
                            <td>Tặng phí trước bạ + 1 năm BHVC trị giá 40,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>HS 1.5T LUX</td>
                            <td>2024</td>
                            <td>Tặng phí trước bạ + 1 năm BHVC trị giá 45,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>MG G50 1.5T MT</td>
                            <td>2025</td>
                            <td>Tặng bảo hiểm vật chất trị giá 30,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>MG G50 1.5T AT DEL</td>
                            <td>2025</td>
                            <td>Tặng bảo hiểm vật chất trị giá 10,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>MG G50 1.5T AT LUX</td>
                            <td>2025</td>
                            <td>Tặng bảo hiểm vật chất trị giá 10,000,000 VNĐ</td>
                        </tr>
                        <tr>
                            <td>MG4 EV DEL/LUX</td>
                            <td>2024</td>
                            <td>Tặng BHVC trị giá 20,000,000 VNĐ.Tặng bộ sạc điện 7KW.&nbsp;Miễn phí sạc 12 tháng với hệ
                                thống sạc công cộng của các đối tác MG.&nbsp;Bảo hành pin 1 đổi 1 trong 7 năm.</td>
                        </tr>
                        <tr>
                            <td>MG CYBERSTER LUX 4WD</td>
                            <td>2024</td>
                            <td>Tặng BHVC trị giá 50,000,000 VNĐ.Tặng bộ sạc điện 7KW.&nbsp;Miễn phí sạc 12 tháng với hệ
                                thống sạc công cộng của các đối tác MG.Bảo hành pin 1 đổi 1 trong 7 năm</td>
                        </tr>
                    </tbody>
                </table>
            </figure>
            <p>______________________________________</p>

            <p><em>Thông tin liên hệ MG Việt Nam</em></p>

            <ul class="wp-block-list">
                <li><em>Website:</em><a href="http://mgmotor.vn/"><em> mgmotor.vn</em></a></li>



                <li><em>Hotline: 18003366</em></li>



                <li><em>Email: info.smv@smil.com&nbsp;</em></li>



                <li><em>Tiktok:</em><a href="https://www.tiktok.com/@mgmotorvietnam"><em> @mgmotorvietnam</em></a></li>
                <li><em>Facebook:</em><a href="https://www.facebook.com/mgvietnam.vn/"><em> mgvietnam.vn</em></a></li>
                <li><em>Youtube:</em><a href="https://www.youtube.com/@MGVietnam"><em> @MGVietnam</em></a></li>
            </ul>
            <p></p>
        </div>
        <div class="block-detail_tags">
        </div>
    </div>
</div>
