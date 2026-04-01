
@if (is_plugin_active('newsletter') && theme_option('enable_newsletter_popup', 'yes') === 'yes')
    <div data-session-domain="{{ config('session.domain') ?? request()->getHost() }}"></div>
    <div class="modal fade subscribe_popup" id="newsletter-modal"
        data-time="{{ (int) theme_option('newsletter_show_after_seconds', 10) * 1000 }}" data-backdrop="static"
        data-keyboard="false" tabindex="-1" role="dialog" aria-label="Subscribe popup" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                    <div class="row no-gutters">
                        <div class="col-sm-6">
                            @if (theme_option('newsletter_image'))
                                <div class="background_bg h-100"
                                    style="background-image: url('{{ RvMedia::getImageUrl(theme_option('newsletter_image')) }}');"></div>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <div class="popup_content">
                                <div class="popup-text">
                                    <div class="heading_s4">
                                        <h4>Nhận báo giá & Ưu đãi!</h4>
                                    </div>
                                    <p>Ngay sau khi nhận được yêu cầu Chúng tôi sẽ gửi Báo giá Ưu đãi đến Quý khách ngay!</p>
                                </div>

                                {!! \Botble\Contact\Forms\Fronts\DataCustomer::create()->renderForm() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
