<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCongresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('congresos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('TituloTrabajo');
			$table->text('NombreCongreso');
			$table->boolean('tipoParticipacion_id')->index('tipoParticipacion_id');
			$table->boolean('pais_id')->index('pais_id');
			$table->date('Fecha');
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
		Schema::drop('congresos');
	}

}
