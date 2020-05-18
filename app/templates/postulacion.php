<?php 
	$resp = $this->candidato->postular($oferta_id);
 ?>

 <br><br>
<div class="container">
    <?php 

    	if($resp->response){
    		echo '<div class="alert alert-success" role="alert">
				  La postulación se realizó correctamente.
				</div>';
    	}else{
    		echo '<div class="alert alert-warning" role="alert">
				  '.$resp->message.'
				</div>';
    	}
     ?>
</div>

<br><br><br><br><br><br><br><br><br>