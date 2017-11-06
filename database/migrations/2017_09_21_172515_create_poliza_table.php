<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolizaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poliza', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('apartados');
			$table->string('notas');
			$table->string('observaciones');
			$table->string('clausulas');
			$table->string('emision');
			$table->float('poliza_actualizada');
			$table->string('aportacion');
			$table->string('permiso');
			$table->string('vencimiento');
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
		//
	}

}
