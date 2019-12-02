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
       $ano = $_GET["an"];
	   $idade = 2019 - $ano;
	   echo "quem nasceu em $ano tem idade de $idade anos.";
	   $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
	   echo "<br/> E dessa forma seu voto e $tipo.";
    ?>
</div>
</body>
</html>  