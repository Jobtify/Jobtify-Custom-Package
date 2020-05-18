<?php 
	//Se define la ruta de la carpeta de librerías
	$base = __DIR__.'/../app/';

	//Se definel los folders a incluir de manera autómática
	$folders = [
		'controllers',
		'libs'
	];
	//Inclusión automática de los ficheros
	foreach ($folders as $f) {
		foreach (glob($base . "$f/*.php") as $k => $archivo) {
			require_once $archivo;
		}
	}
