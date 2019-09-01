<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDivulgacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('divulgaciones', function(Blueprint $table)
		{
			$table->foreign('tipoParticipacion_id', 'Divulgaciones_ibfk_1')->references('id')->on('tiposparticipacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipoEvento_id', 'Divulgaciones_ibfk_2')->references('id')->on('tiposevento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('dirigido_id', 'Divulgaciones_ibfk_3')->references('id')->on('dirigido')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('divulgacionyDifusion_id', 'Divulgaciones_ibfk_4')->references('id')->on('divulgacionydifusion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipoMedio_id', 'Divulgaciones_ibfk_5')->references('id')->on('tiposmedio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('divulgaciones', function(Blueprint $table)
		{
			$table->dropForeign('Divulgaciones_ibfk_1');
			$table->dropForeign('Divulgaciones_ibfk_2');
			$table->dropForeign('Divulgaciones_ibfk_3');
			$table->dropForeign('Divulgaciones_ibfk_4');
			$table->dropForeign('Divulgaciones_ibfk_5');
		});
	}

}
