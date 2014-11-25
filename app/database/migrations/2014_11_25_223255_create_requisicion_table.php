<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requisicion',function($table){
            $table->increments('id');
            $table->date('fecha');
            $table->integer('sucursales_id')->unsigned();
            $table->foreign('sucursales_id')->references('id')->on('sucursales')->onDelete('cascade');
			$table->integer('sucursales_2_id')->unsigned();
            $table->foreign('sucursales_2_id')->references('id')->on('sucursales')->onDelete('cascade');
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
		Schema::drop('requisicion');
	}

}
