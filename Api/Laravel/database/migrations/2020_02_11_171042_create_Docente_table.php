<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Docente', function(Blueprint $table)
		{
			$table->integer('ID_Docente', true);
			$table->string('Nome', 25);
			$table->string('Cognome', 50);
			$table->text('Email', 65535);
			$table->string('Telefono', 13);
			$table->string('Password', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Docente');
	}

}
