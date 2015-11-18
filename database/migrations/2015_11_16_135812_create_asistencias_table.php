<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asistencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->integer('id_estudiante')->unsigned();
			$table->foreign('id_estudiante')->references('id')->on('estudiante');
			$table->integer('id_docente')->unsigned();
			$table->foreign('id_docente')->references('id')->on('docente');
			$table->integer('id_paralelo')->unsigned();
			$table->foreign('id_paralelo')->references('id')->on('paralelo');
			$table->integer('id_asignatura')->unsigned();
			$table->foreign('id_asignatura')->references('id')->on('asignatura');
			$table->string('asistencia', 1);
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
		Schema::drop('asistencias');
	}

}
