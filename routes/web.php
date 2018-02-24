<?php

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

Route::get('/test', function () {
    return View::make('new_home');
});

Route::get('/test/charts', function()
{
	return View::make('mcharts');
});

Route::get('/test/tables', function()
{
	return View::make('table');
});

Route::get('/test/forms', function()
{
	return View::make('form');
});

Route::get('/test/grid', function()
{
	return View::make('grid');
});

Route::get('/test/buttons', function()
{
	return View::make('buttons');
});


Route::get('/test/icons', function()
{
	return View::make('icons');
});

Route::get('/test/panels', function()
{
	return View::make('panel');
});

Route::get('/test/typography', function()
{
	return View::make('typography');
});

Route::get('/test/notifications', function()
{
	return View::make('notifications');
});

Route::get('/test/blank', function()
{
	return View::make('blank');
});

Route::get('/test/login', function()
{
	return View::make('login');
});

Route::get('/test/documentation', function()
{
	return View::make('documentation');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/homes', 'HomeController@index')->name('homes');

    Route::get('/post/create', [
        'uses'  => 'PostsController@create',
        'as'    => 'post.create'
    ]);
    
    Route::post('/post/store', [
        'uses'  => 'PostsController@store',
        'as'    => 'post.store'
    ]);

    Route::get('/posts', [
        'uses'  => 'PostsController@index',
        'as'    => 'posts'
    ]);

    Route::get('/post/edit/{id}', [
        'uses'  => 'PostsController@edit',
        'as'    => 'post.edit'
    ]);

    Route::get('/post/delete/{id}', [
        'uses'  => 'PostsController@destroy',
        'as'    => 'post.delete'
    ]);

    Route::get('/post/kill/{id}', [
        'uses'  => 'PostsController@kill',
        'as'    => 'post.kill'
    ]);

    Route::get('/post/restore/{id}', [
        'uses'  => 'PostsController@restore',
        'as'    => 'post.restore'
    ]);

    Route::get('/post/trashed', [
        'uses'  => 'PostsController@trashed',
        'as'    => 'post.trashed'
    ]);

    Route::post('/post/update/{id}', [
        'uses'  => 'PostsController@update',
        'as'    => 'post.update'
    ]);
    
    Route::get('/category/create', [
        'uses'  => 'CategoriesController@create',
        'as'    => 'category.create'
    ]);
    
    Route::post('/category/store', [
        'uses'  => 'CategoriesController@store',
        'as'    => 'category.store'
    ]);

    Route::get('/categories', [
        'uses'  => 'CategoriesController@index',
        'as'    => 'categories'
    ]);

    Route::get('/category/edit/{id}', [
        'uses'  => 'CategoriesController@edit',
        'as'    => 'category.edit'
    ]);

    Route::get('/category/delete/{id}', [
        'uses'  => 'CategoriesController@destroy',
        'as'    => 'category.delete'
    ]);

    Route::post('/category/update/{id}', [
        'uses'  => 'CategoriesController@update',
        'as'    => 'category.update'
    ]);

    Route::get('/tag/create', [
        'uses'  => 'TagsController@create',
        'as'    => 'tag.create'
    ]);
    
    Route::post('/tag/store', [
        'uses'  => 'TagsController@store',
        'as'    => 'tag.store'
    ]);

    Route::get('/tags', [
        'uses'  => 'TagsController@index',
        'as'    => 'tags'
    ]);

    Route::get('/tag/edit/{id}', [
        'uses'  => 'TagsController@edit',
        'as'    => 'tag.edit'
    ]);

    Route::get('/tag/delete/{id}', [
        'uses'  => 'TagsController@destroy',
        'as'    => 'tag.delete'
    ]);

    Route::post('/tag/update/{id}', [
        'uses'  => 'TagsController@update',
        'as'    => 'tag.update'
    ]);


});
