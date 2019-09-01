<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorCongresoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autor_congreso', function(Blueprint $table)
		{
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->integer('congreso_id')->unsigned()->index('congreso_id');
			$table->primary(['autor_id','congreso_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autor_congreso');
	}

}
