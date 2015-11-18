<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Docente', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cedula',13);
			$table->string('apellido_pat',30);
			$table->string('apellido_mat',30);
			$table->string('nombres',50);
			$table->date('fecha_nac');
			$table->string('genero',1);
			$table->string('telf_conv',10);
			$table->string('telf_cel',10);
			$table->string('direccion',100);
			$table->string('estado',1);
			$table->integer('id_canton')->unsigned();
			$table->foreign('id_canton')->references('id')->on('canton');
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
		Schema::drop('Docente');
	}

}
