<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticuloAutorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulo_autor', function(Blueprint $table)
		{
			$table->integer('articulo_id')->unsigned()->index('articulo_id');
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->primary(['articulo_id','autor_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articulo_autor');
	}

}
