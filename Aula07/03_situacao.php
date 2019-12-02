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
       $nota1 = $_GET["n1"];
	   $nota2 = $_GET["n2"];
	   $m = ($nota1+$nota2)/2;
	   echo "<br/> A media entre $nota1 e nota2 e $m";
	   echo "<br/>A situacao do aluno e " .(($m<6)?"REPROVADO":"APROVADO");
    ?>
</div>
</body>
</html>