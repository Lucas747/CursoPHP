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
       $a = 3;
	   $b = "3";
	   $r = ($a === $b)?"SIM":"NAO";
	   echo "As variaveis A e B sao identicas? $r";
    ?>
</div>
</body>
</html>  