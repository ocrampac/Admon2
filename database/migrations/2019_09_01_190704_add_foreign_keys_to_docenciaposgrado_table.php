<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocenciaposgradoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('docenciaposgrado', function(Blueprint $table)
		{
			$table->foreign('experienciaDocente_id', 'DocenciaPosgrado_ibfk_1')->references('id')->on('experienciadocente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('materia_id', 'DocenciaPosgrado_ibfk_2')->references('id')->on('materia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('docenciaposgrado', function(Blueprint $table)
		{
			$table->dropForeign('DocenciaPosgrado_ibfk_1');
			$table->dropForeign('DocenciaPosgrado_ibfk_2');
		});
	}

}
