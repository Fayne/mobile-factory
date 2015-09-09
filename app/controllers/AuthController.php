<?php

class AuthController extends BaseController {

    /**
     * The layout used by the controller.
     *
     * @var \Illuminate\View\View
     */
    protected $layout = 'layouts.minimal';

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * @var LoginForm
     */
    private $loginForm;

    /**
     * Show the application login form.
     *
     * @return Response
     */
    public function getLogin()
    {
        $this->setPageTitle('Login');

        return $this->view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @return Response
     */
    public function postLogin()
    {
        try {
            $credentials = Input::only('email', 'password');

            $this->loginForm->validate($credentials);

            Sentry::authenticate($credentials, false);

            return Redirect::route('dashboard.home')->with('message', sprintf('Welcome back [%s]', Sentry::getUser()->first_name));
        } catch (\Exception $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'Wrong email or password',]);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function getLogout()
    {
        Sentry::logout();

        return Redirect::route('dashboard.login');
    }

} 