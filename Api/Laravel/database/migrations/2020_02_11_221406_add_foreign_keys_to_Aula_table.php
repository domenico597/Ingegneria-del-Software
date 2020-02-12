<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Aula', function(Blueprint $table)
		{
			$table->foreign('Dipartimento', 'aula_ibfk_1')->references('Dipartimento')->on('Dipartimento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Aula', function(Blueprint $table)
		{
			$table->dropForeign('aula_ibfk_1');
		});
	}

}
