<?php

namespace Botble\Portal\Providers;

use Botble\Portal\Models\Portal;
use Illuminate\Support\ServiceProvider;
use Botble\Portal\Repositories\Caches\PortalCacheDecorator;
use Botble\Portal\Repositories\Eloquent\PortalRepository;
use Botble\Portal\Repositories\Interfaces\PortalInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class PortalServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    /**
     * @var \Illuminate\Foundation\Application
     */
    protected $app;

    public function register()
    {
        $this->app->bind(PortalInterface::class, function () {
            return new PortalCacheDecorator(new PortalRepository(new Portal));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/portal')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
//            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
//                \Language::registerModule([Portal::class]);
//            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-portal',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/portal::portal.name',
                'icon'        => 'fa fa-list',
                'url'         => route('portal.index'),
                'permissions' => ['portal.index'],
            ]);
        });
    }
}
