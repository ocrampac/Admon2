<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorLibroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autor_libro', function(Blueprint $table)
		{
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->integer('libro_id')->unsigned()->index('libro_id');
			$table->primary(['autor_id','libro_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autor_libro');
	}

}
