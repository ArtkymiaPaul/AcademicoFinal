<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parcial', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_modalidad')->unsigned();
			$table->foreign('id_modalidad')->references('id')->on('modalidad');
			$table->string('descripcion',30);
			$table->integer('nro_periodo');
			$table->date('fecha_inicio');
			$table->date('fecha_fin');
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
		Schema::drop('parcial');
	}

}
