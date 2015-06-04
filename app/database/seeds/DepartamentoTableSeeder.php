<?php
 
class DepartamentoTableSeeder extends Seeder {
 
  public function run()
  {
      //delete users table records
        DB::table('departamentos')->delete();
         //insert some dummy records
        DB::table('departamentos')->insert(array(
                'departamento'=>'0',
                'descripcion'=>'Sistemas',
                ));
        
         DB::table('departamentos')->insert(array(
                'departamento'=>'1',
                'descripcion'=>'Finanzas',
                ));

        DB::table('departamentos')->insert(array(
                'departamento'=>'2',
                'descripcion'=>'Mecatronica',
                ));
        DB::table('departamentos')->insert(array(
                'departamento'=>'3',
                'descripcion'=>'Administracion',
                ));

  }
 
}