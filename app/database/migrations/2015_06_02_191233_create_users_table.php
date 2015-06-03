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
			$table->integer('id')->primary(); 
			$table->string('nombre', 50);  
			$table->string('apPaterno',50);
			$table->string('apMaterno',50);
			$table->string('email', 50)->unique();  
			$table->date('fecNac');

            $table->integer('departamento');
            $table->foreign('departamento')
	            ->references('departamento')
	            ->on('departamentos');
	            
			$table->double('sueldo');
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
		Schema::drop('users');
	}

}


