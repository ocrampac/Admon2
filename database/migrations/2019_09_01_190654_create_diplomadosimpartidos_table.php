<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiplomadosimpartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diplomadosimpartidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Institucion', 100);
			$table->text('NombreDiplomado', 65535);
			$table->text('NombreCurso', 65535);
			$table->char('AñoPublicacion', 4);
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
		Schema::drop('diplomadosimpartidos');
	}

}
