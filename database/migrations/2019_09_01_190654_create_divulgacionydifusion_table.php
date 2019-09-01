<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDivulgacionydifusionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('divulgacionydifusion', function(Blueprint $table)
		{
			$table->boolean('id')->primary();
			$table->string('DivulgacionyDifusion', 100)->unique('DivulgacionyDifusion');
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
		Schema::drop('divulgacionydifusion');
	}

}
