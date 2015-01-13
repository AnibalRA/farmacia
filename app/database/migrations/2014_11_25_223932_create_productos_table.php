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

            $table->integer('subcategoria_id')->unsigned();
            // $table->foreign('subcategoria_id')->references('id')->on('subcategoria')->onDelete('cascade');
            $table->string('tipo',100);
            $table->integer('unidades');
            $table->string('unidad',100);
            
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
