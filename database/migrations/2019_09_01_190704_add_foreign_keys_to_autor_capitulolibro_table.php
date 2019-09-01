<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorCapitulolibroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_capitulolibro', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'Autor_CapituloLibro_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('capituloLibro_id', 'Autor_CapituloLibro_ibfk_2')->references('id')->on('capituloslibros')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_capitulolibro', function(Blueprint $table)
		{
			$table->dropForeign('Autor_CapituloLibro_ibfk_1');
			$table->dropForeign('Autor_CapituloLibro_ibfk_2');
		});
	}

}
