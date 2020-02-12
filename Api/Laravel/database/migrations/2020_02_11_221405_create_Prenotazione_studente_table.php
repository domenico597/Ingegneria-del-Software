<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrenotazioneStudenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Prenotazione_studente', function(Blueprint $table)
		{
			$table->integer('ID_Prenotazione', true);
			$table->integer('Posto')->index('Posto');
			$table->integer('Studente');
			$table->dateTime('Data_Ora');
			$table->date('Data_prenotata');
			$table->time('Orario_prenotato');
			$table->unique(['Studente','Data_prenotata','Orario_prenotato'], 'Studente');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Prenotazione_studente');
	}

}
