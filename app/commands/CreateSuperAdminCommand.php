<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Cartalyst\Sentry\Users\UserNotFoundException;

class CreateSuperAdminCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'init:create-superadmin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'You can run this command to create a super admin user.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		try {
            $this->installMigrations();

            $this->createSuperUser();
        } catch (Exception $e) {

            $this->error($e->getMessage());
        }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			// array('example', InputArgument::REQUIRED, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			// array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

	/**
     * Create the dashboard superuser.
     *
     * @return void
     */
    private function createSuperUser()
    {
        try {
            // Find the superuser using the user id = 1
            $user = Sentry::findUserById(1);

            $this->error('The superuser already exists.');
        } catch (UserNotFoundException $e) {
            $firstname = $this->ask('What is your first name? ');
			$email = $this->ask('What is your email address? ');
			$password = $this->secret('What is the password? ');

			$validator = Validator::make(
			    array(
			        'firstname' => $firstname,
			        'password' => $password,
			        'email' => $email
			    ),
			    array(
			        'firstname' => 'required',
			        'password' => 'required|min:6',
			        'email' => 'required|email|unique:users'
			    )
			);

			if ($validator->fails())
			{
			    foreach ($validator->messages()->all() as $message)
				{
				    $this->error($message);
				}

				return false;
			}

            Sentry::createUser(array(
                'email' => $email,
                'first_name' => $firstname,
                'password' => $password,
                'activated' => true,
                'permissions' => ['superuser' => true],
            ));

            $this->info('The super admin `' . $firstname .'` has been created.');
        }
    }

    /**
     * Install the dashboard migrations.
     *
     * @return void
     */
    protected function installMigrations()
    {
        $this->info('We are about to install migrations');
        $this->call('migrate', array('--force' => true, '--package' => 'cartalyst/sentry'));
    }

}
