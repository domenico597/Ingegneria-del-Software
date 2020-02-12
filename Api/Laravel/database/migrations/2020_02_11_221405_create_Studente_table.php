<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Studente', function(Blueprint $table)
		{
			$table->integer('ID_Studente', true);
			$table->integer('Matricola');
			$table->string('Nome', 25);
			$table->string('Cognome', 50);
			$table->text('Email', 65535);
			$table->string('Corso', 50);
			$table->string('Password', 32);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Studente');
	}

}
