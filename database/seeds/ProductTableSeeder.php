<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ecommerce\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->truncate();
        factory(Product::class, 50)->create();
    }
}
