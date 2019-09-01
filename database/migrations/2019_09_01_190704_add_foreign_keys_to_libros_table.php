<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('libros', function(Blueprint $table)
		{
			$table->foreign('pais_id', 'Libro_ibfk_1')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idioma_id', 'Libro_ibfk_2')->references('id')->on('idiomas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('idiomaTraducido_id', 'Libro_ibfk_3')->references('id')->on('idiomas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('campo_id', 'Libro_ibfk_4')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'Libro_ibfk_5')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'Libro_ibfk_6')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'Libro_ibfk_7')->references('id')->on('subdisciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('apoyoInstitucional_id', 'Libro_ibfk_8')->references('id')->on('apoyosinstitucionales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('libros', function(Blueprint $table)
		{
			$table->dropForeign('Libro_ibfk_1');
			$table->dropForeign('Libro_ibfk_2');
			$table->dropForeign('Libro_ibfk_3');
			$table->dropForeign('Libro_ibfk_4');
			$table->dropForeign('Libro_ibfk_5');
			$table->dropForeign('Libro_ibfk_6');
			$table->dropForeign('Libro_ibfk_7');
			$table->dropForeign('Libro_ibfk_8');
		});
	}

}
