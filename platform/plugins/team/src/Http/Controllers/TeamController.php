<?php

namespace Botble\Team\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Team\Http\Requests\TeamRequest;
use Botble\Team\Repositories\Interfaces\TeamInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Team\Tables\TeamTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Team\Forms\TeamForm;
use Botble\Base\Forms\FormBuilder;

class TeamController extends BaseController
{
    /**
     * @var TeamInterface
     */
    protected $teamRepository;

    /**
     * TeamController constructor.
     * @param TeamInterface $teamRepository
     */
    public function __construct(TeamInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * Display all teams
     * @param TeamTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(TeamTable $table)
    {

        page_title()->setTitle(trans('plugins/team::team.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/team::team.create'));

        return $formBuilder->create(TeamForm::class)->renderForm();
    }

    /**
     * Insert new Team into database
     *
     * @param TeamRequest $request
     * @return BaseHttpResponse
     */
    public function store(TeamRequest $request, BaseHttpResponse $response)
    {
        $team = $this->teamRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(TEAM_MODULE_SCREEN_NAME, $request, $team));

        return $response
            ->setPreviousUrl(route('team.index'))
            ->setNextUrl(route('team.edit', $team->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * Show edit form
     *
     * @param $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $team = $this->teamRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $team));

        page_title()->setTitle(trans('plugins/team::team.edit') . ' "' . $team->name . '"');

        return $formBuilder->create(TeamForm::class, ['model' => $team])->renderForm();
    }

    /**
     * @param $id
     * @param TeamRequest $request
     * @return BaseHttpResponse
     */
    public function update($id, TeamRequest $request, BaseHttpResponse $response)
    {
        $team = $this->teamRepository->findOrFail($id);

        $team->fill($request->input());

        $this->teamRepository->createOrUpdate($team);

        event(new UpdatedContentEvent(TEAM_MODULE_SCREEN_NAME, $request, $team));

        return $response
            ->setPreviousUrl(route('team.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $team = $this->teamRepository->findOrFail($id);

            $this->teamRepository->delete($team);

            event(new DeletedContentEvent(TEAM_MODULE_SCREEN_NAME, $request, $team));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.cannot_delete'));
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $team = $this->teamRepository->findOrFail($id);
            $this->teamRepository->delete($team);
            event(new DeletedContentEvent(TEAM_MODULE_SCREEN_NAME, $request, $team));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
