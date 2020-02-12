<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePresenzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Presenza', function(Blueprint $table)
		{
			$table->integer('ID_Presenza', true);
			$table->integer('ID_Studente')->index('ID_Studente');
			$table->integer('ID_Prenotazione_Lezione')->index('ID_Prenotazione_Lezione');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Presenza');
	}

}
