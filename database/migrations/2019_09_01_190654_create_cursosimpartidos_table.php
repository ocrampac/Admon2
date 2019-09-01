<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCursosimpartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursosimpartidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('InstitucionOrganizadora', 100);
			$table->string('NombrePrograma', 100);
			$table->string('NombreCurso', 100);
			$table->date('FechaInicio')->nullable();
			$table->date('FechaFin')->nullable();
			$table->smallInteger('HorasTotales')->unsigned();
			$table->integer('area_id')->unsigned()->index('area_id');
			$table->integer('campo_id')->unsigned()->index('campo_id');
			$table->integer('disciplina_id')->unsigned()->index('disciplina_id');
			$table->integer('subdisciplina_id')->unsigned()->index('subdisciplina_id');
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
		Schema::drop('cursosimpartidos');
	}

}
