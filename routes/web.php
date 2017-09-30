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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/create-job', 'AdminJobController@createJob')->name('createJob');
    Route::post('/create-job', 'AdminJobController@saveJob')->name('saveJob');
    Route::get('/my-jobs', 'AdminJobController@myJobs')->name('myJobs');
    Route::get('/edit-job/{id}', 'AdminJobController@editJob')->name('editJob');
    Route::put('/edit-job/{id}', 'AdminJobController@updateJob')->name('updateJob');
    Route::delete('/delete-job/{id}', 'AdminJobController@deleteJob')->name('deleteJob');
});

Route::get('/home', 'HomeController@index')->name('home');

