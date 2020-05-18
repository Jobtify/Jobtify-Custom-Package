<br>
<div class="container">
	<h2 class="text-center">Forma parte de nuestro equipo de trabajo</h2>
	<h5 class="text-center">Estas son las ofertas que tenemos disponibles para ti.</h5>
</div>

<?php 
	$oferta = $this->apiController->obtenerTodas();

	foreach ($oferta->data as $value => $key) {
?>



<div class="container w-50 border rounded">
	<p><a href="oferta/<?php echo $key->oferta_id ?>"><?php echo $key->oferta_titulo ?></a></p>
	<p><b><?php echo $key->oferta_salario ?></b></p>
	<p><?php echo $key->oferta_funciones ?></p>
	<p><i class="fas fa-map-marker-alt"></i><?php echo $key->oferta_nombrelocalidad.', '.$key->oferta_nombremunicipio.', '.$key->oferta_nombreestado.'.' ?></p>
</div>
<br>

<?php
		
	}
?>