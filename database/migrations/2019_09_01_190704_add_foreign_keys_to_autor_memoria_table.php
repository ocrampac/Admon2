<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorMemoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_memoria', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'autor_memoria_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('memoria_id', 'autor_memoria_ibfk_2')->references('id')->on('memorias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_memoria', function(Blueprint $table)
		{
			$table->dropForeign('autor_memoria_ibfk_1');
			$table->dropForeign('autor_memoria_ibfk_2');
		});
	}

}
