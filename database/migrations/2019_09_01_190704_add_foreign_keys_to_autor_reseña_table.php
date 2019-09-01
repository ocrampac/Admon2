<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorReseñaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_reseña', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'autor_reseña_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('reseña_id', 'autor_reseña_ibfk_2')->references('id')->on('reseñas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_reseña', function(Blueprint $table)
		{
			$table->dropForeign('autor_reseña_ibfk_1');
			$table->dropForeign('autor_reseña_ibfk_2');
		});
	}

}
