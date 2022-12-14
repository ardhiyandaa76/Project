<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SettingsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact', 'App\Http\Controllers\SitePagesController@contact');

Route::get('about', 'App\Http\Controllers\SitePagesController@about');

Auth::routes();
Route::get('/', 'App\Http\Controllers\SitePagesController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('posts', 'App\Http\Controllers\PostController');


    Route::resource('comments', 'CommentsController');



    Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);

    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);

    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);


    Route::put('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);


    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);


    Route::resource('categories', 'App\Http\Controllers\CategoryController', ['except' => ['create']]);
});

Route::get('blog/{slug}', ['as' => 'blog.comment', 'uses' => 'BlogController@comment']);


Route::get('blog', ['uses' => 'BlogController@index', 'as' => 'blog.index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::resource('tags', 'App\Http\Controllers\TagController', ['except' => ['create']]);




Route::post('contact', 'SitePagesController@makecontact');
