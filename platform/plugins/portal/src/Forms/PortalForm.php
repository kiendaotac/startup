<?php

namespace Botble\Portal\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Portal\Http\Requests\PortalRequest;
use Botble\Portal\Models\Portal;

class PortalForm extends FormAbstract
{

    /**
     * @return mixed|void
     * @throws \Throwable
     */
    public function buildForm()
    {
        $pageLabel = $this->getPageLabel();
        $this
            ->setupModel(new Portal)
            ->setValidatorClass(PortalRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('description', 'textarea', [
                'label'      => __('Description'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => __('Description'),
                ],
            ])
            ->add('image', 'mediaImage', [
                'label'      => __('Image'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('link', 'text', [
                'label'      => __('Link'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => __('Link'),
                ],
            ])
            ->add('order', 'number', [
                'label'      => __('Order'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => __('Order'),
                ],
            ])
            ->add('page_id', 'customSelect', [
                'label'      => __('Page'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'class' => 'form-control select-full',
                ],
                'choices'    => $pageLabel,
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

    private function getPageLabel()
    {
        return get_all_pages()->pluck('name', 'id')->toArray();
    }
}
