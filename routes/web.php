<?php
//inicio
Route::get('/', 'IndexController@index')->name('index_index');
Route::get('/inicio1', 'IndexController@index1')->name('index_index1');
Route::get('/inicio2', 'IndexController@index2')->name('index_index2');
Route::get('/inicio3', 'IndexController@index3')->name('index_index3');
Route::get('/tablas', 'IndexController@tablas')->name('index_tablas');
Route::get('/formulario', 'IndexController@formulario')->name('index_formulario');
Route::get('/ordenes-de-despacho-modal-dte/{id?}', 'IndexController@modal_dte')->name('ordenes_de_despacho_modal_dte');
//Acceso
Route::get('login', 'AccesoController@login')->name('acceso_login');
Route::get('login1', 'AccesoController@login1')->name('acceso_login1');
Route::get('login2', 'AccesoController@login2')->name('acceso_login2');
Route::post('login_post', 'AccesoController@login_post')->name('acceso_login_post');
Route::get('salir', 'AccesoController@salir')->name('acceso_salir');

//Soporte
Route::get('soporte', 'SoporteController@index')->name('soporte_index');
Route::post('soporte', 'SoporteController@index_post')->name('soporte_index_post');
Route::get('soporte-no-puedo-entrar', 'SoporteController@no_puedo_entrar')->name('soporte_no_puedo_entrar');

//API1
//Route::post('api1-get', 'Api1Controller@get')->name('api1_get');
