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
            
            /** ESTAS DOS LINEAS HAY QUE BORRARLAS
            $table->integer('productos_id')->unsigned();
            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            **/
            
            // AGREGAR ESTAS 2 LINEAS
            $table->integer('productos_farmacia_id')->unsigned();
            $table->foreign('productos_farmacia_id')->references('id')->on('productos_farmacia')->onDelete('cascade');
            
            
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
