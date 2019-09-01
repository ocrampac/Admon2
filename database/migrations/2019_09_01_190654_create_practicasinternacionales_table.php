<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePracticasinternacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('practicasinternacionales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gradoAcademico_id')->unsigned()->index('gradoAcademico_id');
			$table->boolean('pais_id')->index('pais_id');
			$table->boolean('Duracion');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('practicasinternacionales');
	}

}
