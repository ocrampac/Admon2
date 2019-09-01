<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfesoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesores', function(Blueprint $table)
		{
			$table->smallInteger('id', true)->unsigned();
			$table->integer('datosPersonales_id')->unsigned()->index('datosPersonales_id');
			$table->string('ContactoTelefonicoTrabajo', 15)->nullable();
			$table->integer('adscripcion_id')->unsigned()->index('adscripcion_id');
			$table->integer('categoria_id')->unsigned()->index('categoria_id');
			$table->boolean('tipoContrato_id')->index('tipoContrato_id');
			$table->date('FechaIngreso');
			$table->boolean('estatus_id')->index('estatus_id');
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
		Schema::drop('profesores');
	}

}
