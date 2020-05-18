<?php 
	
	namespace  App\Controllers;
	use Buki\Router;
	use App\Controllers\API, 
		App\Controllers\Candidato;


	class Route{
		private $route;
		private $config;
		public $archivo;
		private $apiController;
		private $candidato;



		public function __construct(){
			$this->route = new Router();
			$this->config = new Config();
			$this->apiController = new API($this->config->token, $this->config->key);
			$this->candidato = new Candidato($this->apiController);
		}


		public function pages(){
			/**
			 * Establece la ubicación actual
			 */
			$url = $_SERVER["REQUEST_URI"];
			$keys = parse_url($url); // parse the url
			$path = explode("/", $keys['path']); // splitting the path
			$last = end($path); // get the value of the last element
			$bandera = false;
			/**
			 * Rutas predeterminadas del sistema
			 */
			$this->route->get('/', function() {
			    include_once 'themes/'.$this->config->theme.'/home.php';
			});
			$this->route->get('/home', function() {
			    include_once 'themes/'.$this->config->theme.'/home.php';
			});
			$this->route->get('/inicio', function() {
			    include_once 'themes/'.$this->config->theme.'/home.php';
			});
			$this->route->get('/search/{a}', function($value) {
			    include_once 'themes/'.$this->config->theme.'/busqueda.php';
			});
			$this->route->get('/oferta/{s}', function($oferta_id) {
			    include_once 'themes/'.$this->config->theme.'/oferta.php';
			});
			$this->route->get('/oferta/postular/{s}', function($oferta_id) {
			    if(file_exists('themes/'.$this->config->theme.'/postulacion.php')){
					include_once 'themes/'.$this->config->theme.'/postulacion.php';
				}else{
					include_once 'app/templates/postulacion.php';
				}
			});

			$this->route->get('/activar/{s}', function($token) {
				if(file_exists('themes/'.$this->config->theme.'/activate.php')){
					include_once 'themes/'.$this->config->theme.'/activate.php';
				}else{
					include_once 'app/templates/activate.php';
				}
			});
			$this->route->any('/crear-cuenta', function() {
				if(file_exists('themes/'.$this->config->theme.'/singin.php')){
					include_once 'themes/'.$this->config->theme.'/singin.php';
				}else{
					include_once 'app/templates/singin.php';
				}	
			});
			$this->route->any('login', function() {
				if(file_exists('themes/'.$this->config->theme.'/login.php')){
					include_once 'themes/'.$this->config->theme.'/login.php';
				}else{
					include_once 'app/templates/login.php';
				}	
			});

			$this->route->any('logout', function() {
				if(file_exists('themes/'.$this->config->theme.'/logout.php')){
					include_once 'themes/'.$this->config->theme.'/logout.php';
				}else{
					include_once 'app/templates/logout.php';
				}	
			});

			$this->route->any('/panel', function() {
			    if(file_exists('themes/'.$this->config->theme.'/panel.php')){
					include_once 'themes/'.$this->config->theme.'/panel.php';
				}else{
					include_once 'app/templates/panel.php';
				}
			});
			

			$this->route->ajax('estados', function(){
				echo $this->apiController->obtenerEstados();
			});
			$this->route->get('thanks', function() {
				if(file_exists('themes/'.$this->config->theme.'/thanks.php')){
					include_once 'themes/'.$this->config->theme.'/thanks.php';
				}else{
					include_once 'app/templates/thanks.php';
				}
			    
			});

			$this->route->get('/adminpanel', function(){
				
				echo '<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://empresas.jobtify.com.mx/login" allowfullscreen></iframe>
					</div>';
			});



			/**
			 * Rutas establecidas desde config.php
			 */
			$bandera = false;
			$archivo = "";
			foreach ($this->config->pages as $value => $key) {
				if($key['SLASH']===$last){
					$this->archivo = $key['ARCHIVO'];
					$bandera = true;
				}	
			}
			if($bandera){
				$this->route->get('/{u?}', function($page = 'home'){
				  include_once 'themes/'.$this->config->theme.'/'.$this->archivo.'.php';
				});
			}
			$this->route->error(function() {
			    include_once 'themes/'.$this->config->theme.'/404.php';
			});

			$this->route->run();
		}

		function getter($url) {
		    $ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url);
		    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_HEADER, 0);
		    $data = curl_exec($ch);
		    curl_close($ch);
		    return $data;
		}
	}



 ?>