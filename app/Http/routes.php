<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'home',function(){
    return view('welcome');
}]);
/*
 * rotas para admin incluindo produtos e categorias
 */
Route::group(['prefix'=>'admin'],function(){

    /*
     * rotas de categorias
     */
    Route::group(['prefix'=>'categories'],function(){

        get('/',['as'=>'category','uses'=>'CategoriesController@index']);
        get('/create',['as'=>'category.create','uses'=>'CategoriesController@create']);
        post('/',['as'=>'category.store','uses'=>'CategoriesController@store']);

    });
    /*
     * rotas de produtos
     */
    Route::group(['prefix'=>'product'],function(){

        get('/',['as'=>'product','uses'=>'ProductsController@index']);

    });
});


