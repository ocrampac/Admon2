<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCapituloslibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('capituloslibros', function(Blueprint $table)
		{
			$table->foreign('campo_id', 'capitulosLibros_ibfk_1')->references('id')->on('campos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('area_id', 'capitulosLibros_ibfk_2')->references('id')->on('areas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('disciplina_id', 'capitulosLibros_ibfk_3')->references('id')->on('disciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('subdisciplina_id', 'capitulosLibros_ibfk_4')->references('id')->on('subdisciplinas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('apoyoInstitucional_id', 'capitulosLibros_ibfk_5')->references('id')->on('apoyosinstitucionales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('capituloslibros', function(Blueprint $table)
		{
			$table->dropForeign('capitulosLibros_ibfk_1');
			$table->dropForeign('capitulosLibros_ibfk_2');
			$table->dropForeign('capitulosLibros_ibfk_3');
			$table->dropForeign('capitulosLibros_ibfk_4');
			$table->dropForeign('capitulosLibros_ibfk_5');
		});
	}

}
