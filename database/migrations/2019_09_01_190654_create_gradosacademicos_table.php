<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradosacademicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gradosacademicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('datosPersonales_id')->unsigned()->index('datosPersonales_id');
			$table->boolean('nivelEducativo_id')->index('nivelEducativo_id');
			$table->string('Titulo');
			$table->boolean('modalidad_id')->index('modalidad_id');
			$table->date('FechaIngreso');
			$table->boolean('tiempoDedicado_id')->index('tiempoDedicado_id');
			$table->date('FechaAsignaturasTerminadas');
			$table->float('Promedio', 5);
			$table->boolean('tipoTitulacion_id')->index('tipoTitulacion_id');
			$table->string('NombreTrabajoTitulacion')->nullable();
			$table->string('Trabajo')->nullable();
			$table->date('FechaObtencionTitulo');
			$table->string('CedulaProfesional', 50);
			$table->string('Institucion', 100);
			$table->string('Escuela', 100)->nullable();
			$table->boolean('pais_id')->index('pais_id');
			$table->string('Estado', 100)->nullable();
			$table->string('Matricula', 20)->nullable();
			$table->string('ApoyoEconomico', 100)->nullable();
			$table->boolean('NumMesesConBeca')->nullable();
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
		Schema::drop('gradosacademicos');
	}

}
