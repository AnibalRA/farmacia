<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compras',function($table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('factura', 20);
            $table->integer('proveedores_id')->unsigned();
            $table->foreign('proveedores_id')->references('id')->on('proveedores')->onDelete('cascade');
            $table->integer('farmacia_id')->unsigned();
            $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
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
		Schema::drop('compras');
	}

}
