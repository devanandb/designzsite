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

		/*$this->call('UsersTableSeeder');*/
		$this->call('CategorygroupsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('ProductsTableSeeder');

		
	}

}
