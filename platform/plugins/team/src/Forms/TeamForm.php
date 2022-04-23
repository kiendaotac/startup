<?php

namespace Botble\Team\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Team\Http\Requests\TeamRequest;
use Botble\Team\Models\Team;

class TeamForm extends FormAbstract
{

    /**
     * @return mixed|void
     * @throws \Throwable
     */
    public function buildForm()
    {
        $this
            ->setupModel(new Team)
            ->setValidatorClass(TeamRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label'      => trans('core/base::forms.name'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('title', 'text', [
                'label'      => trans('Title'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Title'),
                    'data-counter' => 120,
                ],
            ])
            ->add('fields', 'text', [
                'label'      => trans('Fields'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Fields'),
                    'data-counter' => 120,
                ],
            ])
            ->add('avatar', 'mediaImage', [
                'label'      => trans('Avatar'),
                'label_attr' => ['class' => 'control-label required'],
            ])
            ->add('phone', 'text', [
                'label'      => trans('Phone'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Phone'),
                    'data-counter' => 120,
                ],
            ])
            ->add('order', 'number', [
                'label'      => trans('Order'),
                'label_attr' => ['class' => 'control-label required'],
                'attr'       => [
                    'placeholder'  => trans('Order'),
                    'data-counter' => 120,
                ],
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
}
