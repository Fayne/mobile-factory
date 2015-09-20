<?php

class HomeController extends BaseController
{
    /**
     * Dashboard homepage
     *
     */
    public function index()
    {
        $this->setPageTitle('Homepage');

        $currentUser = Sentry::getUser();

        $this->view('dashboard.index', compact('currentUser'));
    }
}
