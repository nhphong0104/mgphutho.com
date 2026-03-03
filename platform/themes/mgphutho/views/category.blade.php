@php
    Theme::set('pageName', $category->name);
    Theme::layout('blog-sidebar');
@endphp
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
                <!--        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                <!--        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <!--        <li class="page-item"><a class="page-link" href="#">4</a></li>-->
                <!--        <li class="page-item"><a class="page-link" href="#">...</a></li>-->
                <li class="page-item">
                    <a class="page-link page-link--icon" href="?category=khuyen-mai&amp;i=2"><i
                            class="ic ic--arrow-black"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
