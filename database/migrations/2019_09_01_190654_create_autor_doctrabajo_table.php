<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorDoctrabajoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autor_doctrabajo', function(Blueprint $table)
		{
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->integer('docTrabajo_id')->unsigned()->index('docTrabajo_id');
			$table->primary(['autor_id','docTrabajo_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autor_doctrabajo');
	}

}
