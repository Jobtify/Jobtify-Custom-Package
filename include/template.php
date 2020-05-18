<?php
	/**
	 * Se requeire la configuración del sistema
	 */
	if(file_exists("config.php")){
		require_once "config.php";
	}else{
		header('Location: install.php');
	}
	

	/**
	 * Requiere los controladores y librerias de JCP
	 */
	require_once __DIR__.'/../app/auto_loader.php';
	/**
	 * Requiere las librerias de composer
	 */
	require_once __DIR__.'/../vendor/autoload.php';
	Use App\Controllers\JCP;
	$init = new JCP();
	$init->start();
?>
