<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPresenzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Presenza', function(Blueprint $table)
		{
			$table->foreign('ID_Studente', 'presenza_ibfk_1')->references('ID_Studente')->on('Studente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_Prenotazione_Lezione', 'presenza_ibfk_2')->references('ID_Prenotazione_Lezione')->on('Prenotazione_Docente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Presenza', function(Blueprint $table)
		{
			$table->dropForeign('presenza_ibfk_1');
			$table->dropForeign('presenza_ibfk_2');
		});
	}

}
