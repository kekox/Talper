<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('login', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->integer('id')->primary(); 
			$table->string('email', 50);  
			$table->string('password', 200); 
			$table->string('remember_token', 200);  
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
		Schema::drop('login');
	}

}
