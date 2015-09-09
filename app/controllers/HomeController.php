<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function welcome()
    {
        try {
            $host = getenv('SQLSERVER_HOST');
            $port = getenv('SQLSERVER_PORT');
            $dbname = getenv('SQLSERVER_DB');
            $user = getenv('SQLSERVER_USER');
            $pass = getenv('SQLSERVER_PASS');

            $dbh = new PDO ("dblib:host={$host}:{$port};dbname={$dbname}", $user, $pass);

//            DB::connection('dblib');
        } catch (PDOException $e) {
            echo "Failed to get DB handle: " . $e->getMessage() . "\n";
            exit;
        }

        return View::make('hello');
    }

}
