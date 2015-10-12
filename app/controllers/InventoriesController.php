<?php

class InventoriesController extends BaseController
{

    /**
     * List page.
     */
    public function index()
    {
        $this->setPageTitle('Inventory');

        $currentUser = Sentry::getUser();

        $this->view('inventories.index', compact('currentUser'));
    }

    public function detail($id = 1)
    {
        $this->setPageTitle('Inventory Detail');

        $currentUser = Sentry::getUser();

        $this->view('inventories.view', compact('currentUser'));
    }
}
