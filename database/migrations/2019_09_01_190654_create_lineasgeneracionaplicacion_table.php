<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineasgeneracionaplicacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lineasgeneracionaplicacion', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('LineaGeneracionAplicacion', 100)->unique('LineaGeneracionAplicacion');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lineasgeneracionaplicacion');
	}

}
