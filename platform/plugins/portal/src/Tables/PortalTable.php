<?php

namespace Botble\Portal\Tables;

use Auth;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Portal\Repositories\Interfaces\PortalInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Portal\Models\Portal;

class PortalTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * PortalTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlDevTool
     * @param PortalInterface $portalRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlDevTool, PortalInterface $portalRepository)
    {
        $this->repository = $portalRepository;
        $this->setOption('id', 'table-plugins-portal');
        parent::__construct($table, $urlDevTool);

        if (!Auth::user()->hasAnyPermission(['portal.edit', 'portal.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     * @since 2.1
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('portal.edit')) {
                    return $item->name;
                }
                return anchor_link(route('portal.edit', $item->id), $item->name);
            })
            ->editColumn('checkbox', function ($item) {
                return table_checkbox($item->id);
            })
            ->editColumn('link', function ($item) {
                return anchor_link($item->link, $item->name);
            })
            ->editColumn('image', function ($item) {
                return $this->displayThumbnail($item->image);
            })
            ->editColumn('created_at', function ($item) {
                return date_from_database($item->created_at, config('core.base.general.date_format.date'));
            })
            ->addColumn('page', function ($item) {
                return $item->page->name;
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                return table_actions('portal.edit', 'portal.destroy', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Get the query object to be processed by table.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     * @since 2.1
     */
    public function query()
    {
        $model = $this->repository->getModel();
        $query = $model->with('page')->select([
            'portals.id',
            'portals.page_id',
            'portals.name',
            'portals.description',
            'portals.image',
            'portals.link',
            'portals.order',
            'portals.created_at',
            'portals.status',
        ]);

        return $this->applyScopes(apply_filters(BASE_FILTER_TABLE_QUERY, $query, $model));
    }

    /**
     * @return array
     * @since 2.1
     */
    public function columns()
    {
        return [
            'id' => [
                'name'  => 'portals.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'page' => [
                'name'  => 'portals.page',
                'title' => __('Page'),
                'width' => '50px',
            ],
            'name' => [
                'name'  => 'portals.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'description' => [
                'name'  => 'portals.description',
                'title' => __('description'),
                'class' => 'text-left',
            ],
            'image' => [
                'name'  => 'portals.image',
                'title' => __('image'),
                'class' => 'text-left',
            ],
            'link' => [
                'name'  => 'portals.link',
                'title' => __('link'),
                'class' => 'text-left',
            ],
            'order' => [
                'name'  => 'portals.order',
                'title' => __('order'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'portals.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'portals.status',
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * @return array
     * @since 2.1
     * @throws \Throwable
     */
    public function buttons()
    {
        $buttons = $this->addCreateButton(route('portal.create'), 'portal.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Portal::class);
    }

    /**
     * @return array
     * @throws \Throwable
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('portal.deletes'), 'portal.destroy', parent::bulkActions());
    }

    /**
     * @return array
     */
    public function getBulkChanges(): array
    {
        return [
            'portals.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'portals.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'portals.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }
}
