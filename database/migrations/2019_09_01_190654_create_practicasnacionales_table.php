<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePracticasnacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('practicasnacionales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gradoAcademico_id')->unsigned()->index('gradoAcademico_id');
			$table->boolean('entidadesFederativas_id')->index('entidadesFederativas_id');
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
		Schema::drop('practicasnacionales');
	}

}
