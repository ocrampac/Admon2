<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienciasprofesionaldocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experienciasprofesionaldocente', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('profesor_id')->unsigned()->index('profesor_id');
			$table->string('Empresa', 100);
			$table->string('Puesto', 50);
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
		Schema::drop('experienciasprofesionaldocente');
	}

}
