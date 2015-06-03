<?php
 
class EmpleadoTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('empleados')->delete();
         
        $usuario = Empleado::create(array(
            'id'             => '1',
            'nombre'         => 'Daniel',
            'apPaterno'      => 'Paredes',   
            'apMaterno'      => 'Rivas',
            'fecNac'         => '2015-06-03',
            'departamento'   => '1',
            'sueldo'         =>  '600.33',
        ));


  }
 
}