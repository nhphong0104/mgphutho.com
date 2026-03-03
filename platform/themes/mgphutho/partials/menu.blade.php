<ul {!! $options !!}>
<li class="">
        <a href="/" title="Trang chủ">Trang chủ</a>
    </li>
    <li class="has-children">
        <a href="/san-pham.html" title="Sản phẩm">Sản phẩm</a>
        <ul class="cd-secondary-nav is-hidden">
            <li class="go-back"><a href="javascript:void(0);">Sản phẩm</a></li>
            <li class="see-all"><a href="/san-pham.html">Tất cả danh mục Sản phẩm</a></li>
            <li class="">
                <a href="/mg4-ev-515008s.html" title="MG4 EV">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/mg4-ev-2638299j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">MG4 EV</h2>
                </a>
            </li>
            <li class="">
                <a href="/mg-hs-512154s.html" title="MG HS">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/mg-hs-2568991j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">MG HS</h2>
                </a>
            </li>
            <li class="">
                <a href="/new-mg5-485785s.html" title="New MG5 MT">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/new-mg5-2568980j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">New MG5 MT</h2>
                </a>
            </li>
            <li class="">
                <a href="/mg5-494714s.html" title="MG5">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/mg5-2568978j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">MG5</h2>
                </a>
            </li>
            <li class="">
                <a href="/mg-zs-501188s.html" title="MG ZS">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/mg-zs-2568981j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">MG ZS</h2>
                </a>
            </li>
            <li class="">
                <a href="/mg-rx5-512152s.html" title="MG RX5">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/mg-rx5-2568979j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">MG RX5</h2>
                </a>
            </li>
            <li class="">
                <a href="/new-mg7-517360s.html" title="New MG7">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/new-mg7-2700826j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">New MG7</h2>
                </a>
            </li>
            <li class="">
                <a href="/mg-g5-520209s.html" title="MG G50">
                    <center><img style="max-width:100%;" class="lazyload"
                            data-src="https://drive.gianhangvn.com/image/mg-g5-2767768j31415.jpg" /></center>
                    <h2 class="sub-title-menu center">MG G50</h2>
                </a>
            </li>
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
            <p><a href="tel:0971593326" title="Gọi ngay cho chúng tôi">0971.593.326</a></p>
    </li>
</ul>