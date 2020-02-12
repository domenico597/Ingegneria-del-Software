<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSegnalazioniTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Segnalazioni', function(Blueprint $table)
		{
			$table->integer('ID_Segnalazione', true);
			$table->integer('ID_Utente')->index('ID_Utente');
			$table->integer('ID_Aula')->index('ID_Aula');
			$table->string('Tipologia_Utente', 10);
			$table->text('Descrizione', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Segnalazioni');
	}

}
