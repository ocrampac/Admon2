<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAutorReportetecnicoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('autor_reportetecnico', function(Blueprint $table)
		{
			$table->foreign('autor_id', 'autor_reporteTecnico_ibfk_1')->references('id')->on('autores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('reporteTecnico_id', 'autor_reporteTecnico_ibfk_2')->references('id')->on('reportetecnico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('autor_reportetecnico', function(Blueprint $table)
		{
			$table->dropForeign('autor_reporteTecnico_ibfk_1');
			$table->dropForeign('autor_reporteTecnico_ibfk_2');
		});
	}

}
