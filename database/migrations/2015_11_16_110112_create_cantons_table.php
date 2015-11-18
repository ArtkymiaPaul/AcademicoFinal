<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Canton', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',30);
			$table->integer('id_provincia')->unsigned();
			$table->foreign('id_provincia')->references('id')->on('provincia');
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
		Schema::drop('Canton');
	}

}
