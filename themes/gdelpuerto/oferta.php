
<br>
<?php 
	$resp = $this->apiController->obtenerPorId($oferta_id);
	if($resp->response==true){
 ?>
	
<div class="container w-50 p-3 border rounded oferta-descripcion">
	<h2><?php echo $resp->data->oferta_titulo ?></h2>
	<p>Salario: <?php echo $resp->data->oferta_salario ?></p>
	<p>Jornada laboral: <?php echo $resp->data->oferta_contrato ?></p>
	<p>Ubicación: <?php echo $resp->data->oferta_nombrelocalidad.', '.$resp->data->oferta_nombremunicipio.', '.$resp->data->oferta_nombreestado.'.'; ?></p>
	<hr>
	<?php echo html_entity_decode($resp->data->oferta_descripcion) ?>
	
	
	<?php if( $resp->data->oferta_mapa != NULL){ ?>
		<p>Mapa:</p>
		<div class="map-responsive">
			<?php echo $resp->data->oferta_mapa ?>
		</div>
	<?php
	    }
	?>
	
	
	
	<br><br>
	<a href="<?php echo __PATH__.'/oferta/postular/'.$resp->data->oferta_id ?>"><button type="button" class="btn btn-success">Postular ahora</button></a>
	<br><br>
</div>

<?php 
	}else{
?>

<div class="container w-50 border rounded oferta-descripcion">
	Oferta no válida.

</div>
<br><br>
<?php
	}
 ?>