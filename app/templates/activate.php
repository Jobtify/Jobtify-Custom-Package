<br><br>
<div class="container">
<?php 

	$resp = $this->apiController->activarCuenta($token);
	if($resp->response){
		echo "<h3>¡Cuenta activada!</h3>
		<hr>
		<p>Tu cuenta fue activada correctamente. Inicia sesión y postúlate a todas las ofertas que cohincidan con tu perfil. <b>¡Mucho éxito!.</b></p>
		";
	}else{
		echo "<h3>Upsss!</h3><hr><p>{$resp->message}</p>";
	}

 ?>



    
    
    
</div>

<br><br><br><br><br><br><br><br><br>