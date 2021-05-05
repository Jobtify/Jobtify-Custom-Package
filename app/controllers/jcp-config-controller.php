<?php 
	namespace  App\Controllers;


	class Config{
		/**
		 * Carpeta principal de instalación
		 * @var string
		 */
		private $path;
		/**
		 * Contiguracion del tema
		 * @var string
		 */
		public $theme;
		/**
		 * Metatags del sitio principal
		 * @var array
		 */
		public $metatags;
		/**
		 * Menu principal del sitio
		 * @var array
		 */
		public $menu;
		/**
		 * Lista blanca de páginas del sitio con su slash para acceder desde el controlador de rutas
		 * @var string
		 */
		public $pages;
		/**
		 * Logo del sitio
		 * @var string
		 */
		public $logo;
		/**
		 * Favicon del sitio web
		 * @var string
		 */
		public $favicon;
		/**
		 * Imagen de fondo de la vista de una vacante
		 * @var string
		 */
		public $vvacante;
		/**
		 * Token de acceso a la API para empresas de Jobtify
		 * @var string
		 */
		public $frameworks;
		/**
		 * Frameworks css para utilizar
		 * @var string
		 */

		public $token;
		/**
		 * Clave de acceso a la API para empresas de Jobtify
		 * @var string
		 */ 
		public $key;
		/**
		 * Objeto response
		 */

		private $response;

		public function __construct(){
			//var_dump(__FRAMEWORKS__);
			if(defined('__TEMPLATE__')){
				$this->theme = __TEMPLATE__;
			}else{
				echo "<p>Agrega la siguiente línea de código a tu archivo config.php: <br>
				<code>define('__TEMPLATE__', 'default');</code></p>";
			}

			if(defined('__METAS__')){
				$this->metatags = unserialize (__METAS__);
			}

			if(defined('__MENU__')){
				$this->menu = unserialize (__MENU__);
			}else{
				echo "<p>Agrega la siguiente línea de código a tu archivo config.php: <br>
				<code>define('__MENU__',serialize([array('NOMBRE' => 'text', 'URL'=> 'text')]));</code></p> ";
			}

			if(defined('__PAGES__')){
				$this->pages = unserialize (__PAGES__);
			}

			if(defined('__FAVICON__')){
				$this->favicon = __FAVICON__;
			}

			if(defined('__VVACANTE__')){
				$this->vvacante = __VVACANTE__;
			}

			if(defined('__FRAMEWORKS__')){
				$this->frameworks = __FRAMEWORKS__;
			}

			if(defined('__TOKEN__')){
				$this->token = __TOKEN__;
			}else{
				echo "<p>Agrega la siguiente línea de código a tu archivo config.php: <br>
				<code>define('__TOKEN__', 'TEXT', true);</p>";
			}

			if(defined('__KEY__')){
				$this->key = __KEY__;
			}else{
				echo "<p>Agrega la siguiente línea de código a tu archivo config.php: <br>
				<code>define('__KEY__', '321', true);</p>";
			}			

			//var_dump($this->frameworks);
		}
		/**
		 * Obtiene el valor  de una propidad existente de la clase
		 * @return property          string | false
		 */
		public function __get($property){
		    if(property_exists($this, $property)) {
		        return $this->$property;
		    }else{
		    	return false;
		    }
		}

		public function validation(){
			//var_dump($this->frameworks);
			if(
				($this->theme === "" || $this->theme === NULL) ||
				($this->menu === "" || $this->menu === NULL) ||
				($this->token === "" || $this->token === NULL) ||
				($this->frameworks === "" || $this->frameworks === NULL) ||
				($this->token === "" || $this->key === NULL)
			){
				return false;
			}else{
				return true;
			}
		}

		public function framework(){
			if ($this->frameworks === "bootstrap4"){
				include __PATH__.'/include/frameworks/bootstrap4/css/bootstrap.min.css';
			}
			elseif ($this->frameworks === "boostrap5"){
				include __PATH__.'/include/frameworks/bootstrap5/css/bootstrap.min.css';
			}
			elseif ($this->frameworks === "foundation6"){
				include __PATH__.'/include/frameworks/foundation6/css';
			}
			elseif ($this->frameworks === "uikit"){
				include __PATH__.'/include/frameworks/uikit/css';
			}
			elseif ($this->frameworks === "pureCss"){
				include __PATH__.'/include/frameworks/pureCss/css';
			}else{
				echo 'Ups! Algo anda mal';
			}

		}
	}

 ?>