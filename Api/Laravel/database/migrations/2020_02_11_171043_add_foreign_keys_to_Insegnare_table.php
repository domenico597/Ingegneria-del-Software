<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInsegnareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Insegnare', function(Blueprint $table)
		{
			$table->foreign('Docente', 'insegnare_ibfk_1')->references('ID_Docente')->on('Docente')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Materia', 'insegnare_ibfk_2')->references('ID_Materia')->on('Materia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Insegnare', function(Blueprint $table)
		{
			$table->dropForeign('insegnare_ibfk_1');
			$table->dropForeign('insegnare_ibfk_2');
		});
	}

}
