<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDivulgacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('divulgaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('InstitucionOrganizadora', 100);
			$table->string('TituloTrabajo', 100);
			$table->boolean('tipoParticipacion_id')->index('tipoParticipacion_id');
			$table->boolean('tipoEvento_id')->index('tipoEvento_id');
			$table->boolean('dirigido_id')->index('dirigido_id');
			$table->date('Fecha')->nullable();
			$table->text('NotasPeriodisticas', 65535)->nullable();
			$table->boolean('divulgacionyDifusion_id')->index('divulgacionyDifusion_id');
			$table->boolean('tipoMedio_id')->index('tipoMedio_id');
			$table->string('ProductoObtenido', 100);
			$table->string('PalabraClave', 20);
			$table->string('PalabraClave2', 20);
			$table->string('PalabraClave3', 20);
			$table->string('Archivo', 50)->nullable();
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
		Schema::drop('divulgaciones');
	}

}
