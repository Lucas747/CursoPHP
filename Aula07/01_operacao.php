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
       $n1 = $_GET["a"];
	   $n2 = $_GET["b"];
       $tipo = $_GET ["op"];
	   echo "Os valores passados foram $n1 e $n2 <br/>";
	   $r =($tipo == "s")? $n1+$n2 : $n1*$n2;
	   echo "O resultado sera $r";
    ?>
</div>
</body>
</html>