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
       $valor = $_GET["v"];
	   $rq = sqrt($valor);
	   echo "A raiz de $valor e igual a " . number_format($rq, 2) ;
    ?>
	<a href="01_exercicio.html">voltar</a>
</div>
</body>
</html>  