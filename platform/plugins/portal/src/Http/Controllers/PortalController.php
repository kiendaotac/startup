<?php

namespace Botble\Portal\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\Portal\Http\Requests\PortalRequest;
use Botble\Portal\Repositories\Interfaces\PortalInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\Portal\Tables\PortalTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Portal\Forms\PortalForm;
use Botble\Base\Forms\FormBuilder;

class PortalController extends BaseController
{
    /**
     * @var PortalInterface
     */
    protected $portalRepository;

    /**
     * PortalController constructor.
     * @param PortalInterface $portalRepository
     */
    public function __construct(PortalInterface $portalRepository)
    {
        $this->portalRepository = $portalRepository;
    }

    /**
     * Display all portals
     * @param PortalTable $dataTable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(PortalTable $table)
    {

        page_title()->setTitle(trans('plugins/portal::portal.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/portal::portal.create'));

        return $formBuilder->create(PortalForm::class)->renderForm();
    }

    /**
     * Insert new Portal into database
     *
     * @param PortalRequest $request
     * @return BaseHttpResponse
     */
    public function store(PortalRequest $request, BaseHttpResponse $response)
    {
        $portal = $this->portalRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(PORTAL_MODULE_SCREEN_NAME, $request, $portal));

        return $response
            ->setPreviousUrl(route('portal.index'))
            ->setNextUrl(route('portal.edit', $portal->id))
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
        $portal = $this->portalRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $portal));

        page_title()->setTitle(trans('plugins/portal::portal.edit') . ' "' . $portal->name . '"');

        return $formBuilder->create(PortalForm::class, ['model' => $portal])->renderForm();
    }

    /**
     * @param $id
     * @param PortalRequest $request
     * @return BaseHttpResponse
     */
    public function update($id, PortalRequest $request, BaseHttpResponse $response)
    {
        $portal = $this->portalRepository->findOrFail($id);

        $portal->fill($request->input());

        $this->portalRepository->createOrUpdate($portal);

        event(new UpdatedContentEvent(PORTAL_MODULE_SCREEN_NAME, $request, $portal));

        return $response
            ->setPreviousUrl(route('portal.index'))
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
            $portal = $this->portalRepository->findOrFail($id);

            $this->portalRepository->delete($portal);

            event(new DeletedContentEvent(PORTAL_MODULE_SCREEN_NAME, $request, $portal));

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
            $portal = $this->portalRepository->findOrFail($id);
            $this->portalRepository->delete($portal);
            event(new DeletedContentEvent(PORTAL_MODULE_SCREEN_NAME, $request, $portal));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
