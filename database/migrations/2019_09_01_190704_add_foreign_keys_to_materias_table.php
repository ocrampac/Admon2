<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMateriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('materias', function(Blueprint $table)
		{
			$table->foreign('posgrado_id', 'Materias_ibfk_1')->references('id')->on('posgrados')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('materias', function(Blueprint $table)
		{
			$table->dropForeign('Materias_ibfk_1');
		});
	}

}
