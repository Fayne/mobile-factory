<?php

use Laracasts\Validation\FormValidationException;

class DashboardController extends BaseController
{
    /**
     * @var NicknameForm
     */
    private $nicknameForm;

    /**
     * @param NicknameForm $nicknameForm
     */
    function __construct(NicknameForm $nicknameForm)
    {
        $this->beforeFilter('dashboard.nickname', ['except' => ['getNickname', 'storeNickname']]);

        $this->nicknameForm = $nicknameForm;
    }

    /**
     * Ask user input nickname.
     *
     * @return Response
     */
    public function getNickname()
    {
        $this->setPageTitle('Input nickname');

        $currentUser = Sentry::getUser();

        $this->view('dashboard.nickname', compact('currentUser'));
    }

    /**
     * Store user nickname.
     *
     * @return Response
     */
    public function storeNickname()
    {
        try {
            $data = Input::only('nickname');

            $this->nicknameForm->validate($data);

            $currentUser = Sentry::getUser();

            $currentUser->nickname = $data['nickname'];

            $currentUser->save();

            Session::flash('message', sprintf('Welcome [<strong>%s</strong>]', $currentUser->nickname));

            return Redirect::route('orders.create');
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return Redirect::back()->withInput()->withErrors(['nickname' => 'User was not found.']);
        } catch (FormValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

    }
}
