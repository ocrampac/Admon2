<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMemoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('memorias', function(Blueprint $table)
		{
			$table->foreign('campo_id', 'Memorias_ibfk_1')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'Memorias_ibfk_2')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'Memorias_ibfk_3')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'Memorias_ibfk_4')->references('id')->on('subdisciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('autor_id', 'Memorias_ibfk_5')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pais_id', 'Memorias_ibfk_6')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('memorias', function(Blueprint $table)
		{
			$table->dropForeign('Memorias_ibfk_1');
			$table->dropForeign('Memorias_ibfk_2');
			$table->dropForeign('Memorias_ibfk_3');
			$table->dropForeign('Memorias_ibfk_4');
			$table->dropForeign('Memorias_ibfk_5');
			$table->dropForeign('Memorias_ibfk_6');
		});
	}

}
