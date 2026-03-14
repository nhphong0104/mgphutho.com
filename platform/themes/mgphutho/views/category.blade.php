@php
    Theme::set('pageName', $category->name);
    Theme::layout('blog-sidebar');
@endphp

<div id="banner-wrapper" class="">
    <div class="porto-block ">
        <div class="vc_single_image-wrapper  vc_box_border_grey">
            <img width="100%" height="457"  src="https://mgphutho.com/storage/banners/services.jpg"
                                    class="vc_single_image-img attachment-full" alt="banner-tintuc" decoding="async"
                                    loading="lazy"></div>
        </div>
        <div class="wpb_text_column wpb_content_element  absolute_left" style="left: 175.4px;">
            <div class="wpb_wrapper">
                <h1>{{ $category->name }}</h1>
                    <p>Cung cấp những thông tin mới nhất<br>
                    về MG Motor.</p>
            </div>
	    </div>
    </div>
</div>

<div class="container">
    <div class="d-flex align-items-center">
        <div class="block-news__scroll">
            <div>
                @foreach(get_featured_categories() as $featuredCategory)
                    <a href="{{ $featuredCategory->url }}"
                        class="btn-container btn-container--gray {{ $category->id == $featuredCategory->id ? 'btn-container--active' : '' }} text-nowrap">
                        <span class="btn-container__mas">{{ $featuredCategory->name }}</span>
                        <span class="btn-container__btn">{{ $featuredCategory->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row row-16">
        @include(Theme::getThemeNamespace() . '::views.templates.posts')
        <div class="sp-40"></div>
        <nav>
            <ul class="pagination justify-content-center align-items-center">
                <li class="page-item active"><a class="page-link" href="?category=khuyen-mai&amp;i=1">1</a>
                </li>
                <li class="page-item "><a class="page-link" href="?category=khuyen-mai&amp;i=2">2</a>
                </li>
                <li class="page-item "><a class="page-link" href="?category=khuyen-mai&amp;i=3">3</a>
                </li>
                <li class="page-item "><a class="page-link" href="?category=khuyen-mai&amp;i=4">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link page-link--icon" href="?category=khuyen-mai&amp;i=2"><i
                            class="ic ic--arrow-black"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
