<?php


class CategorygroupsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categorygroups')->delete();

        Categorygroup::create([
        	'name' => 'All Products',
        	'desc' => 'List of all products'
        ]);
	}

}