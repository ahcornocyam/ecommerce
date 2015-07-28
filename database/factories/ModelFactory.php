<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*
 * factory de user
 */
$factory->define(ecommerce\User::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->email,
        'password'          => bcrypt(str_random(10)),
        'remember_token'    => str_random(10),
    ];
});

/*
 * Rota de Category
 */
$factory->define(\ecommerce\Category::class,function(\Faker\Generator $faker){
    return [
        'name'          =>$faker->word,
        'description'   => $faker->sentence,
    ];
});

/*
 * Rota de Product
 */

$factory->define(\ecommerce\Product::class, function($faker){
    return
        [
            'name'          => $faker->word(),
            'description'   => $faker->sentence(),
            'price'         => $faker->randomNumber(2),
            'featured'      => $faker->boolean(50),
            'recommend'     => $faker->boolean(50),
            'category_id'   => $faker->numberBetween(1,10),
        ];
});