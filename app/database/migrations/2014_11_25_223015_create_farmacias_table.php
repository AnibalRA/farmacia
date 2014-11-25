<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmaciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('farmacias', function($table) {
			$table->increments('id');
			$table->string('nombre',100);
			$table->text('direccion');
			$table->string('telefono', 10);
			$table->string('web',75)->unique();
			$table->string('email', 100)->unique();
            $table->integer('municipios_id')->unsigned();
            $table->foreign('municipios_id')->references('id')->on('municipios')->onDelete('cascade');
            $table->boolean('activa');
			$table->softDeletes();
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
		Schema::drop('farmacias');
	}

}
