<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIscrizioneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Iscrizione', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('Materia')->index('Materia');
			$table->integer('Studente')->index('Studente');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Iscrizione');
	}

}
