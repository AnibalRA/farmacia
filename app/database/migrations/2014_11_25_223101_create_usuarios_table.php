<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
            $table->increments('id');
            $table->integer('farmacia_id')->unsigned();
            $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
            $table->string('user',32);
            $table->string('password');
            $table->integer('tipousuarios_id')->unsigned();
            $table->foreign('tipousuarios_id')->references('id')->on('tipousuarios')->onDelete('cascade');
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
		Schema::drop('users');
	}

}
