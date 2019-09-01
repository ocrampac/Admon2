<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCongresosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('congresos', function(Blueprint $table)
		{
			$table->foreign('pais_id', 'Congresos_ibfk_1')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipoParticipacion_id', 'Congresos_ibfk_2')->references('id')->on('tiposparticipacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('congresos', function(Blueprint $table)
		{
			$table->dropForeign('Congresos_ibfk_1');
			$table->dropForeign('Congresos_ibfk_2');
		});
	}

}
