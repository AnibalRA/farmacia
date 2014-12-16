<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesventaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('detallesventa',function($table) {
            $table->increments('id');
            $table->integer('ventas_id')->unsigned();
            $table->foreign('ventas_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->integer('cantidad');
            $table->double('precio',6,2);
            
            $table->integer('productos_farmacia_id')->unsigned();
            // $table->foreign('productos_farmacia_id')->references('id')->on('productos_farmacia')->onDelete('cascade');
            
            
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
		Schema::drop('detallesventa');
	}

}
