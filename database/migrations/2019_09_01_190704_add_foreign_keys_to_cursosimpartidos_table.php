<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCursosimpartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cursosimpartidos', function(Blueprint $table)
		{
			$table->foreign('campo_id', 'CursosImpartidos_ibfk_1')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'CursosImpartidos_ibfk_2')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'CursosImpartidos_ibfk_3')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'CursosImpartidos_ibfk_4')->references('id')->on('subdisciplina')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cursosimpartidos', function(Blueprint $table)
		{
			$table->dropForeign('CursosImpartidos_ibfk_1');
			$table->dropForeign('CursosImpartidos_ibfk_2');
			$table->dropForeign('CursosImpartidos_ibfk_3');
			$table->dropForeign('CursosImpartidos_ibfk_4');
		});
	}

}
