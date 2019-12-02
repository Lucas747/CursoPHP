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
       $atual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
        echo "O ano atual e $atual e o ano anterior e " . --$atual;	   
      ?>
</div>
</body> 
</html>  