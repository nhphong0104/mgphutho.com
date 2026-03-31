<?php

namespace Botble\Contact\Forms\Fronts;

use Botble\Base\Facades\Html;
use Botble\Base\Forms\FieldOptions\ButtonFieldOption;
use Botble\Base\Forms\FieldOptions\CheckboxFieldOption;
use Botble\Base\Forms\FieldOptions\HtmlFieldOption;
use Botble\Base\Forms\FieldOptions\InputFieldOption;
use Botble\Base\Forms\FieldOptions\NumberFieldOption;
use Botble\Base\Forms\FieldOptions\RadioFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\DateField;
use Botble\Base\Forms\Fields\DatetimeField;
use Botble\Base\Forms\Fields\EmailField;
use Botble\Base\Forms\Fields\HtmlField;
use Botble\Base\Forms\Fields\NumberField;
use Botble\Base\Forms\Fields\OnOffCheckboxField;
use Botble\Base\Forms\Fields\RadioField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\Fields\TimeField;
use Botble\Contact\Enums\CustomFieldType;
use Botble\Contact\Http\Requests\ContactRequest;
use Botble\Contact\Models\Contact;
use Botble\Contact\Models\CustomField;
use Botble\Theme\Facades\Theme;
use Botble\Theme\FormFront;
use Closure;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Throwable;

use function Symfony\Component\String\s;

class DataCustomer extends FormFront
{
    protected string $errorBag = 'contact';

    protected ?string $formInputWrapperClass = 'contact-form-group';

    protected ?string $formInputHiddenClass = 'hidden';

    protected ?string $formInputClass = 'contact-form-input';

    public static function formTitle(): string
    {
        return trans('plugins/contact::contact.contact_form');
    }

    public function setup(): void
    {
        $data = $this->getModel();

        try {
            $displayFields = array_filter(explode(',', (string) Arr::get($data, 'display_fields'))) ?: ['phone', 'email', 'address', 'subject'];
        } catch (Throwable) {
            $displayFields = ['phone', 'email', 'address', 'subject'];
        }

        try {
            $mandatoryFields = array_filter(explode(',', (string) Arr::get($data, 'mandatory_fields'))) ?: ['email'];
        } catch (Throwable) {
            $mandatoryFields = ['email'];
        }

        $this
            ->contentOnly()
            ->model(Contact::class)
            ->setUrl(route('public.send.contact'))
            ->setValidatorClass(ContactRequest::class)
            ->setFormOption('class', 'contact-form contact-form-style-1')
            
            ->add(
                    'name',
                    TextField::class,
                    TextFieldOption::make()
                        ->required()
                        ->label(__('Họ tên'))
                        ->placeholder(__('Họ tên của bạn'))
                        ->wrapperAttributes(['class' => $this->formInputWrapperClass])
                        ->cssClass($this->formInputClass)
                        ->maxLength(-1)
                )
            
            ->add(
                'phone',
                TextField::class,
                TextFieldOption::make()
                    ->when(in_array('phone', $mandatoryFields), function (TextFieldOption $option): void {
                        $option->required();
                    })
                    ->label(__('Số điện thoại'))
                    ->placeholder(__('Số điện thoại của bạn'))
                    ->wrapperAttributes(['class' => $this->formInputWrapperClass])
                    ->cssClass($this->formInputClass)
                    ->maxLength(-1)
            )
            ->add(
                'subject',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('Sản phẩm quan tâm'))
                    ->choices(array_merge([0 =>'Chọn sản phẩm'], get_product_categories()->pluck('name', 'id')->toArray())),
            )
            
            ->add(
                'submit',
                'submit',
                ButtonFieldOption::make()
                    ->label(__('Gửi thông tin'))
                    ->cssClass('btn btn-primary'),
            )
            ->add(
                'content',
                TextareaField::class,
                TextareaFieldOption::make()
                    ->required()
                    ->value('Quan tâm tới xe MG')
                    ->placeholder(__('Write your message here'))
                    ->cssClass($this->formInputClass)
                    ->wrapperAttributes(['class' => $this->formInputHiddenClass])
            )
            ->add(
                'email',
                EmailField::class,
                TextFieldOption::make()
                    ->when(in_array('email', $mandatoryFields), function (TextFieldOption $option): void {
                        $option->required();
                    })
                    ->value(time() . '-' . uniqid() . '@example.com')
                    ->placeholder(__('Your Email'))
                    ->wrapperAttributes(['class' => $this->formInputHiddenClass])
                    ->cssClass($this->formInputClass)
                    ->maxLength(-1)
            )
            ->add('wrapper_after', HtmlField::class, HtmlFieldOption::make()->content('</div>'))
            ->add(
                'messages',
                HtmlField::class,
                HtmlFieldOption::make()
                    ->content(<<<'HTML'
                        <div class="newsletter-message newsletter-success-message" style="display: none"></div>
                        <div class="newsletter-message newsletter-error-message" style="display: none"></div>
                    HTML)
            );
    }
}
