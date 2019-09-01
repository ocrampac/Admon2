<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArticuloLgacTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulo_lgac', function(Blueprint $table)
		{
			$table->foreign('LGAC_id', 'Articulo_LGAC_ibfk_1')->references('id')->on('lineageneracionaplicacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('articulo_id', 'Articulo_LGAC_ibfk_2')->references('id')->on('articulos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articulo_lgac', function(Blueprint $table)
		{
			$table->dropForeign('Articulo_LGAC_ibfk_1');
			$table->dropForeign('Articulo_LGAC_ibfk_2');
		});
	}

}
