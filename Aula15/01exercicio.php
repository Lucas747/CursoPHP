<!doctype html>
<html> 
<head>
   <meta charset="utf-8"/>
   <link rel="stylesheet" href="_css/estilo.css"/>
   <title>Curso de PHP</title>	
</head>
<body>
<div>
   <?php
      function teste(&$x){
	     $x = $x+2;
		 echo "<p> valor de x e $x</p>";
	  } 
	  $a= 3;
	  teste($a); 
		echo "<p>O valor de A e $a</p>"
	?>	
</div>
</body>
</html>  