<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTesisdirigidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tesisdirigidas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Institucion', 100);
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->text('Titulo');
			$table->boolean('estadoTesis_id')->index('estadoTesis_id');
			$table->date('FechaAprobacion');
			$table->date('FechaObtencionGrado');
			$table->boolean('pais_id')->index('pais_id');
			$table->integer('gradoAcademico_id')->unsigned()->index('gradoAcademico_id');
			$table->integer('area_id')->unsigned()->index('area_id');
			$table->integer('campo_id')->unsigned()->index('campo_id');
			$table->integer('disciplina_id')->unsigned()->index('disciplina_id');
			$table->integer('subdisciplina_id')->unsigned()->index('subdisciplina_id');
			$table->text('Archivo', 65535)->nullable();
			$table->text('Link', 65535)->nullable();
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
		Schema::drop('tesisdirigidas');
	}

}
