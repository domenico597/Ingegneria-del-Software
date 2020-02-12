<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIscrizioneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Iscrizione', function(Blueprint $table)
		{
			$table->foreign('Materia', 'iscrizione_ibfk_1')->references('ID_Materia')->on('Materia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Studente', 'iscrizione_ibfk_2')->references('ID_Studente')->on('Studente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Iscrizione', function(Blueprint $table)
		{
			$table->dropForeign('iscrizione_ibfk_1');
			$table->dropForeign('iscrizione_ibfk_2');
		});
	}

}
