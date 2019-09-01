<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorLibroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_libro', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'autor_libro_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('libro_id', 'autor_libro_ibfk_2')->references('id')->on('libros')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_libro', function(Blueprint $table)
		{
			$table->dropForeign('autor_libro_ibfk_1');
			$table->dropForeign('autor_libro_ibfk_2');
		});
	}

}
