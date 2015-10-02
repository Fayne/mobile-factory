<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UpdateUserPasswordCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'fayne:update-password';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'You can run this command to update user password.';

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

            $this->updatePassword();

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
        return array(//			array('example', InputArgument::REQUIRED, 'An example argument.'),
        );
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(//			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
        );
    }

    /**
     * Update password.
     *
     * @return void
     */
    private function updatePassword()
    {

        $email = $this->ask('What is the email address of the user you want to update password? ');
        $password = $this->secret('What is new password? ');
        $passwordConfirmation = $this->secret('Please input the password again. ');

        $validator = Validator::make(
            array(
                'password' => $password,
                'email' => $email
            ),
            array(
                'password' => 'required',
                'email' => 'required|email'
            )
        );

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                $this->error($message);
            }

            return;
        } elseif ($password !== $passwordConfirmation) {
            $this->error('The password confirmation confirmation does not match.');

            return;
        }

        try
        {
            $user = Sentry::findUserByLogin($email);
            $user->password = (string)$password;

            $user->save();
            $this->info('Password has been reset.');

        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $this->error('User was not found.');
        }

    }

}
