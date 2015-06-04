<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration {

	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id'); 
			$table->string('nombre', 50);  
			$table->string('apPaterno',50);
			$table->string('apMaterno',50); 
			$table->date('fecNac');

            $table->integer('departamento');
            $table->foreign('departamento')
	            ->references('departamento')
	            ->on('departamentos');
	            
			$table->double('sueldo');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('empleados');
	}

}
