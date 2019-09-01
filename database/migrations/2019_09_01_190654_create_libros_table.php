<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('Titulo');
			$table->string('ISBNImpreso', 20)->nullable();
			$table->string('ISBNElectronico', 20)->nullable();
			$table->string('Editorial', 100);
			$table->string('Edicion', 20);
			$table->char('AñoPublicacion', 4);
			$table->char('AñoEdicion', 4);
			$table->boolean('idioma_id')->index('idioma_id');
			$table->smallInteger('Volumen')->unsigned()->nullable();
			$table->smallInteger('Tomo')->unsigned()->nullable();
			$table->boolean('pais_id')->index('pais_id');
			$table->smallInteger('Tiraje')->unsigned()->nullable();
			$table->smallInteger('NumPaginas')->unsigned();
			$table->string('PalabraClave', 20);
			$table->string('PalabraClave2', 20);
			$table->string('PalabraClave3', 20);
			$table->string('ISBNTraducido', 20)->nullable();
			$table->text('TituloTraducido')->nullable();
			$table->boolean('idiomaTraducido_id')->nullable()->index('idiomaTraducido_id');
			$table->boolean('apoyoInstitucional_id')->index('apoyoInstitucional_id');
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
		Schema::drop('libros');
	}

}
