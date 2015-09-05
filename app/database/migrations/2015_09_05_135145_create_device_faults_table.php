<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceFaultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('device_faults', function(Blueprint $table)
		{
			$table->increments('fault_id');
			$table->string('fault_name', 20);
            $table->integer('fault_class')->nullable();
            $table->integer('fault_code')->nullable();
            $table->tinyInteger('status')->default(1);
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
		Schema::drop('device_faults');
	}

}
