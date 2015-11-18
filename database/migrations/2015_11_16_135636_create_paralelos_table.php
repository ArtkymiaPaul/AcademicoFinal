<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParalelosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('paralelo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',2);
			$table->integer('id_curso')->unsigned();
			$table->foreign('id_curso')->references('id')->on('curso');
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
		Schema::drop('paralelo');
	}

}
