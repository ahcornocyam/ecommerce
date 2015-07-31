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
Route::group(['prefix'=>'admin','where'=>['id'=>'[1-9]+']],function(){

    /*
     * rotas de categorias
     */
    Route::group(['prefix'=>'categories'],function(){

        get('/',['as'=>'category','uses'=>'CategoriesController@index']);
        get('/create',['as'=>'category.create','uses'=>'CategoriesController@create']);
        post('/',['as'=>'category.store','uses'=>'CategoriesController@store']);
        get('/{id?}/edit',['as'=>'category.edit','uses'=>'CategoriesController@edit']);
        put('/{id?}',['as'=>'category.update', 'uses' =>'CategoriesController@update']);
        get('/{id?}/delete',['as'=>'category.delete','uses'=>'CategoriesController@destroy']);

    });
    /*
     * rotas de produtos
     */
    Route::group(['prefix'=>'product'],function(){

        get('/',['as'=>'product','uses'=>'ProductsController@index']);
        get('/create',['as'=>'product.create','uses'=>'ProductsController@create']);
        post('/',['as'=>'product.store','uses'=>'ProductsController@store']);
        get('/{id?}/edit',['as'=>'product.edit','uses'=>'ProductsController@edit']);
        put('/{id?}',['as'=>'product.update', 'uses' =>'ProductsController@update']);;
        get('/{id?}/delete',['as'=>'product.delete','uses'=>'ProductsController@destroy']);
    });

    /*
     * Rotas para images
     */
    Route::group(['prefix'=>'images'],function($id){

        get('{id?}/product',['as'=>'images', 'uses'=>'ProductImageController@index']);
        get('create/{id?}/product',['as'=>'images.create', 'uses'=> 'ProductImageController@create']);
        post('{id}/product',['as'=>'images.store', 'uses' =>'ProductImageController@store']);
        get('destroy/{id?}/product',['as'=>'images.destroy', 'uses' =>'ProductImageController@destroy']);

    });
});


