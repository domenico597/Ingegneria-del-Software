<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDipartimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Dipartimento', function(Blueprint $table)
		{
			$table->foreign('Universita', 'dipartimento_ibfk_1')->references('ID_uni')->on('Universita')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Dipartimento', function(Blueprint $table)
		{
			$table->dropForeign('dipartimento_ibfk_1');
		});
	}

}
