<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallescompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detallescompra',function($table) {
            $table->increments('id');
            $table->integer('compras_id')->unsigned();
            $table->foreign('compras_id')->references('id')->on('compras')->onDelete('cascade');
			$table->integer('productos_id')->unsigned();
            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->integer('cantidad');
            $table->double('precio',6,2);
            $table->integer('laboratorios_id')->unsigned();
            $table->foreign('laboratorios_id')->references('id')->on('laboratorios')->onDelete('cascade');
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
		Schema::drop('detallescompra');
	}

}
