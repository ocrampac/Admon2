<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorDoctrabajoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_doctrabajo', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'autor_docTrabajo_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('docTrabajo_id', 'autor_docTrabajo_ibfk_2')->references('id')->on('documentostrabajos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_doctrabajo', function(Blueprint $table)
		{
			$table->dropForeign('autor_docTrabajo_ibfk_1');
			$table->dropForeign('autor_docTrabajo_ibfk_2');
		});
	}

}
