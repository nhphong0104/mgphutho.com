
<div class="footer group">
    <div class="container group footer-content">
        <div class="footer-content group">
            <div class="section">
                <div class="col col_4 footer-block">
                    <div class="contact">
                        <h4 class="title-footer-block">{{ theme_option('company_name') }}</h4>

                        <ul>
                            <li><span class="icon"><em class="fa fa-phone">&nbsp; </em> </span>

                                <p><a href="tel:0971593326">Phụ trách KD: {{ theme_option('hotline') }}</a></p>
                            </li>
                            <li><span class="icon"><em class="fa fa-envelope">&nbsp; </em> </span>
                                <p><a href="mailto:{{ theme_option('email') }}">Email: {{ theme_option('email') }}</a>
                                </p>
                            </li>
                            <li><span class="icon"><em class="fa fa-home">&nbsp; </em> </span>
                                <p>Địa chỉ: {{ theme_option('address') }}</p>
                            </li>
                            <li><span class="icon"><em class="fa fa-at">&nbsp; </em> </span>
                                <p><a href="https://mgphutho.com">https://mgphutho.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col col_2 footer-block">
                    <p class="title-footer-block collapse-title">Dòng xe MG</p>

                    <ul class="list-group collapse-content">
                        @foreach (get_product_categories() as $item)
                            <li><a href="{{ $item->url }}" title="{{ $item->name }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                {!! dynamic_sidebar('footer_sidebar') !!}
            </div>
        </div>
    </div>
</div>
<div class="copyright group">
    <div class="container group copyright-content">
        <div class="col col_9">
            <p class="copy-right">Copyright© 2026</p>
        </div>
        <div class="col col_3">
        </div>
    </div>
</div>
</section>
<section class="cd-nav">
    {!! Menu::renderMenuLocation('main-menu', ['view' => 'menu', 'options' => ['class' => 'cd-primary-nav', 'id' => 'cd-primary-nav']]) !!}
    </div>
</section>

<p id="back-top"><a href="javascript:void(0);" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a></p>
<a class="btn-call-now" href="tel:{{theme_option('hotline')}}" title="Gọi ngay cho chúng tôi"><em
        class="fa fa-phone">&nbsp;</em></a>
<div class="cd-overlay"></div>

<div class="wrap_hotline"><aside id="custom_html-2" class="widget_text widget sbg_widget Hotline widget_custom_html"><div class="textwidget custom-html-widget"><a href="tel:0918184646" class="callhotline" rel="nofollow">
<div class="call-phone">
<div class="animated infinite zoomIn call-circle"></div>
<div class="animated infinite pulse call-circle-fill"></div>
<div class="animated infinite tada call-img-circle"></div>
</div>
</a>
<div class="fb_zalo">
<ul>
	<li><a href="https://m.me/dailymglangha" target="_blank" rel="noopener"><img src="https://mglangha.com.vn/wp-content/uploads/2024/02/fb.png" alt="Fb"></a></li>
<li><a href="https://zalo.me/0918184646" target="_blank" rel="noopener"><img src="https://mglangha.com.vn/wp-content/uploads/2024/02/zalo.png" alt="Zalo"></a></li>
</ul>
</div></div></aside></div>

{!! Theme::partial('popup_customer_data') !!}

