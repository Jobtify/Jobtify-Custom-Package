<?php 

	namespace  App\Controllers;
	use App\Lib\Response;
	use App\Controllers\Route;
	use App\Controllers\API;


	class JCP extends Config{
		private $metatag;
		private $response;
		private $route;
		private $apiController;


		public function __construct(){
	        parent::__construct();
	        $this->response = new Response();
	       	$this->route = new Route();
	       	$this->apiController = new API($this->token, $this->key);
	    }

		public function start(){
			$resp = $this->validation();
			if($resp == false){
				header('Location: install.php');
			}else{
				self::generateHTML();
			}
		}

		private function generateHTML(){
			$paththeme =  __DR__.'themes/'.$this->theme.'/';
			$API = $this->apiController;
			include __DIR__.'/../templates/template.php';
			
			/*
			
			 echo '
				<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<title></title>
					<link rel="stylesheet" href="">
					<!-- Bootstrap core CSS -->
  					<link href="'.__PATH__.'/include/css/bootstrap.min.css" rel="stylesheet">
  					<link href="'.__PATH__.'/include/fontawesome/css/all.css" rel="stylesheet">

  					<!-- Template style css --> 
  					<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  					<link href="'
  					.__PATH__.'/vendor/techlab/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />
  					<link href="'
  					.__PATH__.'/vendor/techlab/smartwizard/dist/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />

  					<link href="'
  					.__PATH__.'/vendor/techlab/smartwizard/dist/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

  					<link href="'
  					.__PATH__.'/vendor/techlab/smartwizard/dist/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />

  					<link href="'.__PATH__.'/include/css/jcp.css" rel="stylesheet">
  					<link href="'.__PATH__.'/themes/'.$this->theme.'/style.css" rel="stylesheet">

	
  				';
  					
  				include 'themes/'.$this->theme.'/head.php';
				echo '</head>
				<body>
				<div class="loading d-none" id="loading"></div>';
						
				include_once $paththeme.'header.php';
				$this->route->pages();
				include_once $paththeme.'footer.php';
				echo '
					<!-- Footer -->
					<footer class="page-footer font-small blue">
					  <!-- Copyright -->
					  <div class="footer-copyright text-center py-3"> <small><a href="https://gitlab.com/jobtifymexicosas/jobtify-custom-package">JCP</a> © 2020  Powered by
					    <a href="https://empresas.jobtify.com.mx/"> Jobtify México S.A.S</a> </small>
					  </div>
					  <!-- Copyright -->

					</footer>
					<!-- Footer -->


					<!-- Modal -->
					<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="modal-title">Mensaje</h5>

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body" id="modal-body">
					        ...
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      </div>
					    </div>
					  </div>
					</div>


					<!-- Bootstrap core JavaScript -->

					<link href="'.__PATH__.'/include/fontawesome/js/all.js" rel="stylesheet">
					<script src="'.__PATH__.'/include/js/jquery.slim.min.js"></script>

					<script src="'.__PATH__.'/include/js/popper.min.js"></script>

					<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

					<script src="'.__PATH__.'/include/js/bootstrap.bundle.min.js"></script>
					


					<script type="text/javascript" src="'
  					.__PATH__.'/vendor/techlab/smartwizard/dist/js/jquery.smartWizard.min.js"></script>
  					<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


					<script src="'.__PATH__.'/include/js/jcp.js"></script>
					<script src="'.__PATH__.'/themes/'.$this->theme.'/js.js"></script>
				</body>
				</html> ';

			*/
			
		}

		private function printHTML($resource, $tag, $class=null, $id=null){
			switch ($tag) {
				case 'p':
					echo "<p class={$class} id={$id}>{$resource}<p>";
					break;
				case 'img':
					echo "<img src= {$resource}  class={$class} id={$id}>";
					break;

				case 'li':
					$menu = "";
					
					if(isset($_SESSION['candidatologin'])){
						foreach ($resource as $value =>$key) {
							$menu = $menu.'<li class="nav-item '.$class.'" id="'.$id.'"><a class="nav-link" href="'.__PATH__.'/'.$key['URL'].'"';
							if(isset($key['TARGET']) && $key['TARGET']!="_self" ){
								$menu = $menu.'target="'.$key['TARGET'].'"';
							}
							$menu = $menu.'>'.$key['NOMBRE'].'<span class="sr-only">(current)</span></a></li>';
						}

						echo $menu.'<li class="nav-item"><a class="nav-link" href="'.__PATH__.'/panel">Panel</a></li>
							<li class="nav-item"><a class="nav-link" href="'.__PATH__.'/logout">Salir</a></li>';
					}else{
						foreach ($resource as $value =>$key) {
							$menu = $menu.'<li class="nav-item '.$class.'" id="'.$id.'"><a class="nav-link" href="'.__PATH__.'/'.$key['URL'].'"';
							if(isset($key['TARGET']) && $key['TARGET']!="_self" ){
								$menu = $menu.'target="'.$key['TARGET'].'"';
							}
							$menu = $menu.'>'.$key['NOMBRE'].'<span class="sr-only">(current)</span></a></li>';
						}
						echo $menu.'<li class="nav-item"><a class="nav-link" href="'.__PATH__.'/crear-cuenta">Crear cuenta</a></li>
							<li class="nav-item"><a class="nav-link" href="'.__PATH__.'/login">Entrar</a></li>';
					}
					
					break;
				
				default:
					// code...
					break;
			}
		}
	}

 ?>