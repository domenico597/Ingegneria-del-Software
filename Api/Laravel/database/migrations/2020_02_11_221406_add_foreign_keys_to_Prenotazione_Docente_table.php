<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrenotazioneDocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Prenotazione_Docente', function(Blueprint $table)
		{
			$table->foreign('Docente', 'prenotazione_docente_ibfk_1')->references('ID_Docente')->on('Docente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Aula', 'prenotazione_docente_ibfk_2')->references('ID_Aula')->on('Aula')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Materia', 'prenotazione_docente_ibfk_3')->references('ID_Materia')->on('Materia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Prenotazione_Docente', function(Blueprint $table)
		{
			$table->dropForeign('prenotazione_docente_ibfk_1');
			$table->dropForeign('prenotazione_docente_ibfk_2');
			$table->dropForeign('prenotazione_docente_ibfk_3');
		});
	}

}
