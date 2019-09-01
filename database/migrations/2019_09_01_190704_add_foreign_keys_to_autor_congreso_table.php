<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorCongresoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_congreso', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'Autor_Congreso_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('congreso_id', 'Autor_Congreso_ibfk_2')->references('id')->on('congresos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_congreso', function(Blueprint $table)
		{
			$table->dropForeign('Autor_Congreso_ibfk_1');
			$table->dropForeign('Autor_Congreso_ibfk_2');
		});
	}

}
