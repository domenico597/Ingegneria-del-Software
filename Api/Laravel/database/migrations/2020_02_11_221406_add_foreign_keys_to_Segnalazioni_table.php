<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSegnalazioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Segnalazioni', function(Blueprint $table)
		{
			$table->foreign('ID_Aula', 'segnalazioni_ibfk_1')->references('ID_Aula')->on('Aula')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Utente', 'segnalazioni_ibfk_2')->references('ID_Studente')->on('Studente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Segnalazioni', function(Blueprint $table)
		{
			$table->dropForeign('segnalazioni_ibfk_1');
			$table->dropForeign('segnalazioni_ibfk_2');
		});
	}

}
