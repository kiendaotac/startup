<?php

app()->booted(function () {
    theme_option()
        ->setField([
            'id'         => 'copyright',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Copyright'),
            'attributes' => [
                'name'    => 'copyright',
                'value'   => '© 2021 Martfury. All right reserved.',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Change copyright'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Copyright on footer of site'),
        ])
        ->setSection([
            'title'      => __('Style'),
            'desc'       => __('Style of theme'),
            'id'         => 'opt-text-subsection-style',
            'subsection' => true,
            'icon'       => 'fa fa-bars',
        ])
        ->setField([
            'id'         => 'primary_font',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'googleFonts',
            'label'      => __('Primary font'),
            'attributes' => [
                'name'  => 'primary_font',
                'value' => 'Work Sans',
            ],
        ])
        ->setField([
            'id'         => 'primary_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Primary color'),
            'attributes' => [
                'name'  => 'primary_color',
                'value' => '#fcb800',
            ],
        ])
        ->setField([
            'id'         => 'secondary_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Secondary color'),
            'attributes' => [
                'name'  => 'secondary_color',
                'value' => '#222222',
            ],
        ])
        ->setField([
            'id'         => 'header_text_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Header text color'),
            'attributes' => [
                'name'  => 'header_text_color',
                'value' => '#000',
            ],
        ])
        ->setField([
            'id'         => 'header_text_hover_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Header text hover color'),
            'attributes' => [
                'name'  => 'header_text_hover_color',
                'value' => '#fff',
            ],
        ])
        ->setField([
            'id'         => 'header_text_accent_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Header text accent color'),
            'attributes' => [
                'name'  => 'header_text_accent_color',
                'value' => '#000',
            ],
        ])
        ->setField([
            'id'         => 'header_button_background_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Header button background color'),
            'attributes' => [
                'name'  => 'header_button_background_color',
                'value' => '#000',
            ],
        ])
        ->setField([
            'id'         => 'header_button_text_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Header button text color'),
            'attributes' => [
                'name'  => 'header_button_text_color',
                'value' => '#fff',
            ],
        ])
        ->setField([
            'id'         => 'button_text_color',
            'section_id' => 'opt-text-subsection-style',
            'type'       => 'customColor',
            'label'      => __('Button text color'),
            'attributes' => [
                'name'  => 'button_text_color',
                'value' => '#000',
            ],
        ])
        ->setField([
            'id'         => 'preloader_enabled',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customSelect',
            'label'      => __('Enable Preloader?'),
            'attributes' => [
                'name'    => 'preloader_enabled',
                'list'    => [
                    'yes' => trans('core/base::base.yes'),
                    'no'  => trans('core/base::base.no'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'enable_newsletter_popup',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'customSelect',
            'label'      => __('Enable newsletter popup?'),
            'attributes' => [
                'name'    => 'enable_newsletter_popup',
                'list'    => [
                    'no'  => trans('core/base::base.no'),
                    'yes' => trans('core/base::base.yes'),
                ],
                'value'   => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'newsletter_image',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'mediaImage',
            'label'      => __('Image for newsletter popup'),
            'attributes' => [
                'name'  => 'newsletter_image',
                'value' => null,
            ],
        ])
        ->setField([
            'id'         => 'newsletter_show_after_seconds',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'number',
            'label'      => __('Newsletter popup delay time (seconds)'),
            'attributes' => [
                'name'    => 'newsletter_show_after_seconds',
                'value'   => 10,
                'options' => [
                    'class'       => 'form-control',
                    'placeholder' => __('Default: 10 (seconds)'),
                ],
            ],
        ])
        ->setField([
            'id'         => 'welcome_message',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Welcome message'),
            'attributes' => [
                'name'    => 'welcome_message',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Welcome message'),
                    'data-counter' => 120,
                ],
            ],
        ])
        ->setField([
            'id'         => 'hotline',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Hotline'),
            'attributes' => [
                'name'    => 'hotline',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Hotline'),
                    'data-counter' => 30,
                ],
            ],
        ])
        ->setField([
            'id'         => 'address',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'text',
            'label'      => __('Address'),
            'attributes' => [
                'name'    => 'address',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Address'),
                    'data-counter' => 120,
                ],
            ],
        ])
        ->setField([
            'id'         => 'email',
            'section_id' => 'opt-text-subsection-general',
            'type'       => 'email',
            'label'      => __('Email'),
            'attributes' => [
                'name'    => 'email',
                'value'   => null,
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Email'),
                    'data-counter' => 120,
                ],
            ],
        ])
        ->setField([
            'id'         => 'payment_methods',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type'       => 'mediaImages',
            'label'      => __('Accepted Payment methods'),
            'attributes' => [
                'name'   => 'payment_methods[]',
                'values' => theme_option('payment_methods', []),
            ],
        ])
        ->setField([
            'id'         => 'payment_methods_link',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type'       => 'text',
            'label'      => __('Accepted Payment methods link (optional)'),
            'attributes' => [
                'name'   => 'payment_methods_link',
                'values' => null,
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => 'https://...',
                    'data-counter' => 255,
                ],
            ],
        ])
        ->setField([
            'id'         => 'show_featured_brands_on_products_page',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type'       => 'customSelect',
            'label'      => __('Show featured brands on the products page?'),
            'attributes' => [
                'name'    => 'show_featured_brands_on_products_page',
                'list'    => [
                    'no'  => trans('core/base::base.no'),
                    'yes' => trans('core/base::base.yes'),
                ],
                'value'   => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setField([
            'id'         => 'show_recommend_items_on_products_page',
            'section_id' => 'opt-text-subsection-ecommerce',
            'type'       => 'customSelect',
            'label'      => __('Show recommend items on the products page?'),
            'attributes' => [
                'name'    => 'show_recommend_items_on_products_page',
                'list'    => [
                    'no'  => trans('core/base::base.no'),
                    'yes' => trans('core/base::base.yes'),
                ],
                'value'   => 'yes',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ])
        ->setSection([
            'title'      => __('Product features'),
            'desc'       => __('Product features'),
            'id'         => 'opt-text-subsection-product-features',
            'subsection' => true,
            'icon'       => 'fa fa-cube',
        ])
        ->setSection([
            'title'      => __('Contact info boxes'),
            'desc'       => __('Contact info boxes'),
            'id'         => 'opt-text-subsection-contact-info-boxes',
            'subsection' => true,
            'icon'       => 'fa fa-envelope',
        ]);

    for ($i = 1; $i <= 5; $i++) {
        theme_option()
            ->setField([
                'id'         => 'product_feature_' . $i . '_title',
                'section_id' => 'opt-text-subsection-product-features',
                'type'       => 'text',
                'label'      => __('Product feature title') . ' ' . $i,
                'attributes' => [
                    'name'    => 'product_feature_' . $i . '_title',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'product_feature_' . $i . '_icon',
                'section_id' => 'opt-text-subsection-product-features',
                'type'       => 'themeIcon',
                'label'      => __('Product feature icon') . ' ' . $i,
                'attributes' => [
                    'name'    => 'product_feature_' . $i . '_icon',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ]);
    }

    for ($i = 1; $i <= 6; $i++) {
        theme_option()
            ->setField([
                'id'         => 'contact_info_box_' . $i . '_title',
                'section_id' => 'opt-text-subsection-contact-info-boxes',
                'type'       => 'text',
                'label'      => __('Contact box title') . ' ' . $i,
                'attributes' => [
                    'name'    => 'contact_info_box_' . $i . '_title',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'contact_info_box_' . $i . '_subtitle',
                'section_id' => 'opt-text-subsection-contact-info-boxes',
                'type'       => 'text',
                'label'      => __('Contact box subtitle') . ' ' . $i,
                'attributes' => [
                    'name'    => 'contact_info_box_' . $i . '_subtitle',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'contact_info_box_' . $i . '_details',
                'section_id' => 'opt-text-subsection-contact-info-boxes',
                'type'       => 'text',
                'label'      => __('Contact box detail') . ' ' . $i,
                'attributes' => [
                    'name'    => 'contact_info_box_' . $i . '_details',
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ]);
    }

    theme_option()
        ->setSection([
            'title'      => __('Social links'),
            'desc'       => __('Social links'),
            'id'         => 'opt-text-subsection-social-links',
            'subsection' => true,
            'icon'       => 'fa fa-share-alt',
        ]);

    for ($i = 1; $i <= 10; $i++) {
        theme_option()
            ->setField([
                'id'         => 'social-name-' . $i,
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'text',
                'label'      => __('Name') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social-name-' . $i,
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'social-icon-' . $i,
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'themeBrand',
                'label'      => __('Icon') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social-icon-' . $i,
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'social-url-' . $i,
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'text',
                'label'      => __('URL') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social-url-' . $i,
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ])
            ->setField([
                'id'         => 'social-color-' . $i,
                'section_id' => 'opt-text-subsection-social-links',
                'type'       => 'customColor',
                'label'      => __('Color') . ' ' . $i,
                'attributes' => [
                    'name'    => 'social-color-' . $i,
                    'value'   => null,
                    'options' => [
                        'class' => 'form-control',
                    ],
                ],
            ]);
    }

    // Facebook integration
    theme_option()
        ->setField([
            'id'         => 'facebook_comment_enabled_in_product',
            'section_id' => 'opt-text-subsection-facebook-integration',
            'type'       => 'customSelect',
            'label'      => __('Enable Facebook comment in product detail page?'),
            'attributes' => [
                'name'    => 'facebook_comment_enabled_in_product',
                'list'    => [
                    'no'  => trans('core/base::base.no'),
                    'yes' => trans('core/base::base.yes'),
                ],
                'value'   => 'no',
                'options' => [
                    'class' => 'form-control',
                ],
            ],
        ]);

    // StartUp TUAF
    theme_option()
        ->setSection([
            'title'      => __('TUAF StarUp'),
            'desc'       => __('Config TUAF StartUp'),
            'id'         => 'opt-text-tuaf-config',
            'subsection' => true,
            'icon'       => 'fa fa-bars',
        ])
        ->setField([
            'id'         => 'owner',
            'section_id' => 'opt-text-tuaf-config',
            'type'       => 'text',
            'label'      => __('Cơ quan chủ quản'),
            'attributes' => [
                'name'    => 'owner',
                'value'   => 'Cơ quan chủ quản: Trung tâm tư vấn, ươm tạo công nghệ và Hỗ trợ khởi nghiệp - Trường đại học Nông Lâm Thái Nguyên',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Thông tin cơ quan chủ quản'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Thông tin cơ quan chủ quản'),
        ])
        ->setField([
            'id'         => 'tuaf_address',
            'section_id' => 'opt-text-tuaf-config',
            'type'       => 'text',
            'label'      => __('Địa chỉ'),
            'attributes' => [
                'name'    => 'tuaf_address',
                'value'   => 'Thành phố Thái Nguyên',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Địa chỉ'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Địa chỉ'),
        ])
        ->setField([
            'id'         => 'tuaf_phone',
            'section_id' => 'opt-text-tuaf-config',
            'type'       => 'text',
            'label'      => __('Điện thoại'),
            'attributes' => [
                'name'    => 'tuaf_phone',
                'value'   => '0982.166.696',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Điện thoại'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Điện thoại'),
        ])
        ->setField([
            'id'         => 'tuaf_website',
            'section_id' => 'opt-text-tuaf-config',
            'type'       => 'text',
            'label'      => __('Website'),
            'attributes' => [
                'name'    => 'tuaf_website',
                'value'   => 'startup.tuaf.edu.vn',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Website'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Website'),
        ])
        ->setField([
            'id'         => 'tuaf_email',
            'section_id' => 'opt-text-tuaf-config',
            'type'       => 'text',
            'label'      => __('Email'),
            'attributes' => [
                'name'    => 'tuaf_email',
                'value'   => 'startup@tuaf.edu.vn',
                'options' => [
                    'class'        => 'form-control',
                    'placeholder'  => __('Email'),
                    'data-counter' => 250,
                ],
            ],
            'helper'     => __('Email'),
        ])
    ;
});
