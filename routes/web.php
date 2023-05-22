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
// Route::get('test',function(){
//     return "Welcome to laravel course.";
// });
