<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo __NOMBRE__?></title>
	<meta charset="utf-8">
	<!-- Bootstrap core CSS -->
  	<link href="<?php echo __PATH__ ?>/include/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?php echo __PATH__ ?>/include/fontawesome/css/all.css" rel="stylesheet">
  	<link rel="icon" type="image/png" href="<?php echo __FAVICON__ ?>">
  	<?php
  		foreach (unserialize(__METAS__) as $value) {
  			echo "\t<meta name='{$value['name']}' content='{$value['content']}'>\n";
  		}
  	?>

  	<!-- Template style css --> 
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  	<link href="<?php echo __PATH__ ?>/vendor/techlab/smartwizard/dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />
  	<link href="<?php echo __PATH__ ?>/vendor/techlab/smartwizard/dist/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
  	<link href="<?php echo __PATH__ ?>/vendor/techlab/smartwizard/dist/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
  	<link href="<?php echo __PATH__ ?>/vendor/techlab/smartwizard/dist/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
  	<link href="<?php echo __PATH__ ?>/include/css/jcp.css" rel="stylesheet">
  	<link href="<?php echo __PATH__ ?>/themes/<?php echo $this->theme ?>/style.css" rel="stylesheet">
	<?php 
		include 'themes/'.$this->theme.'/head.php';
	?>
</head>
	<body>
		<?php 
			include_once $paththeme.'header.php';
			$this->route->pages();
			include_once $paththeme.'footer.php';
		?>

		<!-- Footer -->
		<footer class="page-footer font-small blue">
			<!-- Copyright -->
			<div class="footer-copyright text-center py-3"> <small><a href="https://jobtify-custom-package.site/">Jobtify Custom Package</a> © 2020  Powered by
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
		<!-- Modal -->
		
		<!-- Bootstrap core JavaScript -->
		<link href="<?php echo __PATH__ ?>/include/fontawesome/js/all.js" rel="stylesheet">
		<script src="<?php echo __PATH__ ?>/include/js/jquery.slim.min.js"></script>
		<script src="<?php echo __PATH__ ?>/include/js/popper.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="<?php echo __PATH__ ?>/include/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo __PATH__ ?>/vendor/techlab/smartwizard/dist/js/jquery.smartWizard.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
		<script src="<?php echo __PATH__ ?>/include/js/jcp.js"></script>
		<script src="<?php echo __PATH__ ?>/themes/<?php echo $this->theme ?>/js.js"></script>
	</body>
</html>