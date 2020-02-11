<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Posto', function(Blueprint $table)
		{
			$table->foreign('ID_Aula', 'posto_ibfk_1')->references('ID_Aula')->on('Aula')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Posto', function(Blueprint $table)
		{
			$table->dropForeign('posto_ibfk_1');
		});
	}

}
