<?php
	//error_reporting(E_ERROR | E_PARSE);
	/**
	 * Define la Zona horaria del servidor (Opcional)
	 */
	date_default_timezone_set('America/Mexico_City');
	
	/**
	 * Otras configuraciones principales del sitio (Requerido)
	 */

	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
	define('__DR__', ROOT_PATH.'jobtify-custom-package/');
	define('__PATH__', 'http://'.$_SERVER['SERVER_NAME'].'/jobtify-custom-package');



	/**
	 * Define el nombre de la empresa
	 */
	define('__NOMBRE__', "Jobtify Demo");
	/**
	 * Define el icono del sitio web (Opcional)
	 */
	define('__FAVICON__', "https://cdn.jobtify.com.mx/jobtify.com.mx/images/ico/icono.ico");
	/**
	 * Define el endpoint de la API a consultar
	 */
	define('__ENDPOINT__', "https://api.jobtify.com.mx/v1/");
	/**
	 * Define el token de acceo a la API (Obligatorio)
	 */
	define('__TOKEN__', 'cd1fac90feef9b58fa749fe67bd26056773489b3');
	/**
	 * Define la clave de acceso a la API (Obligatorio)
	 */
	define('__KEY__', 'pRitYG5nifDvc5yIQBI');
	/**
	 * Define el menú del sitio web (Opcional). Si el menú enlaza a una página nueva se deberá 
	 * definir la página en el siguiente bloque.
	 */
	define('__MENU__',serialize([
				array("NOMBRE" => "Inicio", "URL"=> "", "TARGET"=>"_self"),
				array("NOMBRE" => "Ofertas", "URL"=> "ofertas", "TARGET"=>"_self"),
				//array("NOMBRE" => "Nosotros", "URL"=> "nosotros", "TARGET"=>"_self"),
			])
		);
	/**
	 * Define las páginas del sitio. 
	 * Nota: Debe existir cada archivo dentro de la plantilla. 
	 * Por ejemplo, si definimos una página llamada "nosotros", el la carpeta del tema debe 
	 * crear el archivo nosotros.php
	 * Este bloque es totalmente independiente al bloque "__MENU__"
	 */

	define('__PAGES__', serialize([
				array("SLASH" => "ofertas", "ARCHIVO" => "ofertas"),
				array("SLASH" => "nosotros", "ARCHIVO" => "nosotros"),
				array("SLASH" => "Busqueda", "ARCHIVO" => "busquedaavanzada"),
				array("SLASH" => "terminos-y-condiciones-de-uso", "ARCHIVO" => "terminos"),
				array("SLASH" => "aviso-de-privacidad", "ARCHIVO" => "privacidad"),
				array("SLASH" => "info", "ARCHIVO" => "info"),
			])
		);
	/**
	 * Define el nombre de la plantilla a utiliar (Requerido)
	 */
	define('__TEMPLATE__', 'default');

	/*
	 * Define el framework que se va ha utilizar (Requerido) 
	   Por Default viene predefinido con bootstrap4 pero se pueden utilizar los siguientes -> bootstrap5, foundation6, pure css, uikit.
	*/
	define('__FRAMEWORKS__', 'bootstrap4');

	/**
	 * Define las meta tags del sitio (Opcional)
	 */
	define('__METAS__', serialize([
				array("name" => "description", "content"=>"Bolsa de empleo de Solid Solutions Development"),
				array("name" => "keywords", "content"=>"Bolsa de trabajo, recursos humanos, contratación, empleo, bolsa de empleo, trabajo, vacantes, ofertas, reclutamiento."),
				array("name" => "author", "content"=>"Solid Solutions Development"),
				array("name" => "viewport", "content"=>"width=device-width, initial-scale=1.0"),
				array("name" => "robots", "content"=>"index")
			])
		);
 ?>