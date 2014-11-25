<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes',function($table) {
            $table->increments('id');
            $table->integer('farmacia_id')->unsigned();
            $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
			$table->string('nombre',75);
            $table->string('telefono', 10);
			$table->text('direccion');
			$table->string('email', 100)->unique();
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
		Schema::drop('clientes');
	}

}
