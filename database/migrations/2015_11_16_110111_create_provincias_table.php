<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Provincia', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',30);
			$table->integer('id_pais')->unsigned();
			$table->foreign('id_pais')->references('id')->on('pais');
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
		Schema::drop('Provincia');
	}

}
