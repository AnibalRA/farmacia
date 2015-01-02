<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosfarmaciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('productofarmacia',function($table){
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('minimo');
            $table->integer('productos_id')->unsigned();
            // $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->integer('farmacia_id')->unsigned();
            // $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
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
		Schema::drop('productosfarmacia');
	}

}
