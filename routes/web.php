<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
  Route::get('/post/create', [
    'uses' => 'App\Http\Controllers\PostsController@create',
    'as' => 'post.create'
  ]);


  Route::get('/home', [
    'uses' => 'App\Http\Controllers\HomeController@index',
    'as' => 'home'
  ]);

  Route::post('/post/store', [
    'uses' => 'App\Http\Controllers\PostsController@store',
    'as' => 'post.store'
  ]);

  Route::get('/category/create', [
    'uses' => 'App\Http\Controllers\CategoriesController@create',
    'as' => 'category.create'
  ]);

  Route::get('/categories', [
    'uses' => 'App\Http\Controllers\CategoriesController@index',
    'as' => 'categories'
  ]);

  Route::post('/category/store', [
    'uses' => 'App\Http\Controllers\CategoriesController@store',
    'as' => 'category.store'
  ]);

  Route::get('/category/edit/{id}', [
    'uses' => 'App\Http\Controllers\CategoriesController@edit',
    'as' => 'category.edit'
  ]);

  Route::get('/category/delete/{id}', [
    'uses' => 'App\Http\Controllers\CategoriesController@destroy',
    'as' => 'category.delete'
  ]);

  Route::post('/category/update/{id}', [
    'uses' => 'App\Http\Controllers\CategoriesController@update',
    'as' => 'category.update'
  ]);

});
