<div class="section pt-0">
    <div class="row">
        <div class="col-12">
            <div class="field_form">
                {!!
                    $form
                        ->setFormOption('class', 'form--contact contact-form')
                        ->setFormInputClass('form-control')
                        ->add('helper_text', 'html', ['html' => '<p>' . BaseHelper::clean(__('The field with (<span style="color:#FF0000;">*</span>) is required.')) . '</p>'])
                        ->modify(
                                'submit',
                                'submit',
                                Botble\Base\Forms\FieldOptions\ButtonFieldOption::make()
                                    ->cssClass('btn btn-fill-out')
                                    ->label(__('Send Message'))
                                    ->wrapperAttributes(['class' => 'mb-3'])
                                    ->toArray(),
                                true
                            )
                        ->renderForm()
                !!}
            </div>
        </div>
    </div>
</div>
