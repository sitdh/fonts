<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id')->unsigned();
			$table->string('user_id');
			$table->string('display_name')->nullable();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('avatar');
            $table->enum(
                'account_status', 
                ['pending', 'activated', 'author', 'administrator', 'blocked']
            )->default('pending');
			$table->rememberToken();
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
