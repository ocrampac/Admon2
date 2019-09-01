<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExperienciasprofesionaldocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('experienciasprofesionaldocente', function(Blueprint $table)
		{
			$table->foreign('profesor_id', 'ExperienciasProfesionalDocente_ibfk_1')->references('id')->on('profesor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('experienciasprofesionaldocente', function(Blueprint $table)
		{
			$table->dropForeign('ExperienciasProfesionalDocente_ibfk_1');
		});
	}

}
