<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursoDiplomadoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso_diplomado', function(Blueprint $table)
		{
			$table->integer('curso_id')->unsigned()->index('curso_id');
			$table->integer('dipImp_id')->unsigned()->index('dipImp_id');
			$table->primary(['curso_id','dipImp_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curso_diplomado');
	}

}
