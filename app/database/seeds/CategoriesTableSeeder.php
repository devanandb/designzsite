<?php


class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();

        Category::create([
        	'name' => 'Apparel',
        	'desc' => 'Apparel products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Acrylic Trophies',
        	'desc' => 'Acrylic Trophies products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Wooden Trophies',
        	'desc' => 'Wooden Trophies products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Imported Trophies',
        	'desc' => 'Imported Trophies products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Stationery',
        	'desc' => 'Stationery products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Desktop Accessories',
        	'desc' => 'Desktop Accessories products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Home Accessories',
        	'desc' => 'Home Accessories products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Home Appliances',
        	'desc' => 'Home Appliances products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Flowers',
        	'desc' => 'Flowers products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Cakes',
        	'desc' => 'Cakes products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Confectionaries',
        	'desc' => 'Confectionaries products go here',
        	'categorygroup_id' => 1
        ]);

        Category::create([
        	'name' => 'Others',
        	'desc' => 'Others products go here',
        	'categorygroup_id' => 1
        ]);
	}

}