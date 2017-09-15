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
Route::Group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/movies', 'moviesController@MoviesList');
    Route::get('/movies/addmovies', 'moviesController@addNewMovies');
    Route::post('/movies', 'moviesController@storingMovies');
    Route::get('/movies/details/{fetchingmovies}', 'moviesController@moviesDetails');
    Route::get('/movies/{editmovies}', 'moviesController@editMovies');
    Route::put('/movies/{updateMovies}', 'moviesController@updateMovies');
    Route::delete('/movies/{deleteMovies}', 'moviesController@deleteMovies');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
