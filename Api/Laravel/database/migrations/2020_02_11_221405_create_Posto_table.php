<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Posto', function(Blueprint $table)
		{
			$table->integer('ID_Posto', true);
			$table->integer('Numero_posto');
			$table->integer('ID_Aula')->index('ID_Aula');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Posto');
	}

}
