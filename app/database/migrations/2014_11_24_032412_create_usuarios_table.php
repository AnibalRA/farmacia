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
		Schema::create('usuarios',function($table){
            $table->increments('id');
            $table->integer('farmacia_id')->unsigned();
            $table->foreign('farmacia_id')->references('id')->on('farmacias')->onDelete('cascade');
            $table->string('user',32);
            $table->string('password');
            $table->integer('tipo_id');
            $table->integer('tipousuario_id')->unsigned();
            $table->foreign('tipousuario_id')->references('id')->on('tipousuario')->onDelete('cascade');

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
		Schema::drop('usuarios');
	}

}
