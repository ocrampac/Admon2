<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDatoslaboralesalumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('datoslaboralesalumno', function(Blueprint $table)
		{
			$table->foreign('datosPersonales_id', 'DatosLaboralesAlumno_ibfk_1')->references('id')->on('datospersonales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('datoslaboralesalumno', function(Blueprint $table)
		{
			$table->dropForeign('DatosLaboralesAlumno_ibfk_1');
		});
	}

}
