<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batches', function(Blueprint $table)
		{
			$table->increments('batch_id');
			$table->string('batch_name', 20);
			$table->string('batch_code', 20)->unique();
			$table->string('batch_desc', 255)->nullable();
			$table->tinyInteger('batch_status')->default(1);
			$table->integer('quantity')->nullable();
			$table->dateTime('period_start');
			$table->dateTime('period_end');
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
		Schema::drop('batches');
	}

}
