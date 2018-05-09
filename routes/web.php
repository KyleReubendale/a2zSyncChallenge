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


Route::get('/login', function(){
    return view('login');

});

Auth::routes();

Route::get('/home', function(){
  $movies = DB::table('movies')
  ->orderBy('Release_Year', 'desc')
  ->get();

return view('home', compact('movies'));
}, 'HomeController@index')->name('home', compact('movies'));

Route::get('/json', function(){
  $movies = DB::table('movies')->get();
  return $movies;
});
