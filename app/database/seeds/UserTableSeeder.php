<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('users')->delete();
         
        $Admin = User::create(array(
            'id'             => '1',
            'nombre'         => 'Daniel',
            'apPaterno'      => 'Paredes',   
            'apMaterno'      => 'Rivas',
            'email'          => 'keko_daniel@hotmail.com',
            'fecNac'         => '2015-06-03',
            'departamento'   => '1',
            'sueldo'         =>  '600.33',
            'password'       => Hash::make('keko1234')
        ));


  }
 
}