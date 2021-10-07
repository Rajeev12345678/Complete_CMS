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

Route::get('/test', function() {
  return App\Models\User::find(1)->profile;
});

Route::get('/', [
'uses' => 'App\Http\Controllers\FrontEndController@index',
'as' => 'index'
]);

Route::get('/post/{slug}', [
  'uses' => 'App\Http\Controllers\FrontEndController@singlePost',
  'as' => 'post.single'
]);

Route::get('/category/{id}', [
  'uses' => 'App\Http\Controllers\FrontEndController@category',
  'as' => 'category.single'
]);

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

  Route::get('/post/delete/{id}', [
    'uses' => 'App\Http\Controllers\PostsController@destroy',
    'as' => 'post.delete'
  ]);

  Route::get('/posts', [
    'uses' => 'App\Http\Controllers\PostsController@index',
    'as' => 'posts'
  ]);

  Route::get('/posts/trashed', [
    'uses' => 'App\Http\Controllers\PostsController@trashed',
    'as' => 'posts.trashed'
  ]);

  Route::get('/posts/restore/{id}', [
    'uses' => 'App\Http\Controllers\PostsController@restore',
    'as' => 'post.restore'
  ]);

  Route::get('/posts/edit/{id}', [
    'uses' => 'App\Http\Controllers\PostsController@edit',
    'as' => 'post.edit'
  ]);

  Route::post('/posts/update/{id}', [
    'uses' => 'App\Http\Controllers\PostsController@update',
    'as' => 'post.update'
  ]);

  Route::get('/posts/kill/{id}', [
    'uses' => 'App\Http\Controllers\PostsController@kill',
    'as' => 'post.kill'
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

  Route::get('/tags', [
    'uses' => 'App\Http\Controllers\TagsController@index',
    'as' => 'tags'
  ]);

  Route::get('/tag/edit/{id}', [
    'uses' => 'App\Http\Controllers\TagsController@edit',
    'as' => 'tag.edit'
  ]);

  Route::get('/tag/create', [
    'uses' => 'App\Http\Controllers\TagsController@create',
    'as' => 'tag.create'
  ]);

  Route::post('/tag/store', [
    'uses' => 'App\Http\Controllers\TagsController@store',
    'as' => 'tag.store'
  ]);

  Route::post('/tag/update/{id}', [
    'uses' => 'App\Http\Controllers\TagsController@update',
    'as' => 'tag.update'
  ]);

  Route::get('/tag/delete/{id}', [
    'uses' => 'App\Http\Controllers\TagsController@destroy',
    'as' => 'tag.delete'
  ]);

  Route::get('/users', [
    'uses' => 'App\Http\Controllers\UsersController@index',
    'as' => 'users'
  ]);

  Route::get('/user/create', [
    'uses' => 'App\Http\Controllers\UsersController@create',
    'as' => 'user.create'
  ]);

  Route::post('/user/store', [
    'uses' => 'App\Http\Controllers\UsersController@store',
    'as' => 'user.store'
  ]);

  Route::get('/user/admin/{id}', [
    'uses' => 'App\Http\Controllers\UsersController@admin',
    'as' => 'user.admin'
  ]);

  Route::get('/user/not-admin/{id}', [
    'uses' => 'App\Http\Controllers\UsersController@not_admin',
    'as' => 'user.not.admin'
  ]);

  Route::get('user/profile', [
    'uses' => 'App\Http\Controllers\ProfilesController@index',
    'as' => 'user.profile'
  ]);

  Route::get('user/delete/{id}', [
    'uses' => 'App\Http\Controllers\UsersController@destroy',
    'as' => 'user.delete'
  ]);

  Route::post('/user/profile/update', [
    'uses' => 'App\Http\Controllers\ProfilesController@update',
    'as' => 'user.profile.update'
  ]);

  Route::get('/settings', [
    'uses' => 'App\Http\Controllers\SettingsController@index',
    'as' => 'settings'
  ]);

  Route::post('/settings/update', [
    'uses' => 'App\Http\Controllers\SettingsController@update',
    'as' => 'settings.update'
  ]);

});
