<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('subcategoria',function($table){
            $table->increments('id');
            $table->string('nombre',50);
            $table->integer('categoria_id')->unsigned();
            // $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
		Schema::drop('subcategoria');
	}

}
