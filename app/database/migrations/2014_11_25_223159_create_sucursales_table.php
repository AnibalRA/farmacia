<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sucursales',function($table){
            $table->increments('id');
            $table->string('nombre',100);
            $table->text('direccion');
            $table->string('telefono', 10);
            $table->string('email', 100);
            $table->integer('farmacia_id')->unsigned();
            // $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
			$table->integer('municipios_id')->unsigned();
            // $table->foreign('municipios_id')->references('id')->on('municipios')->onDelete('cascade');
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
		Schema::drop('sucursales');
	}

}
