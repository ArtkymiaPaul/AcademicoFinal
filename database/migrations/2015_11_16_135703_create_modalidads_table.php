<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Modalidad', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',30);
			$table->decimal('duracion_meses',10,0);
			$table->integer('periodos');
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
		Schema::drop('Modalidad');
	}

}
