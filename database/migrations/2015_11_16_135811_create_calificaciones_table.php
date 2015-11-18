<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calificaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion', 30);
			$table->integer('id_parcial_actividad')->unsigned();
			$table->foreign('id_parcial_actividad')->references('id')->on('parcial_actividades');
			$table->integer('id_estudiante')->unsigned();
			$table->foreign('id_estudiante')->references('id')->on('estudiante');
			$table->integer('id_docente')->unsigned();
			$table->foreign('id_docente')->references('id')->on('docente');
			$table->integer('id_paralelo')->unsigned();
			$table->foreign('id_paralelo')->references('id')->on('paralelo');
			$table->integer('id_asignatura')->unsigned();
			$table->foreign('id_asignatura')->references('id')->on('asignatura');
			$table->decimal('calificacion', 2, 2);
			$table->string('tipo', 2);
			$table->dateTime('fecha_inicio');
			$table->dateTime('fecha_fin');
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
		Schema::drop('calificaciones');
	}

}
