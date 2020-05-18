<?php 

	namespace  App\Controllers;
	use App\Controllers\API;


	class Candidato{
		private $email;
		private $password;
		public $token;
		private $apiController;

		function __construct($apiController){
			if (session_status() == PHP_SESSION_NONE) {
			    session_start();
			}
			$this->apiController = $apiController;
		}

		public function login($email, $password){

			$resp = self::getTokenLogin($email,  $password, false);
			if(isset($resp->response) && $resp->response==true){
				$_SESSION['candidatologin'] = true;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				header('Location: '.__PATH__);
			}else{
				echo '<div class="alert alert-warning" role="alert">
					  '.$resp->message.'
					</div>';
			}
		}

		public function logout(){
			session_destroy();
			header('Location: '.__PATH__);
		}

		public function postular($idoferta){

			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				$resp = self::getTokenLogin($_SESSION['email'], $_SESSION['password'], true);
				if($resp != false){
					$resp = $this->apiController->postular($idoferta, $resp);
					return $resp;
				}else{
					header('Location: '.__PATH__.'/login');
				}
			}else{
				header('Location: '.__PATH__.'/login');
			}
		}


		public function detalles(){

			if(isset($_SESSION['email']) && isset($_SESSION['password'])){
				$resp = self::getTokenLogin($_SESSION['email'], $_SESSION['password'], true);
				if($resp != false){
					$resp = $this->apiController->detalles($resp);
					return $resp;
				}else{
					header('Location: '.__PATH__.'/login');
				}
			}else{
				header('Location: '.__PATH__.'/login');
			}
		}

		public function getTokenLogin($email, $pasword, $returnOnlyToken = true){
			$resp = $this->apiController->loginCuenta($email,  $pasword);
			if($returnOnlyToken){
				if(isset($resp->response) && $resp->response==true){
					return $resp->data->CANDIDATOTOKEN;
				}else{
					return false;
				}
			}else{
				return $resp;
			}
		}
	}

 ?>