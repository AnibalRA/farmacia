<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('municipios', function($table) {
			$table->increments('id');
			$table->string('nombre',75);
            $table->integer('departamentos_id')->unsigned();
            $table->foreign('departamentos_id')->references('id')->on('departamentos')->onDelete('cascade');
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
		Schema::drop('municipios');
	}

}
