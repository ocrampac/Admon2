<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPracticasnacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('practicasnacionales', function(Blueprint $table)
		{
			$table->foreign('gradoAcademico_id', 'PracticasNacionales_ibfk_1')->references('id')->on('gradosacademicos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('entidadesFederativas_id', 'PracticasNacionales_ibfk_2')->references('id')->on('entidadesfederativas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('practicasnacionales', function(Blueprint $table)
		{
			$table->dropForeign('PracticasNacionales_ibfk_1');
			$table->dropForeign('PracticasNacionales_ibfk_2');
		});
	}

}
