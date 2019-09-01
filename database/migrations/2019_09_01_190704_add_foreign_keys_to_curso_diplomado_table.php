<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursoDiplomadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('curso_diplomado', function(Blueprint $table)
		{
			$table->foreign('curso_id', 'curso_diplomado_ibfk_1')->references('id')->on('cursos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('dipImp_id', 'curso_diplomado_ibfk_2')->references('id')->on('diplomadosimpartidos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('curso_diplomado', function(Blueprint $table)
		{
			$table->dropForeign('curso_diplomado_ibfk_1');
			$table->dropForeign('curso_diplomado_ibfk_2');
		});
	}

}
