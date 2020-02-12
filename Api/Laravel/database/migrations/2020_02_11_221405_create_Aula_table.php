<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Aula', function(Blueprint $table)
		{
			$table->integer('ID_Aula', true);
			$table->string('Codice_Aula', 50);
			$table->text('Descrizione', 65535);
			$table->text('Indirizzo', 65535);
			$table->text('Edificio', 65535);
			$table->text('Piano', 65535);
			$table->text('Foto', 65535);
			$table->boolean('Riservato_stud')->default(0);
			$table->integer('Numero_posti');
			$table->integer('Dipartimento')->index('Dipartimento');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Aula');
	}

}
