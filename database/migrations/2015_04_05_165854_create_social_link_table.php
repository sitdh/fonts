<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialLinkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_link', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
            $table->string('user_id');
            $table->foreign('user_id')
                  ->references('user_id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('social_name');
            $table->string('social_identity');
            $table->string('service_provider');
            $table->string('access_token');
            $table->string('access_list');
            $table->json('grant_options');
            $table->timestamp('grant_timestamp');
            $table->timestamp('expire_timestamp');
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
		Schema::drop('social_link');
	}

}
