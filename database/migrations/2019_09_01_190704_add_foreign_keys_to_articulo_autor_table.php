<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArticuloAutorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulo_autor', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'articulo_autor_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('articulo_id', 'articulo_autor_ibfk_2')->references('id')->on('articulos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articulo_autor', function(Blueprint $table)
		{
			$table->dropForeign('articulo_autor_ibfk_1');
			$table->dropForeign('articulo_autor_ibfk_2');
		});
	}

}
