<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportestecnicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reportestecnicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('Titulo');
			$table->string('InstitucionDestino', 100);
			$table->date('FechaEntrega');
			$table->date('FechaPublicacion')->nullable();
			$table->smallInteger('NumPaginas')->unsigned();
			$table->boolean('origenReporte_id')->index('origenReporte_id');
			$table->text('Descripcion');
			$table->text('Objetivos');
			$table->string('PalabraClave', 20);
			$table->string('PalabraClave2', 20);
			$table->string('PalabraClave3', 20);
			$table->text('Archivo', 65535)->nullable();
			$table->text('Link', 65535)->nullable();
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
		Schema::drop('reportestecnicos');
	}

}
