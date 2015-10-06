<?php

class SchedulesController extends BaseController
{

    /**
     * The layout used by the controller.
     *
     * @var \Illuminate\View\View
     */
    protected $layout = 'layouts.scripts';

    /**
     * Schedule track page.
     */
    public function track()
    {
        $this->setPageTitle('Schedule track');

        $currentUser = Sentry::getUser();

        $track = ScheduleTrack::findLastTrack();

        $this->view('schedules.track', compact('currentUser', 'track'));
    }

}
