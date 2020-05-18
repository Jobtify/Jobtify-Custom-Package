<?php 
	error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);
    ini_set('display_errors', 1);
	error_reporting(E_ALL);

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	require_once('config.php');
	require_once("app/auto_loader.php");
	require_once("vendor/autoload.php");

	use App\Controllers\API;

	/**
	 * Obtiene y lista los estados (Entidades fererativas) a través de ajax.
	 */
	if(isset($_POST['getEstados'])){
		$api = new API(__TOKEN__, __KEY__);
		echo json_encode($api->obtenerEstados());
	}
	/**
	 * Obtiene y lista los minicipios del estado seleccionado  a través de ajax
	 */
	if(isset($_POST['getMunicipios'])  &&  isset($_POST['entidad'])){
		$api = new API(__TOKEN__, __KEY__);
		echo json_encode($api->obtenerMunicipiosPorEstado($_POST['entidad']));
	}
	/**
	 * Obtiene y lista las localidades del municipio seleccionado  a través de ajax
	 */
	if(isset($_POST['getLocalidades'])  &&  isset($_POST['municipio'])){
		$api = new API(__TOKEN__, __KEY__);
		echo json_encode($api->obtenerLocalidadesPorMunicipio($_POST['municipio']));
	}
	/**
	 * Obtiene y lista los niveles de estudio a través de ajax
	 */
	if(isset($_POST['getNivelesEstudio'])){
		$api = new API(__TOKEN__, __KEY__);
		echo json_encode($api->obtenerNiveles());
	}
	/**
	 * Obtiene y lista las categorías de interés a través de ajax
	 */
	if(isset($_POST['getCategorias'])){
		$api = new API(__TOKEN__, __KEY__);
		echo json_encode($api->categorias());
	}

	/**
	 * Recibe los datos del candidato para crear la cuenta de candidato
	 */
	
	if(isset($_POST['datospersonales'])){
		$api = new API(__TOKEN__, __KEY__);
		//echo json_encode($api->categorias());
		$datos['personales'] = json_encode(array(
			"usuario" => $_POST["usuario"],
			"email" => $_POST["email"],
			"password" => $_POST["password"],
			"nombre" => $_POST["nombre"],
			"apellido1" => $_POST["apellido1"],
			"apellido2" => $_POST["apellido2"],
			"sexo" => $_POST["sexo"],
			"fnacimiento" => $_POST["fnacimiento"],
			"profesion" => $_POST["profesion"],
			"direccion" => $_POST["direccion"],
			"cp" => $_POST["cp"],
			"telefono" => $_POST["telefono"],
			"entidad" => $_POST["entidad"],
			"municipio" => $_POST["municipio"],
			"localidad" => $_POST["localidad"],
			"nivelestudios" => $_POST["nivelestudios"],
			"categoria" => $_POST["categoria"]
		));
		$datos['sobremi'] = $_POST['sobremi'];
		$datos['expenciencialab'] = json_encode(array(
			"experiencia1" => array(
				"empresa" => $_POST['empresa1'],
				"puesto" => $_POST['puesto1'],
				"inicio" => $_POST['inicio1'],
				"fin" => $_POST['fin1'],
				"descripcion" => $_POST['descripcion1']
				),
			"experiencia2" => array(
				"empresa" => $_POST['empresa2'],
				"puesto" => $_POST['puesto2'],
				"inicio" => $_POST['inicio2'],
				"fin" => $_POST['fin2'],
				"descripcion" => $_POST['descripcion2']
				),
			"experiencia3" => array(
				"empresa" => $_POST['empresa3'],
				"puesto" => $_POST['puesto3'],
				"inicio" => $_POST['inicio3'],
				"fin" => $_POST['fin3'],
				"descripcion" => $_POST['descripcion3']
				)
		));
		$datos['historialaca'] = json_encode(array(
			"historia1" => array(
				"institucion" => $_POST['institucioned1'],
				"curso" => $_POST['cursoed1'],
				"inicio" => $_POST['inicioed1'],
				"fin" => $_POST['fined1'],
				"descripcion" => $_POST['descripcioned1']
				),
			"historia2" => array(
				"institucion" => $_POST['institucioned2'],
				"curso" => $_POST['cursoed2'],
				"inicio" => $_POST['inicioed2'],
				"fin" => $_POST['fined2'],
				"descripcion" => $_POST['descripcioned2']
				),
			"historia3" => array(
				"institucion" => $_POST['institucioned3'],
				"curso" => $_POST['cursoed3'],
				"inicio" => $_POST['inicioed3'],
				"fin" => $_POST['fined3'],
				"descripcion" => $_POST['descripcioned3']
				)
		));
		$datos['infoadicional'] = $_POST['infoadicional'];

		$datos['cvpdf'] = $_FILES['cvpdf'];

		if(isset($_FILES['imgperfil'])){
			$datos['imgperfil'] = $_FILES['imgperfil'];
		}
			
		$resp = $api->crearCuenta($datos);

		if($resp->response){
			echo 1;
		}else{
			echo $resp->message.'<br><b>Por favor corrige el formulario.</b><br><hr> <b><i>Código de error:</i></b>'.json_encode((array)$resp->errors, JSON_UNESCAPED_UNICODE);
			;
		}
		
	}


 ?>