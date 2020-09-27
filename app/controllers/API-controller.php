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

		public function auth(){
			$curl = curl_init();
			$cookie = __DR__."cookie.txt";


			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."autenticar/empresa",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_COOKIEJAR => $cookie,
			  CURLOPT_POSTFIELDS => "API=".$this->API."&API-KEY=".$this->KEY,
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded"
			  ),
			));

			$response = json_decode(curl_exec($curl));
			curl_close($curl);

			if(isset($response->data->TOKEN)){
				return $response->data->TOKEN;
			}else{
				return NULL;
			}
		}

		function obtenerTodas(){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."oferta/obtener",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			  	"Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			//$response = curl_exec($curl);

			//$response =  htmlentities(curl_exec($curl));
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;
			
		}

		function obtenerPorId($id){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."oferta/obtener/{$id}",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response = curl_exec($curl);

			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;	
		}

		function obtenerEstados(){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."locations/estados",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response = curl_exec($curl);
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response->data;	
		}

		function obtenerMunicipiosPorEstado($idestado){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."locations/municipios/estado/{$idestado}",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response = curl_exec($curl);
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response->data;	
		}

		function obtenerLocalidadesPorMunicipio($idmunicipio){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."locations/localidades/municipio/{$idmunicipio}",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response = curl_exec($curl);
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response->data;	
		}

		function obtenerNiveles(){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/nivelestudio",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response = curl_exec($curl);
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response->data;	
		}

		function categorias(){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/categorias",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response = curl_exec($curl);
			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response->data;	
		}

		function loginCuenta($email, $password){
			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/login",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "candidato_email=".$email."&candidato_password=".$password,
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;	
		}



		function crearCuenta($data){

			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/crear",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "user-dp=".$data['personales'].'&user-sm='.$data['sobremi'].'&user-el='.$data['expenciencialab']."&user-ha=".$data['historialaca']."&user-ic=".$data['infoadicional']."&url=".__PATH__,
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;	
		}




		function activarCuenta($data){

			$cookie = __DR__."cookie.txt";
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => $this->url."candidato/activar/".$data,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_COOKIEFILE => $cookie,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "Content-Type: application/x-www-form-urlencoded",
			    "APP-TOKEN: {$this->TOKEN}"
			  ),
			));

			$response =  json_decode(curl_exec($curl));
			curl_close($curl);
			
			return $response;	
		}

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