<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToExperienciasdocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('experienciasdocente', function(Blueprint $table)
		{
			$table->foreign('profesor_id', 'ExperienciasDocente_ibfk_1')->references('id')->on('profesor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nivelEducativo_id', 'ExperienciasDocente_ibfk_2')->references('id')->on('niveleducativo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('experienciasdocente', function(Blueprint $table)
		{
			$table->dropForeign('ExperienciasDocente_ibfk_1');
			$table->dropForeign('ExperienciasDocente_ibfk_2');
		});
	}

}
