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

Route::get('/hola-mundo', function () {
    //Eloquent
    $user = \App\User::all();
    //Query Builder
    $user1= \DB::table('users')->get();

    return response()->json($user1);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-job', 'AdminJobController@createJob');

Route::post('/create-job', 'AdminJobController@saveJob')->name('saveJob');

Route::get('/my-jobs', 'AdminJobController@myJobs')->name('myJobs');