<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos',function($table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->text('descripcion');

            /** ESTAS DOS LINEAS HAY QUE BORRARLAS
            $table->integer('farmacia_id')->unsigned();
            $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
            **/

            // AGREGAR ESTAS 2 LINEAS
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            
            
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
		Schema::drop('productos');
	}

}
