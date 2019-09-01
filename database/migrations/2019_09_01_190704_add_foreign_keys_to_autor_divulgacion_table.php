<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorDivulgacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_divulgacion', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'autor_divulgacion_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('divulgacion_id', 'autor_divulgacion_ibfk_2')->references('id')->on('divulgaciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_divulgacion', function(Blueprint $table)
		{
			$table->dropForeign('autor_divulgacion_ibfk_1');
			$table->dropForeign('autor_divulgacion_ibfk_2');
		});
	}

}
