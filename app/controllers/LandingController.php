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

        if ( Sentry::check())
        {
            return Redirect::route('orders.my_orders');
        }

        $this->view('landing.index');
    }
}
