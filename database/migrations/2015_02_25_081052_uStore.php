<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UStore extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($newtable)
        {
            $newtable->increments('id');
            $newtable->string('email')->unique();
            $newtable->string('username', 100)->unique();
            $newtable->string('password', 100);
            $newtable->rememberToken(); //stop cookies being hijacked
            $newtable->timestamps();
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