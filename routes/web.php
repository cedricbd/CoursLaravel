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

/* Route::get('/', function(){
    return view('vue1');
});

Route::get('article/{n}', function($n) {
    return view('article', ['numero' =>$n]);
});

Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');
 */

/* 
 Route::get('users/action', function() {
     return view('users.action');
 })->name('action'); */

/* Route::get('users/action/{type}', function($type) {
    return view('users.action');
})->name('action'); */

/* Route::get('/', function() {
    return back();
}); */

/* Route::get('/', 'WelcomeController@index');

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+'); */


/* return view('article')->withNumero($n); */

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');

Route::get('contact', 'ContactController@create');
Route::post('contact','ContactController@store');