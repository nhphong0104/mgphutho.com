<ul {!! $options !!}>
<li class="">
        <a href="/" title="Trang chủ">Trang chủ</a>
    </li>
    <li class="has-children">
        <a href="#" title="Sản phẩm">Sản phẩm</a>
        <ul class="cd-secondary-nav is-hidden">
            <li class="go-back"><a href="javascript:void(0);">Sản phẩm</a></li>
            @foreach (get_product_categories() as $item)
                <li class="">
                    <a href="{{ $item->url }}" title="{{ $item->name }}">
                        <center><img style="max-width:100%;" class="lazyload" data-src="{{ RvMedia::getImageUrl($item->image) }}" /></center>
                        <h2 class="sub-title-menu center">{{ $item->name }}</h2>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
    @foreach ($menu_nodes as $key => $row)
        <li @if ($row->has_child || $row->css_class || $row->active) class=" @if ($row->active) active @endif" @endif>
            <a  href="{{ $row->has_child ? '#' : url($row->url) }}" @if ($row->target !== '_self') target="{{ $row->target }}" @endif @if ($row->has_child) data-toggle="dropdown" @endif>
                {!! $row->icon_html !!}{{ $row->title }}
            </a>
        </li>
    @endforeach
    <li>
        <div class="hotline">
            <span class="icon"><em class="fa fa-phone">&nbsp;</em></span>
            <p><a href="tel:0971593326" title="Gọi ngay cho chúng tôi">{{ theme_option('hotline') }}</a></p>
    </li>
</ul>