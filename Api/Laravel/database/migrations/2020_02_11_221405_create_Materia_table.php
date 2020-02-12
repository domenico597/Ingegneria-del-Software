<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Materia', function(Blueprint $table)
		{
			$table->integer('ID_Materia', true);
			$table->string('Nome', 50);
			$table->integer('Semestre')->default(1);
			$table->boolean('Obbligatoria')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Materia');
	}

}
