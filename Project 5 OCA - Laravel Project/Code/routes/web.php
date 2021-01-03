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
Route::get('/', 'PostsController@home');

//Admin group

Route::get('/admin/login/show', 'Auth\AdminLoginController@showAdminLogin');
Route::post('/admin/login/submit', 'Auth\AdminLoginController@login');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => ['admin_auth']], function () {
    Route::get('index', 'AdminsController@totalViews');
    // Manage Admin Routes
    Route::get('manageadmin', 'AdminsController@index');
    Route::post('manageadmin/store', 'AdminsController@store');
    Route::get('manageadmin/{id}/delete', 'AdminsController@destroy');
    Route::get('manageadmin/{id}/edit', 'AdminsController@edit');
    Route::post('manageadmin/{id}/update', 'AdminsController@update');

    //Dashboard Manage Categories Routes
    Route::get('categories/{id}', 'CategoriesController@destroy');
    Route::get('edit/{id}', 'CategoriesController@updateView')->name('admin.edit');
    Route::post('edit/{id}', 'CategoriesController@update')->name('admin.edit.submit');
    Route::post('categories', 'CategoriesController@store');
    Route::get('categories', 'CategoriesController@create');

    // Dashboard Manage Users Routes
    Route::get('manage_users', 'UsersController@index');
    Route::get('user_delete/{id}', 'UsersController@destroy');

    // Dashboard Manage Posts Routes
    Route::get('manage_posts', 'PostsController@index');
    Route::get('post_delete/{id}', 'PostsController@destroy');
});
//End admin group


///////////////////////////////////// Public Site /////////////////////////////////////////
Route::group(['middleware' => ['auth']], function () {
    Route::get('/submit-recipe', 'PostsController@show');
    Route::post('/create_post', 'PostsController@create');
    Route::get('/user/{id}', 'UsersController@edit');
    Route::get('/my_account/{id}', 'UsersController@showSingleUser');
    Route::post('/user/{id}/update', 'UsersController@update');
});

Auth::routes();
Route::get('/categories', 'CategoriesController@CategoriesCreate');
Route::get('/recipes/{id}', 'CategoriesController@ShowRecipes');
Route::get('/recipe/single/{id}', 'PostsController@SingleRecipes');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/author/{id}', 'UsersController@show');
Route::get('/author/{id}/follow', 'FollowersController@followUser')->middleware('auth');
Route::get('/author/{id}/unFollow', 'FollowersController@unFollowUser')->middleware('auth');
//Route::get('/author/{id}/followers', 'FollowersController@show')->middleware('auth');

Route::get('/about', function () {
    return view('public.about-us');
});
Route::get('/like/{id}', 'PostLikeController@store');
Route::get('/like/delete/{id}', 'PostLikeController@destroy');
Route::get('/like/delete/{id}', 'PostLikeController@destroy');
