<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedule_tracks', function(Blueprint $table)
		{
			$table->increments('schedule_track_id');
            $table->integer('plant_id');
            $table->string('shift_date');
            $table->integer('shift_no');
            $table->tinyInteger('current_shift');
            $table->integer('product_plan');
            $table->integer('product_target');
            $table->integer('product_actual');
            $table->bigInteger('total_available_time');
            $table->bigInteger('total_run_time');
            $table->bigInteger('total_down_time');
            $table->bigInteger('total_wait_time');
            $table->bigInteger('equipment_down_time');
            $table->bigInteger('quality_down_time');
            $table->float('total_FTP');
            $table->tinyInteger('status');
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
		Schema::drop('schedule_tracks');
	}

}
