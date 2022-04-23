<?php

namespace Botble\Team\Tables;

use Auth;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Team\Repositories\Interfaces\TeamInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Botble\Team\Models\Team;

class TeamTable extends TableAbstract
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
     * TeamTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlDevTool
     * @param TeamInterface $teamRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlDevTool, TeamInterface $teamRepository)
    {
        $this->repository = $teamRepository;
        $this->setOption('id', 'table-plugins-team');
        parent::__construct($table, $urlDevTool);

        if (!Auth::user()->hasAnyPermission(['team.edit', 'team.destroy'])) {
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
                if (!Auth::user()->hasPermission('team.edit')) {
                    return $item->name;
                }
                return anchor_link(route('team.edit', $item->id), $item->name);
            })
            ->editColumn('checkbox', function ($item) {
                return table_checkbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return date_from_database($item->created_at, config('core.base.general.date_format.date'));
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                return table_actions('team.edit', 'team.destroy', $item);
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
        $query = $model->select([
            'teams.id',
            'teams.name',
            'teams.title',
            'teams.fields',
            'teams.avatar',
            'teams.phone',
            'teams.order',
            'teams.created_at',
            'teams.status',
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
                'name'  => 'teams.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'name'  => 'teams.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'title' => [
                'name'  => 'teams.title',
                'title' => trans('Title'),
                'class' => 'text-left',
            ],
            'fields' => [
                'name'  => 'teams.fields',
                'title' => trans('Fields'),
                'class' => 'text-left',
            ],
            'avatar' => [
                'name'  => 'teams.avatar',
                'title' => trans('Avatar'),
                'class' => 'text-left',
            ],
            'phone' => [
                'name'  => 'teams.phone',
                'title' => trans('Phone'),
                'class' => 'text-left',
            ],
            'order' => [
                'name'  => 'teams.order',
                'title' => trans('Order'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'name'  => 'teams.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'name'  => 'teams.status',
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
        $buttons = $this->addCreateButton(route('team.create'), 'team.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, Team::class);
    }

    /**
     * @return array
     * @throws \Throwable
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('team.deletes'), 'team.destroy', parent::bulkActions());
    }

    /**
     * @return array
     */
    public function getBulkChanges(): array
    {
        return [
            'teams.name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'teams.status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'teams.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }
}
