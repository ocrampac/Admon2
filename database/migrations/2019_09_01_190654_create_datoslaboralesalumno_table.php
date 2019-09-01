<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatoslaboralesalumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datoslaboralesalumno', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('datosPersonales_id')->unsigned()->index('datosPersonales_id');
			$table->boolean('TrabajoActual', 1)->nullable();
			$table->string('Empresa', 100);
			$table->string('Departamento', 100);
			$table->string('Puesto', 50);
			$table->string('Direccion', 200);
			$table->date('FechaInicio');
			$table->date('FechaFin');
			$table->string('ContactoTelefonico', 15);
			$table->string('ContactoTelefonico2', 15)->nullable();
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
		Schema::drop('datoslaboralesalumno');
	}

}
