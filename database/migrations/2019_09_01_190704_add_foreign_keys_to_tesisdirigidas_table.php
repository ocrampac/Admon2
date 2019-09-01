<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTesisdirigidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tesisdirigidas', function(Blueprint $table)
		{
			$table->foreign('pais_id', 'TesisDirigidas_ibfk_1')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('campo_id', 'TesisDirigidas_ibfk_2')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'TesisDirigidas_ibfk_3')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'TesisDirigidas_ibfk_4')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'TesisDirigidas_ibfk_5')->references('id')->on('subdisciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('autor_id', 'TesisDirigidas_ibfk_6')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('gradoAcademico_id', 'TesisDirigidas_ibfk_7')->references('id')->on('gradosacademicos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('estadoTesis_id', 'TesisDirigidas_ibfk_8')->references('id')->on('estadotesis')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tesisdirigidas', function(Blueprint $table)
		{
			$table->dropForeign('TesisDirigidas_ibfk_1');
			$table->dropForeign('TesisDirigidas_ibfk_2');
			$table->dropForeign('TesisDirigidas_ibfk_3');
			$table->dropForeign('TesisDirigidas_ibfk_4');
			$table->dropForeign('TesisDirigidas_ibfk_5');
			$table->dropForeign('TesisDirigidas_ibfk_6');
			$table->dropForeign('TesisDirigidas_ibfk_7');
			$table->dropForeign('TesisDirigidas_ibfk_8');
		});
	}

}
