<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores',function($table) {
            $table->increments('id');
            $table->integer('farmacia_id')->unsigned();
            $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
            $table->string('empresa', 50);
            $table->string('telefono', 10);
            $table->string('email', 100)->unique();
            $table->text('direccion');
            $table->string('contacto', 100);
            $table->string('telefonoContacto', 10);
            $table->string('emailContacto', 100);
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
		Schema::drop('proveedores');
	}

}
