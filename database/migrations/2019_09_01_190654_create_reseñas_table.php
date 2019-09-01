<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReseñasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reseñas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('Titulo');
			$table->integer('autor_id')->unsigned()->index('autor_id');
			$table->integer('PaginaDe')->unsigned();
			$table->integer('PaginaA')->unsigned();
			$table->text('TituloPublicacion');
			$table->date('FechaPublicacion');
			$table->boolean('pais_id')->index('pais_id');
			$table->string('PalabraClave', 20);
			$table->string('PalabraClave2', 20);
			$table->string('PalabraClave3', 20);
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
		Schema::drop('reseñas');
	}

}
