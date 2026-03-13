@php Theme::set('pageName', $page->name) @endphp

<div id="app">
    @if ($page->template === 'homepage')
         {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 
'ck-content'])->toHtml(), $page) !!}
    @else
    <div id="banner-wrapper" class="">
        <div class="porto-block ">
            <div class="vc_single_image-wrapper  vc_box_border_grey">
                <img width="100%" height="457" src="https://mgphutho.com/storage/banners/services.jpg" class="vc_single_image-img attachment-full" alt="banner-tintuc" decoding="async" loading="lazy"></div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                {!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, Html::tag('div', BaseHelper::clean($page->content), ['class' => 
'ck-content'])->toHtml(), $page) !!}
            </div>
        </div>
    @endif
</div>
