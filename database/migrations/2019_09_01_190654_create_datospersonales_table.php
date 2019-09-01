<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatospersonalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datospersonales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre', 100);
			$table->string('ApellidoP', 50);
			$table->string('ApellidoM', 50)->nullable();
			$table->boolean('sexo_id')->index('sexo_id');
			$table->boolean('estadoCivil_id')->index('estadoCivil_id');
			$table->boolean('paisOrigen_id')->index('paisOrigen_id');
			$table->string('RFC', 13)->nullable();
			$table->string('CURP', 18)->nullable();
			$table->string('LugarNacimiento', 30);
			$table->date('FechaNac');
			$table->string('Domicilio', 60);
			$table->string('Municipio', 30)->nullable();
			$table->boolean('entidadFederativa_id')->nullable()->index('entidadFederativa_id');
			$table->string('CP', 15);
			$table->string('ContactoTelefonico', 15);
			$table->string('ContactoTelefonico2', 15);
			$table->string('Facebook', 100)->nullable();
			$table->string('Twitter', 50)->nullable();
			$table->string('CorreoAlternativo', 50)->nullable();
			$table->string('Correo', 50)->unique('Correo');
			$table->boolean('comunidadBuap_id')->index('comunidadBuap_id');
			$table->integer('autor_id')->unsigned()->unique('autor_id');
			$table->string('Matricula', 20)->nullable()->unique('Matricula');
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
		Schema::drop('datospersonales');
	}

}
