<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCapituloslibrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('capituloslibros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('TituloLibro');
			$table->string('ISBNImpreso', 20)->nullable();
			$table->string('ISBNElectronico', 20)->nullable();
			$table->string('Editorial', 100);
			$table->string('Edicion', 20);
			$table->char('AñoPublicacion', 4);
			$table->text('TituloCapitulo');
			$table->integer('NoCapitulo')->unsigned()->nullable();
			$table->integer('PaginaDe')->unsigned();
			$table->integer('PaginaA')->unsigned();
			$table->text('Resumen', 65535)->nullable();
			$table->integer('area_id')->unsigned()->index('area_id');
			$table->integer('campo_id')->unsigned()->index('campo_id');
			$table->integer('disciplina_id')->unsigned()->index('disciplina_id');
			$table->integer('subdisciplina_id')->unsigned()->index('subdisciplina_id');
			$table->boolean('apoyoInstitucional_id')->index('apoyoInstitucional_id');
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
		Schema::drop('capituloslibros');
	}

}
