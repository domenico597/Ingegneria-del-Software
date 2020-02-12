<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInsegnareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Insegnare', function(Blueprint $table)
		{
			$table->integer('ID_Insegnamento', true);
			$table->integer('Materia')->index('Materia');
			$table->integer('Docente')->index('Docente');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Insegnare');
	}

}
