<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductossucursalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('productossucursal',function($table){
            $table->increments('id');
            $table->integer('productosfarmacia_id')->unsigned();
            // $table->foreign('productosfarmacia_id')->references('id')->on('productosfarmacia')->onDelete('cascade');
            $table->double('precio',6,2);
            $table->integer('sucursales_id')->unsigned();
            // $table->foreign('sucursales_id')->references('id')->on('sucursales')->onDelete('cascade');
            $table->string('ubicacion',20);
            $table->integer('cantidad');
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
		Schema::drop('productossucursal');
	}

}
