<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocenciaposgradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docenciaposgrado', function(Blueprint $table)
		{
			$table->integer('experienciaDocente_id')->unsigned()->index('experienciaDocente_id');
			$table->smallInteger('materia_id')->unsigned()->index('materia_id');
			$table->primary(['experienciaDocente_id','materia_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('docenciaposgrado');
	}

}
