<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventories', function(Blueprint $table)
		{
			$table->increments('inventory_id');
			$table->string('inventory_name', 20);
			$table->integer('position')->unique();
			$table->integer('material_id');
			$table->string('unit', 5)->nullable();
			$table->integer('quantity')->nullable();
			$table->integer('limitation')->nullable();
			$table->integer('safety_qty')->nullable();
			$table->integer('order_qty')->nullable();
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
		Schema::drop('inventories');
	}

}
