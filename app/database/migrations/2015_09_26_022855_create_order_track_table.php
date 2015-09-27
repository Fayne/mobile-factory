<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTrackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_tracks', function(Blueprint $table)
		{
            $table->increments('order_track_id');
            $table->string('order_track_name', 20);
            $table->integer('order_id');
            $table->integer('finished_qty')->default(0);
            $table->tinyInteger('order_status')->default(1);
            $table->integer('schedule_id')->nullable();
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
		Schema::drop('order_tracks');
	}

}
