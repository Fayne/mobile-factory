<?php

class LandingController extends BaseController
{
    /**
     * The layout used by the controller.
     *
     * @var \Illuminate\View\View
     */
    protected $layout = 'layouts.landing';

    /**
     * Dashboard homepage
     *
     */
    public function index()
    {
        $this->setPageTitle('Landing Page');

        $this->view('landing.index');
    }
}
