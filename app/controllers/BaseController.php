<?php

class BaseController extends Controller {

	/**
	 * The layout used by the controller.
	 *
	 * @var \Illuminate\View\View
	 */
	protected $layout = 'layouts.master';

	/**
	 * @var string
	 */
	protected $pageTitle;

	/**
	 * Get the page tile.
	 *
	 * @return string
	 */
	public function getPageTitle()
	{
		return $this->pageTitle;
	}

	/**
	 * Set the page tile.
	 *
	 * @param string $pageTitle
	 * @return $this
	 */
	public function setPageTitle($pageTitle)
	{
		$this->pageTitle = $pageTitle;

		return $this;
	}

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {


            // Bind title and breadcrumbs to the layout.
            View::composer($this->layout, function ($view) {
                $view->with([
                    'title' => $this->getPageTitle(),
                    'currentUser' => Sentry::getUser()
                ]);

            });


            $this->layout = View::make($this->layout);
        }
    }

	/**
	 * Creates a view
	 *
	 * @param String $path path to the view file
	 * @param Array $data all the data
	 * @return void
	 */
	protected function view($path, $data = [])
	{
		$this->layout->content = View::make($path)->with($data);
	}
}
