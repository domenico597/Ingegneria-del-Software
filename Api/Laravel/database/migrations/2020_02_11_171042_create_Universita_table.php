<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversitaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Universita', function(Blueprint $table)
		{
			$table->integer('ID_uni', true);
			$table->string('Nome', 50);
			$table->text('Indirizzo', 65535);
			$table->integer('Numero_dipartimenti');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Universita');
	}

}
