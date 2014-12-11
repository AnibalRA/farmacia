<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas',function($table) {
            $table->increments('id');
            
            /** BORRAR
            $table->datetime('fecha');
            **/
            
	            // AGREGAR
            $table->timestamp('fecha');
            
            
            $table->string('factura',20);
            $table->integer('sucursales_id')->unsigned();
            $table->foreign('sucursales_id')->references('id')->on('sucursales')->onDelete('cascade');
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
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
		Schema::drop('ventas');
	}

}
