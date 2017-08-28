<?php


Route::get('/', function () {
    return view('index');
});
Auth::routes();
Route::resource('peliculas' , 'PeliculasController');
Route::post('peliculas/store', 'PeliculasController@store');


