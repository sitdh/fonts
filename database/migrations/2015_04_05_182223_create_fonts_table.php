<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFontsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonts', function(Blueprint $table)
		{
			$table->bigIncrements('id')->unsigend();
			$table->string('font_name');
			$table->text('font_description');
			$table->timestamp('sending_timestamp');
            $table->bigInteger('id')
            $table->foreign('id')->references('id')->on('users');
            $table->string('font_location');
            $table->string('thumbnail_url');
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
		Schema::drop('fonts');
	}

}
