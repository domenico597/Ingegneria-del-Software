<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrenotazioneStudenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Prenotazione_studente', function(Blueprint $table)
		{
			$table->foreign('Studente', 'prenotazione_studente_ibfk_1')->references('ID_Studente')->on('Studente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Prenotazione_studente', function(Blueprint $table)
		{
			$table->dropForeign('prenotazione_studente_ibfk_1');
		});
	}

}
