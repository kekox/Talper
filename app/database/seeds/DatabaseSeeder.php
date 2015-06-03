<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//call uses table seeder class
		$this->call('DepartamentoTableSeeder');
		//this message shown in your terminal after running db:seed command
		$this->command->info("Departamentos created :)");
		//call uses table seeder class
		$this->call('UserTableSeeder');
		//this message shown in your terminal after running db:seed command
		$this->command->info("User created :)");

		
	}

}
