<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcialActividadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parcial_actividades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_parcial')->unsigned();
			$table->foreign('id_parcial')->references('id')->on('parcial');
			$table->integer('id_actividades')->unsigned();
			$table->foreign('id_actividades')->references('id')->on('actividades');
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
		Schema::drop('parcial_actividades');
	}

}
