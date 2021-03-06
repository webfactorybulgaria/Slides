<?php

namespace TypiCMS\Modules\Slides\Http\Controllers;

use TypiCMS\Modules\Core\Shells\Http\Controllers\BaseAdminController;
use TypiCMS\Modules\Slides\Shells\Http\Requests\FormRequest;
use TypiCMS\Modules\Slides\Shells\Models\Slide;
use TypiCMS\Modules\Slides\Shells\Repositories\SlideInterface;

class AdminController extends BaseAdminController
{
    public function __construct(SlideInterface $slide)
    {
        parent::__construct($slide);
    }

    /**
     * List models.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('slides::admin.index');
    }

    /**
     * Create form for a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = $this->repository->getModel();

        return view('slides::admin.create')
            ->with(compact('model'));
    }

    /**
     * Edit form for the specified resource.
     *
     * @param \TypiCMS\Modules\Slides\Shells\Models\Slide $slide
     *
     * @return \Illuminate\View\View
     */
    public function edit(Slide $slide)
    {
        return view('slides::admin.edit')
            ->with(['model' => $slide]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \TypiCMS\Modules\Slides\Shells\Http\Requests\FormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormRequest $request)
    {
        $model = $this->repository->create($request->all());

        return $this->redirect($request, $model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \TypiCMS\Modules\Slides\Shells\Models\Slide              $slide
     * @param \TypiCMS\Modules\Slides\Shells\Http\Requests\FormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Slide $slide, FormRequest $request)
    {
        $this->repository->update($request->all());

        return $this->redirect($request, $slide);
    }
}
