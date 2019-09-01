<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienciasdocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experienciasdocente', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('profesor_id')->unsigned()->index('profesor_id');
			$table->boolean('nivelEducativo_id')->index('nivelEducativo_id');
			$table->string('Institucion', 100);
			$table->char('AñoInicio', 4);
			$table->char('AñoFin', 4);
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
		Schema::drop('experienciasdocente');
	}

}
