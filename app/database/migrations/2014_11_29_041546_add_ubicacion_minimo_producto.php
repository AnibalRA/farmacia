<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUbicacionMinimoProducto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('productos', function($t){
			$t->integer('minimo');
			$t->string('ubicacion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('productos', function($t){
			$t->dropColumn('minimo');
			$t->dropColumn('ubicacion');
		});
	}

}
