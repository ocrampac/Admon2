<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articulos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('TituloArticulo');
			$table->string('NombreRevista');
			$table->string('ISSNImpreso', 20)->nullable();
			$table->string('ISSNElectronico', 20)->nullable();
			$table->string('DOI')->nullable();
			$table->smallInteger('NumRevista')->unsigned()->nullable();
			$table->smallInteger('VolumenRevista')->unsigned()->nullable();
			$table->char('AñoPublicacion', 4);
			$table->integer('PaginaDe')->unsigned();
			$table->integer('PaginaA')->unsigned();
			$table->string('PalabraClave', 20);
			$table->string('PalabraClave2', 20);
			$table->string('PalabraClave3', 20);
			$table->integer('area_id')->unsigned()->index('area_id');
			$table->integer('campo_id')->unsigned()->index('campo_id');
			$table->integer('disciplina_id')->unsigned()->index('disciplina_id');
			$table->integer('subdisciplina_id')->unsigned()->index('subdisciplina_id');
			$table->string('Indexado', 100)->nullable();
			$table->string('Arbitrado', 100)->nullable();
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
		Schema::drop('articulos');
	}

}
