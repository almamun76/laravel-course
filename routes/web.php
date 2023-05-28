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
// Route::view('/', 'welcome');

//route group start
Route::prefix("admin")->group(function(){
    Route::get('/hello', function () {
        return 'Hello....';
    });

    Route::get('/world', function () {
        return 'World....';
    });
});
//route group end

//route to show all users record
Route::get('/users','UserController@index');

//post start (insert data)
Route::get('/user-form','UserController@formSubmit');
Route::post('/add-user','UserController@store');
//post end

//put start (update all columns of a table)
Route::get('/user-form-update','UserController@formUpdate');
Route::put('/update-user','UserController@update');
//put end

//patch start (update few columns of a table)
Route::get('/user-form-update','UserController@formUpdate');
Route::patch('/update-user-name','UserController@updateName');
//patch end

//delete start (delete record)
Route::get('/user-form-update','UserController@formUpdate');
Route::delete('/delete-user','UserController@delete');
//delete end

//pass single parameter
Route::get('/users/{id}','UserController@showUserId');

//pass multiple parameter
// Route::get('/users/{id}/{email}','UserController@showUserIdMail');

//pass optional parameter
Route::get('/users/{id}/profile/{name?}','UserController@showUserIdName');