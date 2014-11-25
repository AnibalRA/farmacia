<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesrequisicionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detallesrequisicion',function($table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('requisicion_id')->unsigned();
            $table->foreign('requisicion_id')->references('id')->on('requisicion')->onDelete('cascade');
            $table->integer('productos_id')->unsigned();
            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
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
		Schema::drop('detallesrequisicion');
	}

}
