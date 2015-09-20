<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('order_id');
			$table->string('order_name', 20);
			$table->string('order_code', 20)->unique();
			$table->string('order_desc', 255)->nullable();
			$table->tinyInteger('order_status')->default(1);
			$table->string('product_code', 20);
			$table->integer('quantity')->nullable();
            $table->dateTime('required_date');
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
		Schema::drop('orders');
	}

}
