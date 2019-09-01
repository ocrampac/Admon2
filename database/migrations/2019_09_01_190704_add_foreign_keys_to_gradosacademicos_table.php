<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGradosacademicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gradosacademicos', function(Blueprint $table)
		{
			$table->foreign('datosPersonales_id', 'GradosAcademicos_ibfk_1')->references('id')->on('datospersonales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nivelEducativo_id', 'GradosAcademicos_ibfk_2')->references('id')->on('niveleducativo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tiempoDedicado_id', 'GradosAcademicos_ibfk_3')->references('id')->on('tiempodedicado')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipoTitulacion_id', 'GradosAcademicos_ibfk_4')->references('id')->on('tipostitulacion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pais_id', 'GradosAcademicos_ibfk_5')->references('id')->on('paises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('modalidad_id', 'GradosAcademicos_ibfk_6')->references('id')->on('modalidades')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gradosacademicos', function(Blueprint $table)
		{
			$table->dropForeign('GradosAcademicos_ibfk_1');
			$table->dropForeign('GradosAcademicos_ibfk_2');
			$table->dropForeign('GradosAcademicos_ibfk_3');
			$table->dropForeign('GradosAcademicos_ibfk_4');
			$table->dropForeign('GradosAcademicos_ibfk_5');
			$table->dropForeign('GradosAcademicos_ibfk_6');
		});
	}

}
