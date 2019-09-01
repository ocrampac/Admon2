<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfesoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('profesores', function(Blueprint $table)
		{
			$table->foreign('datosPersonales_id', 'Profesores_ibfk_1')->references('id')->on('datospersonales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('adscripcion_id', 'Profesores_ibfk_2')->references('id')->on('adscripciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('categoria_id', 'Profesores_ibfk_3')->references('id')->on('categorias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipoContrato_id', 'Profesores_ibfk_4')->references('id')->on('tiposcontrato')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('estatus_id', 'Profesores_ibfk_5')->references('id')->on('estatus')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('profesores', function(Blueprint $table)
		{
			$table->dropForeign('Profesores_ibfk_1');
			$table->dropForeign('Profesores_ibfk_2');
			$table->dropForeign('Profesores_ibfk_3');
			$table->dropForeign('Profesores_ibfk_4');
			$table->dropForeign('Profesores_ibfk_5');
		});
	}

}
