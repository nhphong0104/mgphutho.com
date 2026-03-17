
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
{!! Theme::partial('popup_customer_data') !!}

