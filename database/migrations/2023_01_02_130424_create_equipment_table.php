<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipment', function (Blueprint $table) {
			$table->id();
			$table->integer("type_id")->index();
			$table->string("name", 50);
			$table->integer("manufacturer_id")->index();
			$table->integer("size_id")->index();
			$table->integer("color_id")->index();
			$table->string("description", 100)->nullable();
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
		Schema::dropIfExists('equipment');
	}
};
