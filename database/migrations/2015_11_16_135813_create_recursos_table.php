<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',30);
			$table->integer('id_calificacion')->unsigned();
			$table->foreign('id_calificacion')->references('id')->on('calificaciones');
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
		Schema::drop('recursos');
	}

}
