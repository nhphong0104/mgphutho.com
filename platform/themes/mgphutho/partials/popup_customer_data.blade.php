
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
                                        <h4>Nhận báo giá & Ưu đãi!</h4>
                                    </div>
                                    <p>Ngay sau khi nhận được yêu cầu Chúng tôi sẽ gửi Báo giá Ưu đãi đến Quý khách ngay!</p>
                                </div>
                                {!!
                                \Botble\Newsletter\Forms\Fronts\NewsletterForm::create()
                                ->setFormInputClass('form-control rounded-0 mb-3')
                                    ->modify('name', 'text', [
                                        'attr' => ['placeholder' => __('Enter Your Name')],
                                    ])
                                    ->setFormInputClass('form-control rounded-0 mb-3')
                                    ->modify('email', 'email', [
                                        'attr' => ['placeholder' => __('Enter Your Email')],
                                    ])
                                    ->setFormInputClass('form-control rounded-0 mb-3')
                                    ->modify('phone', 'text', [
                                        'attr' => ['placeholder' => __('Enter Your Phone')],
                                    ])
                                    ->setFormInputClass('form-control rounded-0 mb-3')
                                     ->modify('product_category_id', 'select', [
                                        'choices' => get_product_categories()->pluck('name', 'id')->toArray(),
                                        'attr' => ['placeholder' => __('Select Product Category')],
                                    ])
                                    ->setFormInputClass('form-control rounded-0 mb-3')
                                    ->modify('submit', 'submit', [
                                        'attr' => [
                                            'class' => 'btn btn-block text-uppercase rounded-0"',
                                            'style' => 'background: #333; color: #fff;',
                                        ],
                                    ])
                                    ->renderForm()
                                    !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif