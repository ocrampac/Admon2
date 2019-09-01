<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDatospersonalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('datospersonales', function(Blueprint $table)
		{
			$table->foreign('sexo_id', 'DatosPersonales_ibfk_1')->references('id')->on('sexos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('estadoCivil_id', 'DatosPersonales_ibfk_2')->references('id')->on('estadosciviles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('paisOrigen_id', 'DatosPersonales_ibfk_3')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('autor_id', 'DatosPersonales_ibfk_4')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('comunidadBuap_id', 'DatosPersonales_ibfk_5')->references('id')->on('comunidadbuap')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('entidadFederativa_id', 'DatosPersonales_ibfk_6')->references('id')->on('entidadesfederativas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('datospersonales', function(Blueprint $table)
		{
			$table->dropForeign('DatosPersonales_ibfk_1');
			$table->dropForeign('DatosPersonales_ibfk_2');
			$table->dropForeign('DatosPersonales_ibfk_3');
			$table->dropForeign('DatosPersonales_ibfk_4');
			$table->dropForeign('DatosPersonales_ibfk_5');
			$table->dropForeign('DatosPersonales_ibfk_6');
		});
	}

}
