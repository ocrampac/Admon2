<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAutorDivulgacionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('autor_divulgacion', function(Blueprint $table)
		{
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->integer('divulgacion_id')->unsigned()->index('divulgacion_id');
			$table->primary(['autor_id','divulgacion_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('autor_divulgacion');
	}

}
