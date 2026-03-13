
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

                <div class="col col_3 footer-block">
                    <p class="title-footer-block collapse-title">Dịch vụ khách hàng</p>
                    <ul class="list-group collapse-content">
                        <li><a href="/bang-gia-xe-485308n.html" title="Bảng giá xe MG">Bảng giá xe MG</a></li>
                        <li><a href="/mua-xe-tra-gop-485309n.html" title="Mua xe MG trả góp">Mua xe MG trả góp</a></li>
                        <li><a href="/lien-he.html">Đăng ký lái thử tại Showroom</a></li>
                    </ul>
                </div>
                <div class="col col_3 footer-block">
                    <p class="title-footer-block collapse-title">Dịch vụ khách hàng</p>

                    <ul class="list-group collapse-content">
                        <li><a href="/bang-gia-xe-485308n.html" title="Bảng giá xe MG">Bảng giá xe MG</a></li>
                        <li><a href="/mua-xe-tra-gop-485309n.html" title="Mua xe MG trả góp">Mua xe MG trả góp</a></li>
                        <li><a href="/lien-he.html">Đăng ký lái thử tại Showroom</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="copyright group">
    <div class="container group copyright-content">
        <div class="col col_9">
            <p class="copy-right">Copyright© 2024</p>
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


@if (is_plugin_active('newsletter') && theme_option('enable_newsletter_popup', 'yes') === 'yes')
    <div data-session-domain="{{ config('session.domain') ?? request()->getHost() }}"></div>
    <div class="modal fade subscribe_popup" id="newsletter-modal"
        data-time="{{ (int) theme_option('newsletter_show_after_seconds', 10) * 1000 }}" data-backdrop="static"
        data-keyboard="false" tabindex="-1" role="dialog" aria-label="Subscribe popup" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                    </button>
                    <div class="row no-gutters">
                        <div class="col-sm-5">
                            @if (theme_option('newsletter_image'))
                                <div class="background_bg h-100"
                                    data-img-src="{{ RvMedia::getImageUrl(theme_option('newsletter_image')) }}"></div>
                            @endif
                        </div>
                        <div class="col-sm-7">
                            <div class="popup_content">
                                <div class="popup-text">
                                    <div class="heading_s4">
                                        <h4>{{ __('Subscribe and Get 25% Discount!') }}</h4>
                                    </div>
                                    <p>{{ __('Subscribe to the newsletter to receive updates about new products.') }}</p>
                                </div>
                                {!!
                                \Botble\Newsletter\Forms\Fronts\NewsletterForm::create()
                                    ->setFormInputClass('form-control rounded-0 mb-3')
                                    ->modify('email', 'email', [
                                        'attr' => ['placeholder' => __('Enter Your Email')],
                                    ])
                                    ->modify('submit', 'submit', [
                                        'attr' => [
                                            'class' => 'btn btn-block text-uppercase rounded-0"',
                                            'style' => 'background: #333; color: #fff;',
                                        ],
                                    ])
                                    ->renderForm()
                                    !!}
                                <div class="chek-form text-left form-group">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="dont_show_again"
                                            id="dont_show_again" value="">
                                        <label class="form-check-label"
                                            for="dont_show_again"><span>{{ __("Don't show this popup again!") }}</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif