<?php
 
class LoginTableSeeder extends Seeder {
 
  public function run()
  {
    //delete users table records
        DB::table('login')->delete();
         
        $test = Login::create(array(
            'id'       => '1',
            'email'    => 'test@hotmail.com',   
            'password' => Hash::make('test1234')
        ));


  }
 
}