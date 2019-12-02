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
       $prod = "leite";
	   $preco = 4.5;
	   printf ("O %s esta custando R$ %.2f", $prod, $preco);
    ?>
</div>
</body>
</html>  