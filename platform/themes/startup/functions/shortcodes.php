<?php

use Botble\Ads\Repositories\Interfaces\AdsInterface;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Ecommerce\Repositories\Interfaces\FlashSaleInterface;
use Botble\Ecommerce\Repositories\Interfaces\ProductCategoryInterface;
use Botble\Faq\Repositories\Interfaces\FaqCategoryInterface;
use Botble\Theme\Supports\ThemeSupport;
use Theme\StartUp\Http\Resources\ProductCategoryResource;
use Theme\StartUp\Http\Resources\ProductCollectionResource;

app()->booted(function () {

//    ThemeSupport::registerGoogleMapsShortcode();
//    ThemeSupport::registerYoutubeShortcode();
//
//    if (is_plugin_active('ecommerce')) {
//        add_shortcode('featured-product-categories', __('Featured Product Categories'),
//            __('Featured Product Categories'),
//            function ($shortCode) {
//                return Theme::partial('short-codes.featured-product-categories', [
//                    'title' => $shortCode->title,
//                ]);
//            });
//
//        shortcode()->setAdminConfig('featured-product-categories', function ($attributes) {
//            return Theme::partial('short-codes.featured-product-categories-admin-config', compact('attributes'));
//        });
//
//        add_shortcode('featured-products', __('Featured products'), __('Featured products'), function ($shortCode) {
//            return Theme::partial('short-codes.featured-products', [
//                'title' => $shortCode->title,
//                'limit' => $shortCode->limit,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('featured-products', function ($attributes) {
//            return Theme::partial('short-codes.featured-products-admin-config', compact('attributes'));
//        });
//
//        add_shortcode('featured-brands', __('Featured Brands'), __('Featured Brands'), function ($shortCode) {
//            return Theme::partial('short-codes.featured-brands', [
//                'title' => $shortCode->title,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('featured-brands', function ($attributes) {
//            return Theme::partial('short-codes.featured-brands-admin-config', compact('attributes'));
//        });
//
//        add_shortcode('product-collections', __('Product Collections'), __('Product Collections'),
//            function ($shortCode) {
//                $productCollections = get_product_collections(
//                    ['status' => BaseStatusEnum::PUBLISHED],
//                    [],
//                    ['id', 'name', 'slug']);
//
//                return Theme::partial('short-codes.product-collections', [
//                    'title'              => $shortCode->title,
//                    'productCollections' => ProductCollectionResource::collection($productCollections),
//                ]);
//            });
//
//        shortcode()->setAdminConfig('product-collections', function ($attributes) {
//            return Theme::partial('short-codes.product-collections-admin-config', compact('attributes'));
//        });
//
//        add_shortcode('trending-products', __('Trending Products'), __('Trending Products'), function ($shortCode) {
//            return Theme::partial('short-codes.trending-products', [
//                'title' => $shortCode->title,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('trending-products', function ($attributes) {
//            return Theme::partial('short-codes.trending-products-admin-config', compact('attributes'));
//        });
//
//        add_shortcode('product-category-products', __('Product category products'), __('Product category products'),
//            function ($shortCode) {
//                $category = app(ProductCategoryInterface::class)->getFirstBy([
//                    'status' => BaseStatusEnum::PUBLISHED,
//                    'id'     => $shortCode->category_id,
//                ], ['*'], [
//                    'children' => function ($query) use ($shortCode) {
//                        $query->limit($shortCode->number_of_categories ? (int) $shortCode->number_of_categories : 3);
//                    },
//                    'children.slugable',
//                ]);
//
//                if (!$category) {
//                    return null;
//                }
//
//                $limit = $shortCode->limit;
//
//                $category = new ProductCategoryResource($category);
//                $category->children = ProductCategoryResource::collection($category->children);
//
//                return Theme::partial('short-codes.product-category-products', compact('category', 'limit'));
//            });
//
//        shortcode()->setAdminConfig('product-category-products', function ($attributes) {
//            $categories = ProductCategoryHelper::getProductCategoriesWithIndent();
//
//            return Theme::partial('short-codes.product-category-products-admin-config', compact('attributes', 'categories'));
//        });
//
//        add_shortcode('flash-sale', __('Flash sale'), __('Flash sale'), function ($shortCode) {
//            $flashSale = app(FlashSaleInterface::class)->getModel()
//                ->where('id', $shortCode->flash_sale_id)
//                ->notExpired()
//                ->first();
//
//            if (!$flashSale || !$flashSale->products()->count()) {
//                return null;
//            }
//
//            return Theme::partial('short-codes.flash-sale', [
//                'title'     => $shortCode->title,
//                'flashSale' => $flashSale,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('flash-sale', function ($attributes) {
//            $flashSales = app(FlashSaleInterface::class)
//                ->getModel()
//                ->where('status', BaseStatusEnum::PUBLISHED)
//                ->notExpired()
//                ->get();
//
//            return Theme::partial('short-codes.flash-sale-admin-config', compact('flashSales', 'attributes'));
//        });
//    }
//
//    if (is_plugin_active('simple-slider')) {
//        add_filter(SIMPLE_SLIDER_VIEW_TEMPLATE, function () {
//            return Theme::getThemeNamespace() . '::partials.short-codes.sliders';
//        }, 120);
//
//        add_filter(SHORTCODE_REGISTER_CONTENT_IN_ADMIN, function ($data, $key, $attributes) {
//            if (in_array($key, ['simple-slider'])) {
//                $ads = app(AdsInterface::class)->getModel()
//                    ->where('status', BaseStatusEnum::PUBLISHED)
//                    ->notExpired()
//                    ->get();
//
//                $maxAds = 2;
//
//                return $data . Theme::partial('short-codes.select-ads-admin-config', compact('ads', 'attributes', 'maxAds'));
//            }
//
//            return $data;
//        }, 50, 3);
//
//        /**
//         * @param array $keys
//         * @param string $order
//         * @param int $limit
//         * @return array
//         */
//        function get_ads_keys_from_shortcode($shortcode)
//        {
//            $keys = collect($shortcode->toArray())
//                ->sortKeys()
//                ->filter(function ($value, $key) use ($shortcode) {
//                    return Str::startsWith($key, 'ads_') ||
//                        ($shortcode->name == 'theme-ads' && Str::startsWith($key, 'key_'));
//                });
//
//            return array_filter($keys->toArray() + [$shortcode->ads]);
//        }
//    }
//
//    if (is_plugin_active('newsletter')) {
//        add_shortcode('newsletter-form', __('Newsletter Form'), __('Newsletter Form'), function ($shortCode) {
//            return Theme::partial('short-codes.newsletter-form', [
//                'title'       => $shortCode->title,
//                'description' => $shortCode->description,
//                'subtitle'    => $shortCode->subtitle,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('newsletter-form', function ($attributes) {
//            return Theme::partial('short-codes.newsletter-form-admin-config', compact('attributes'));
//        });
//    }
//
//    add_shortcode('download-app', __('Download Apps'), __('Download Apps'), function ($shortCode) {
//        return Theme::partial('short-codes.download-app', [
//            'title'         => $shortCode->title,
//            'description'   => $shortCode->description,
//            'subtitle'      => $shortCode->subtitle,
//            'screenshot'    => $shortCode->screenshot,
//            'androidAppUrl' => $shortCode->android_app_url,
//            'iosAppUrl'     => $shortCode->ios_app_url,
//        ]);
//    });
//
//    shortcode()->setAdminConfig('download-app', function ($attributes) {
//        return Theme::partial('short-codes.download-app-admin-config', compact('attributes'));
//    });
//
//    if (is_plugin_active('faq')) {
//        add_shortcode('faq', __('FAQs'), __('FAQs'), function ($shortCode) {
//            $categories = app(FaqCategoryInterface::class)
//                ->advancedGet([
//                    'condition' => [
//                        'status' => BaseStatusEnum::PUBLISHED,
//                    ],
//                    'with'      => [
//                        'faqs' => function ($query) {
//                            $query->where('status', BaseStatusEnum::PUBLISHED);
//                        },
//                    ],
//                    'order_by'  => [
//                        'faq_categories.order'      => 'ASC',
//                        'faq_categories.created_at' => 'DESC',
//                    ],
//                ]);
//
//            return Theme::partial('short-codes.faq', [
//                'title'      => $shortCode->title,
//                'categories' => $categories,
//            ]);
//        });
//
//        shortcode()->setAdminConfig('faq', function ($attributes) {
//            return Theme::partial('short-codes.faq-admin-config', compact('attributes'));
//        });
//    }
//
//    add_shortcode('site-features', __('Site features'), __('Site features'), function ($shortcode) {
//        return Theme::partial('short-codes.site-features', compact('shortcode'));
//    });
//
//    shortcode()->setAdminConfig('site-features', function ($attributes) {
//        return Theme::partial('short-codes.site-features-admin-config', compact('attributes'));
//    });
//
//    if (is_plugin_active('contact')) {
//        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
//            return Theme::getThemeNamespace() . '::partials.short-codes.contact-form';
//        }, 120);
//    }
//
//    add_shortcode('contact-info-boxes', __('Contact info boxes'), __('Contact info boxes'), function ($shortCode) {
//        return Theme::partial('short-codes.contact-info-boxes', ['title' => $shortCode->title]);
//    });
//
//    shortcode()->setAdminConfig('contact-info-boxes', function ($attributes) {
//        return Theme::partial('short-codes.contact-info-boxes-admin-config', compact('attributes'));
//    });
//
//    if (is_plugin_active('ads')) {
//        add_shortcode('theme-ads', __('Theme ads'), __('Theme ads'), function ($shortCode) {
//            $ads = [];
//            $attributes = $shortCode->toArray();
//
//            for ($i = 1; $i < 5; $i++) {
//                if (isset($attributes['key_' . $i]) && !empty($attributes['key_' . $i])) {
//                    $ad = AdsManager::displayAds((string)$attributes['key_' . $i]);
//                    if ($ad) {
//                        $ads[] = $ad;
//                    }
//                }
//            }
//
//            $ads = array_filter($ads);
//
//            return Theme::partial('short-codes.theme-ads', compact('ads'));
//        });
//
//        shortcode()->setAdminConfig('theme-ads', function ($attributes) {
//            $ads = app(AdsInterface::class)->getModel()
//                ->where('status', BaseStatusEnum::PUBLISHED)
//                ->notExpired()
//                ->get();
//
//            return Theme::partial('short-codes.theme-ads-admin-config', compact('ads', 'attributes'));
//        });
//    }
//
//    add_shortcode('coming-soon', __('Coming soon'), __('Coming soon'), function ($shortCode) {
//        return Theme::partial('short-codes.coming-soon', [
//            'time'  => $shortCode->time,
//            'image' => $shortCode->image,
//        ]);
//    });
//
//    shortcode()->setAdminConfig('coming-soon', function ($attributes) {
//        return Theme::partial('short-codes.coming-soon-admin-config', compact('attributes'));
//    });

    add_shortcode('site-header', __('Site header'), __('Site header'), function ($shortcode) {
        return Theme::partial('components.frontend.site-header', compact('shortcode'));
    });

    shortcode()->setAdminConfig('site-header', function ($attributes) {
        return Theme::partial('components.backend.site-header', compact('attributes'));
    });

    add_shortcode('site-event', __('Site event'), __('Site event'), function ($shortcode) {
        $category = $shortcode->category;
        $limit = $shortcode->limit;
        $posts = get_posts_by_category($category, $limit, $limit);
        return Theme::partial('components.frontend.site-event', compact('shortcode', 'posts'));
    });

    shortcode()->setAdminConfig('site-event', function ($attributes) {
        $categories = get_all_categories();
        return Theme::partial('components.backend.site-event', compact('attributes', 'categories'));
    });

    add_shortcode('site-service', __('Site service'), __('Site service'), function ($shortcode) {
        $services = \Botble\Services\Models\Services::where('status', BaseStatusEnum::PUBLISHED)->with('category')->orderBy('order')->take($shortcode->limit)->get();

        return Theme::partial('components.frontend.site-service', compact('shortcode', 'services'));
    });

    shortcode()->setAdminConfig('site-service', function ($attributes) {
        return Theme::partial('components.backend.site-service', compact('attributes'));
    });

    add_shortcode('site-team', __('Site team'), __('Site team'), function ($shortcode) {
        $teams = \Botble\Team\Models\Team::where('status', BaseStatusEnum::PUBLISHED)->orderBy('order')->take($shortcode->limit)->get();

        return Theme::partial('components.frontend.site-team', compact('shortcode', 'teams'));
    });

    shortcode()->setAdminConfig('site-team', function ($attributes) {
        return Theme::partial('components.backend.site-team', compact('attributes'));
    });

    add_shortcode('site-product', __('Site product'), __('Site product'), function ($shortcode) {
        $products = \Botble\Ecommerce\Models\Product::where('status', BaseStatusEnum::PUBLISHED)->take($shortcode->limit)->get();

        return Theme::partial('components.frontend.site-product', compact('shortcode', 'products'));
    });

    shortcode()->setAdminConfig('site-product', function ($attributes) {
        return Theme::partial('components.backend.site-product', compact('attributes'));
    });

    add_shortcode('site-reviews', __('Site reviews'), __('Site reviews'), function ($shortcode) {
        $category = $shortcode->category;
        $limit = $shortcode->limit;
        $posts = get_posts_by_category($category, $limit, $limit);
        return Theme::partial('components.frontend.site-reviews', compact('shortcode', 'posts'));
    });

    shortcode()->setAdminConfig('site-reviews', function ($attributes) {
        $categories = get_all_categories();
        return Theme::partial('components.backend.site-reviews', compact('attributes', 'categories'));
    });

    add_shortcode('site-portal', __('Site portal'), __('Site portal'), function ($shortcode) {
        $limit = $shortcode->limit;
        $posts = \Botble\Portal\Models\Portal::query()->where('status', BaseStatusEnum::PUBLISHED)->with('page')->orderBy('order')->get();
        return Theme::partial('components.frontend.site-portal', compact('shortcode', 'posts'));
    });

    shortcode()->setAdminConfig('site-portal', function ($attributes) {
        return Theme::partial('components.backend.site-portal', compact('attributes'));
    });

    if (is_plugin_active('contact')) {
        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace() . '::partials.components.backend.contact';
        }, 120);
    }

    add_shortcode('site-contact', __('Site contact'), __('Site contact'), function ($shortcode) {
        return Theme::partial('components.frontend.site-contact', compact('shortcode'));
    });

    shortcode()->setAdminConfig('site-contact', function ($attributes) {
        return Theme::partial('components.backend.site-contact', compact('attributes'));
    });

    add_shortcode('site-docs', __('Site docs'), __('Site docs'), function ($shortcode) {
        return Theme::partial('components.frontend.site-docs', compact('shortcode'));
    });

    shortcode()->setAdminConfig('site-docs', function ($attributes) {
        return Theme::partial('components.backend.site-docs', compact('attributes'));
    });

});
