<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('about','HomeController@index');
Route::get('contact','ContactController@contact');
Route::get('edu','EduController@getInfo');
//route to create userr
Route::get('create-user','UserController@create');


//route to retrieve and display all user data
Route::get('show-all-user','UserController@showAllUser');

//route to retrieve and display selected user's data
Route::get('show-all-user/{id}','UserController@showSelectedUsers');
Route::get('show-all-user/{id}/delete','UserController@deleteUser');
// Route::get('test',function(){
//     return "Welcome to laravel course.";
// });
