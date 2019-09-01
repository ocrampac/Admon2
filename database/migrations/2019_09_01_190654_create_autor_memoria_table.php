<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorMemoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autor_memoria', function(Blueprint $table)
		{
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->integer('memoria_id')->unsigned()->index('memoria_id');
			$table->primary(['autor_id','memoria_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autor_memoria');
	}

}
