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
	     $x=$x+2;
		 echo $x;
	  } 
	  $a= 3;
	  teste($a); 
	  echo $a;
    ?>
</div>
</body>
</html>  