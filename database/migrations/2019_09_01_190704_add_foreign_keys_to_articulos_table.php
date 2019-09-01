<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulos', function(Blueprint $table)
		{
			$table->foreign('campo_id', 'Articulos_ibfk_1')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'Articulos_ibfk_2')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'Articulos_ibfk_3')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'Articulos_ibfk_4')->references('id')->on('subdisciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articulos', function(Blueprint $table)
		{
			$table->dropForeign('Articulos_ibfk_1');
			$table->dropForeign('Articulos_ibfk_2');
			$table->dropForeign('Articulos_ibfk_3');
			$table->dropForeign('Articulos_ibfk_4');
		});
	}

}
