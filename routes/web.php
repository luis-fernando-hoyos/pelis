<?php


Route::get('/', function () {
    return view('index');
});
Auth::routes();
Route::resource('peliculas' , 'PeliculasController');

