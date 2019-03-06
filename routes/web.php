<?php

Route::get('/', 'IndexController@index')->name('index_index');

//Acceso
Route::get('login', 'AccesoController@login')->name('acceso_login');
Route::post('login_post', 'AccesoController@login_post')->name('acceso_login_post');
Route::get('salir', 'AccesoController@salir')->name('acceso_salir');