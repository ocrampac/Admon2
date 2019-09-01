<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApoyoinstitucionalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apoyoinstitucional', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('ApoyoInstitucional', 100)->unique('ApoyoInstitucional');
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
		Schema::drop('apoyoinstitucional');
	}

}
