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
    <div class="row row-16">
        @include(Theme::getThemeNamespace() . '::views.templates.posts')
        <div class="sp-40"></div>
        
    </div>
</div>
