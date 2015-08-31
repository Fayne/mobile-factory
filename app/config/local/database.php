<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => getenv('MYSQL_HOST'),
			'database'  => getenv('MYSQL_DB'),
			'username'  => getenv('MYSQL_USER'),
			'password'  => getenv('MYSQL_PASS'),
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => getenv('MYSQL_PREFIX'),
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => getenv('SQLSERVER_HOST'),
			'port'     => getenv('SQLSERVER_PORT'),
			'database' => getenv('SQLSERVER_DB'),
			'username' => getenv('SQLSERVER_USER'),
			'password' => getenv('SQLSERVER_PASS'),
			'prefix'   => getenv('SQLSERVER_PREFIX'),
		),

	),

);
