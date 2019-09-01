<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReportestecnicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reportestecnicos', function(Blueprint $table)
		{
			$table->foreign('origenReporte_id', 'ReporteTecnico_ibfk_1')->references('id')->on('origenreporte')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reportestecnicos', function(Blueprint $table)
		{
			$table->dropForeign('ReporteTecnico_ibfk_1');
		});
	}

}
