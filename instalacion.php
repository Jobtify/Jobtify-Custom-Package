
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Instalación JCP</title>
	<style>
		h2{
			text-align: center;
		}
		.logo{
			display:block;
			margin:auto;
		}
		.center {
			border: 5px solid #20509e;
			text-align: center;
		}
		.center .wrapper ul {
	        display: inline-block;
	        margin: 0;
	        padding: 0;
	        /* For IE, the outcast */
	        zoom:1;
	        *display: inline;
	    }
	    .center .wrapper li {
	        float: left;
	        padding: 2px 5px;
	        border: 1px solid black;
	    }
	</style>	
</head>
<body>
	<h2>Instalación de Jobtify Custom Package</h2>
	<img src="https://jobtify-custom-package.site/resources/img/jcp-logo.png" class="logo">
	<div class="center">
		<ul>
		<?php 
		function imprimirMensaje($text){
			echo "<li>{$text}</li>";
		}
		function removeDirectory($path){
		    $files = glob(preg_replace('/(\*|\?|\[)/', '[$1]', $path).'/{,.}*', GLOB_BRACE);
		    foreach ($files as $file){
		        if ($file == $path.'/.' || $file == $path.'/..') { continue; } // skip special dir entries
		        is_dir($file) ? removeDirectory($file) : unlink($file);
		    }
		    rmdir($path);
		    return;
		}




		function custom_copy($src, $dst){
		    // open the source directory
		    $dir = opendir($src); 

		    // $trimmed=trim($dir, " ");
		  
		    // Make the destination directory if not exist
		    @mkdir($dst); 
		  
		    // Loop through the files in source directory
		    while( $file = readdir($dir)){ 
		  
		        if(( $file != '.' ) && ( $file != '..' )){ 
		            if ( is_dir($src . '/' . $file) ) 
		            { 
		  
		                // Recursively calling custom copy function
		                // for sub directory 
		                custom_copy($src . '/' . $file, $dst . '/' . $file); 
		  
		            } 
		            else { 
		                copy($src . '/' . $file, $dst . '/' . $file); 
		            } 
		        } 
		    } 
		  
		    closedir($dir);
		}



		imprimirMensaje("Obteniendo archivos del repositorio oficial...");

		$file = 'https://github.com/Jobtify/Jobtify-Custom-Package/archive/refs/heads/master.zip';
		$newfile = 'tmp_file.zip';
		if(!copy($file, $newfile)){
			imprimirMensaje("Ocurrió un problemal al copiar los archivos del repositorio...");
		}
		imprimirMensaje("Los archivos se descargaron correctamente...");
		$zip = new ZipArchive;
		if($zip->open($newfile) === TRUE){
			$zip->extractTo(getcwd());
			$zip->close();
			imprimirMensaje("El sistema se descomprimió correctamente...");
		} else{
			imprimirMensaje("Ocurrió un problema al descomprimir el sistema en el servidor...");
		}
		
		
		imprimirMensaje("<b>Moviendo archivos de ubicación...</b>");

		custom_copy(
			getcwd().'\Jobtify-Custom-Package-master',
			getcwd()
		);

		//Proceso de copiado de archivos a carpeta raíz.
		imprimirMensaje("Eliminando archivos temporales...");
		removeDirectory(getcwd().'\Jobtify-Custom-Package-master');
		unlink(getcwd().'/'.$newfile);
		//unlink(getcwd().'/instalacion.php');
		
		imprimirMensaje("<b>La instlación se realizó correctamente.</b>");
		// header("refresh:2;url="."http://localhost/testinstalljcp");



	$repos = array('Azul-Carmesi-Template','Jupiter-Template','Blue-Bird-Template','Fall-Template');

		for($i=0; $i<sizeof($repos); $i++){ 

			imprimirMensaje("Obteniendo archivos de los repositorios de las plantillas ...");

			 $file = "https://github.com/Jobtify/"."$repos[$i]"."/archive/refs/heads/main.zip";
			$newfile = "theme_file.zip";

			if(!copy($file, $newfile)){
			imprimirMensaje("Ocurrió un problemal al copiar los archivos del repositorio...");
			}
			imprimirMensaje("Los archivos se descargaron correctamente...");
			$zip = new ZipArchive;
			if($zip->open($newfile) === TRUE){
			$zip->extractTo(getcwd().'\themes');
			$zip->close();
			imprimirMensaje("El sistema se descomprimió correctamente...");
			} else{
			imprimirMensaje("Ocurrió un problema al descomprimir el sistema en el servidor...");
			}
		
		unlink('theme_file.zip');
		imprimirMensaje("<b>La instlación se realizó correctamente.</b>");

		}

		



		?>
		<ul>
	</div>
</body>
</html>
