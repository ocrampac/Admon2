<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticuloLgacTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulo_lgac', function(Blueprint $table)
		{
			$table->boolean('LGAC_id')->index('LGAC_id');
			$table->integer('articulo_id')->unsigned()->index('articulo_id');
			$table->primary(['articulo_id','LGAC_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articulo_lgac');
	}

}
