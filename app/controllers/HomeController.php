<?php

class HomeController extends BaseController
{
    /**
     * Dashboard homepage
     *
     */
    public function index()
    {
        // Disable dashboard home page at the moment
        return Redirect::route('orders.my_orders');

        $this->setPageTitle('Homepage');

        $currentUser = Sentry::getUser();

        $this->view('dashboard.index', compact('currentUser'));
    }
}
