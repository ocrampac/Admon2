<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPracticasinternacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('practicasinternacionales', function(Blueprint $table)
		{
			$table->foreign('gradoAcademico_id', 'PracticasInternacionales_ibfk_1')->references('id')->on('gradosacademicos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pais_id', 'PracticasInternacionales_ibfk_2')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('practicasinternacionales', function(Blueprint $table)
		{
			$table->dropForeign('PracticasInternacionales_ibfk_1');
			$table->dropForeign('PracticasInternacionales_ibfk_2');
		});
	}

}
