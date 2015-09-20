<?php

use Laracasts\Validation\FormValidationException;

class AuthController extends BaseController
{

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
     * @var RegisterForm
     */
    private $registerForm;

    /**
     * Create a new authentication controller instance.
     * @param LoginForm $loginForm
     * @param RegisterForm $registerForm
     */
    public function __construct(LoginForm $loginForm, RegisterForm $registerForm)
    {
        $this->loginForm = $loginForm;
        $this->registerForm = $registerForm;

        $this->beforeFilter('sentry.guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application login form.
     *
     * @return Response
     */
    public function getLogin()
    {
        $this->setPageTitle('Login');

        $this->view('auth.login');
    }

    /**
     * Show the application register form.
     *
     * @return Response
     */
    public function getRegister()
    {
        $this->setPageTitle('Registration');

        $this->view('auth.register');
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

            $remember = (Input::has('remember')) ? true : false;

            $this->loginForm->validate($credentials);

            if ($remember) {
                Sentry::authenticateAndRemember($credentials);
            } else {
                Sentry::authenticate($credentials, false);
            }

            return Redirect::route('dashboard.home')->with('message', sprintf('Welcome back [%s]', Sentry::getUser()->first_name));
        } catch (\Exception $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'Wrong email or password',]);
        }
    }

    /**
     * Handle a register request to the application.
     *
     * @return Response
     */
    public function postRegister()
    {
        try {
            $data = Input::only('first_name', 'last_name', 'email', 'password', 'password_confirmation');

            $this->registerForm->validate($data);

            unset($data['password_confirmation']);

            // TODO: set new user as activity user at the moment
            $data = array_merge($data, ['activated' => true]);

            // Create the user
            $user = Sentry::createUser($data);

            return Redirect::route('dashboard.nickname')->with('message', "[{$user->first_name}], Welcome!!");
        } catch (Cartalyst\Sentry\Users\UserExistsException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'User already exists.']);
        } catch (FormValidationException $e) {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
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