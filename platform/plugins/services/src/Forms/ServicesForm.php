<?php

namespace Botble\Services\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Services\Http\Requests\ServicesRequest;
use Botble\Services\Models\Services;

class ServicesForm extends FormAbstract
{

    /**
     * @return mixed|void
     * @throws \Throwable
     */
    public function buildForm()
    {
        $categoryLabel = $this->getCategoryLabel();
        $this
            ->setupModel(new Services)
            ->setValidatorClass(ServicesRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('icon', 'mediaImage', [
                'label'      => trans('Icon'),
                'label_attr' => ['class' => 'control-label required'],
            ])
            ->add('order', 'number', [
                'label'      => trans('Order'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Order'),
                    'data-counter' => 120,
                ],
            ])
            ->add('category_id', 'customSelect', [
                'label'      => __('Category'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => $categoryLabel,
            ])
            ->add('status', 'customSelect', [
                'label'      => trans('core/base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => BaseStatusEnum::labels(),
            ])
            ->setBreakFieldPoint('status');
    }

    private function getCategoryLabel()
    {
        return get_all_categories(['status' => BaseStatusEnum::PUBLISHED])->sortBy('created_at')->pluck('name', 'id')->toArray();
    }
}
