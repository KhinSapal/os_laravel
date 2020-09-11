<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //      factory(App\Category::class,5)->create();
    // }

    public function run()
    {
    	//one-to-many reelationship with saveMany() method
    	// Create 2 records of categories
    	factory(App\Category::class,2)->create()->each(
    		function($category){
    			//seed the relation with 3 subcategories
    			$subcategories = factory(App\Subcategory::class,3)->make();
    			$category->subcategories()->saveMany($subcategories);
    			//relationship in category model
    		});
    }
}
