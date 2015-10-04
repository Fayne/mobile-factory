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

            return Redirect::route('orders.my_orders')->with('message', sprintf('Welcome back [%s]', Sentry::getUser()->first_name));
        } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'Login field is required',]);
        } catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'Password field is required',]);
        } catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'Wrong password, try again',]);
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'User was not found',]);
        } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'User is not activated',]);
        } // The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'User is suspended',]);
        } catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'User is banned',]);
        } catch (\Exception $e) {
            return Redirect::back()->withInput()->withErrors(['email' => 'Wrong email or password...',]);
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

            return Redirect::route('dashboard.login')->with('message', "Congratulations <i>{$user->first_name}</i>, you have registered successfully!!");
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