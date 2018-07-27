<?php

Route::get('/','HomeController@index')->name('index');

	Route::get('aplicaciones-moviles','Paginas\AplicacionMovilController@index')
	->name('aplicacionesmoviles.index');

	Route::get('inteligencia-de-negocios','Paginas\InteligenciaNegocioController@index')
	->name('inteligencia.index');

	Route::get('comercio-electronico','Paginas\ComercioElectronicoController@index')
	->name('comercio.index');

	Route::get('sistema-de-informacion','Paginas\InteligenciaNegocioController@index')
	->name('sistema.index');

