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
       $x = "abc";
	   $$x = "def";
	   echo "O conteudo da variavel x e $x";
	   echo "<br/>A variavel ABC criada recebeu ovalor $abc";
    ?>
</div>
</body>
</html>  