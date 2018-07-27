<?php

Route::get('/','HomeController@index')->name('index');

/*Route::group(['namespace'=>'Paginas'], function() {
	Route::get('aplicaciones-moviles','AplicacionMovilController@index')
	->name('aplicacionesmoviles.index');

	Route::get('inteligencia-de-negocios','InteligenciaNegocioController@index')
	->name('inteligencia.index');

	Route::get('comercio-electronico','ComercioElectronicoController@index')
	->name('comercio.index');

	Route::get('sistema-de-informacion','InteligenciaNegocioController@index')
	->name('sistema.index');
});*/

