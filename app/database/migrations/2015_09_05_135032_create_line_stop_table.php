<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineStopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('line_stop', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('line_id');
			$table->string('stop_reason', 50)->nullable();
			$table->dateTime('period_start');
			$table->dateTime('period_end');
			$table->integer('duration')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('line_stop');
	}

}
