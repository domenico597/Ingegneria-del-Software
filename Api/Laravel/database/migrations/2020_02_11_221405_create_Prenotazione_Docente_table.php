<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrenotazioneDocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Prenotazione_Docente', function(Blueprint $table)
		{
			$table->integer('ID_Prenotazione_Lezione', true);
			$table->integer('Docente');
			$table->integer('Aula')->index('Aula');
			$table->integer('Materia')->index('Materia');
			$table->date('Data_prenotazione');
			$table->time('Orario_prenotato');
			$table->unique(['Docente','Data_prenotazione','Orario_prenotato'], 'Docente');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Prenotazione_Docente');
	}

}
