<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDipartimentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Dipartimento', function(Blueprint $table)
		{
			$table->integer('Dipartimento', true);
			$table->string('Nome', 70);
			$table->integer('Numero_aule');
			$table->integer('Universita')->index('Universita');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Dipartimento');
	}

}
