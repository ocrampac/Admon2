<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDiplomadosimpartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('diplomadosimpartidos', function(Blueprint $table)
		{
			$table->foreign('campo_id', 'DiplomadosImpartidos_ibfk_1')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'DiplomadosImpartidos_ibfk_2')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'DiplomadosImpartidos_ibfk_3')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'DiplomadosImpartidos_ibfk_4')->references('id')->on('subdisciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('diplomadosimpartidos', function(Blueprint $table)
		{
			$table->dropForeign('DiplomadosImpartidos_ibfk_1');
			$table->dropForeign('DiplomadosImpartidos_ibfk_2');
			$table->dropForeign('DiplomadosImpartidos_ibfk_3');
			$table->dropForeign('DiplomadosImpartidos_ibfk_4');
		});
	}

}
