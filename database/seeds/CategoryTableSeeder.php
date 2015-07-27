<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ecommerce\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->truncate();
        factory(Category::class,10)->create();
    }
}
