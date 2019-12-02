<!doctype html>
 
<html> 
<head>
    <?php
      $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
	  $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
	  $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";  
 ?>
    
	<link rel="stylesheet" href="_css/estilo.css"/>
    <title>Curso de PHP</title>
    <style>
        span.texto 
		{
			 font-size: <?php echo $tam; ?>;
			 color: <?php echo $cor; ?>;
	    }
	</style>    	
</head>
<body>
<div>
<span class="texto">
   <?php echo $txt ?>
</div>   
</body>
</html>  