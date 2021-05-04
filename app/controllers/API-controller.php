<?php 
namespace  App\Controllers;
	use App\Lib\Response;
	use Curl;

	class API{
		private $url = __ENDPOINT__; 
		private $API;
		private $KEY;
		public $TOKEN;
		private $curl;

		public function __construct($API, $KEY){
			$this->API = $API;
			$this->KEY = $KEY;
			$this->curl = new Curl\Curl();
			$this->TOKEN = self::auth();
		}

		/**
		 * Metodo principal que optimiza y permite la comunicacion con la API
		 * y los diversos metodos que hay en el archivo
		 * @autor Neftali
		 * @version 2.0 
		 * @access public
		 * @param string $recurso es el url
		 				 $metodo define el metodo de peticion
		 				 $encode define...
		 				 $auth define la autenticacion si sera usada o no
		 				 $postfield define el que postfile que espera el servicio api(opcional)
		 * @return $response
		 */
		public function curl($recurso, $metodo, $encode=true, $auth=false, $postfield=""){
			$cookie = __DR__."cookie.txt";
			if($auth){
				$parametros = "APP-TOKEN: {$this->TOKEN}";
			}else{
				$parametros = "";
			}
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url.$recurso,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => $metodo,
			  CURLOPT_POSTFIELDS => $postfield,
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}",
			  ),
			));

			$response = curl_exec($curl);
			curl_close($curl);
			if($encode){
				return json_decode($response);
			}else{
				return $response;
			}
			
		}
		 /**
		 * Metodo para la autenticacion de la empresa con el API
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json el token de la API
		 */
		public function auth(){
			$response = self::curl(
				"autenticar/empresa",
				"POST",
				true,
				true,
				"API=".$this->API."&API-KEY=".$this->KEY
			);

			if(isset($response->data->TOKEN)){
				return $response->data->TOKEN;
			}else{
				return NULL;
			}
		}

		/**
		 * Metodo para la obtencion de las ofertas disponibles
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json Respuesta de la API con toda la información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function obtenerTodas(){
			$response =  self::curl(
				"oferta/obtener",
				"GET",
				true,
				false
			);
			return $response;
		}

		/**
		 * Metodo para Listar los detalles de una oferta en específico
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function obtenerPorId($id){
			$response =  self::curl(
				"oferta/obtener/{$id}",
				"GET",
				true,
				false
			);
			return $response;
		}

		/**
		 * Metodo para Identificar los estados(Entidades federativas) disponibles
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function obtenerEstados(){
			$response =  self::curl(
				"locations/estados",
				"GET",
				false,
				false
			);
			return $response->data;	
		}

		/**
		 * Metodo para Obtener los municipios disponibles de un estado determinado.
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function obtenerMunicipiosPorEstado($idestado){
			$response =  self::curl(
				"locations/municipios/estado/{$idestado}",
				"GET",
				false,
				false
			);
			return $response->data;					
		}

		/**
		 * Metodo para Obtener las localidades disponibles de un municipio determinado
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */

		function obtenerLocalidadesPorMunicipio($idmunicipio){
			$response =  self::curl(
				"locations/localidades/municipio/{$idmunicipio}",
				"GET",
				false,
				false
			);
			return $response->data;	
		}

		/**
		 * Metodo para Obtener los niveles academico del candidato
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function obtenerNiveles(){
			$response =  self::curl(
				"candidato/nivelestudio",
				"GET",
				false,
				false
			);
			return $response->data;	
		}

		/**
		 * Metodo para Listar todas las categorías del sistema
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function categorias(){
			$response =  self::curl(
				"candidato/categorias",
				"GET",
				false,
				false
			);
			return $response->data;	
		}

		/**
		 * Metodo para dar acceso a la cuenta del candidato
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function loginCuenta($email, $password){
			$response =  self::curl(
				"candidato/login",
				"POST",
				true,
				false,
				"candidato_email=".$email."&candidato_password=".$password
			);
			return $response;	
		}

		/**
		 * Metodo para crear una cuenta para el candidato
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function crearCuenta($data){
			$response =  self::curl(
				"candidato/crear",
				"POST",
				true,
				false,
				"user-dp=".$data['personales'].'&user-sm='.$data['sobremi'].'&user-el='.$data['expenciencialab']."&user-ha=".$data['historialaca']."&user-ic=".$data['infoadicional']."&url=".__PATH__
			);
			return $response;
		}

		/**
		 * Metodo para activar la cuenta de candidato
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function activarCuenta($data){
			$response =  self::curl(
				"candidato/activar/".$data,
				"GET",
				true,
				false
			);
			return $response;	
		}

		/**
		 * Metodo para postularse a una vacante
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function postular($idoferta, $token){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/postular/".$idoferta,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}",
			    "CANDIDATO-TOKEN: {$token}"
			  ),
			));

			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;	
		}

		/**
		 * Metodo detalles del candidato (*)
		 * @autor Neftali
		 * @version 2.0
		 * @access public
		 * @return json respueta de la API con toda la Información
		 * https://documenter.getpostman.com/view/9923523/SWLbBA8F#a96b53a2-134d-433c-ba15-26013864ace5
		 */
		function detalles($token){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/detalles",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}",
			    "CANDIDATO-TOKEN: {$token}"
			  ),
			));
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;	
		}
	}
?>