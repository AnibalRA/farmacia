<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSustitutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sustitutos',function($table) {
            $table->increments('id');
            $table->integer('productos_id')->unsigned();
            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->integer('productos_2_id')->unsigned();
            $table->foreign('productos_2_id')->references('id')->on('productos')->onDelete('cascade');
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
		Schema::drop('sustitutos');
	}

}
