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
  $n1 = $_GET["nota1"];
  $n2 = $_GET["nota2"];
  $media = ($n1+$n2)/2;
  echo "A media do aluno é $media <br/>";
  if($media>=7){
   $situacao = "APROVADO";
  }
  else{
   $situacao = "REPROVADO";
  }
   echo "Então, a situação do aluno é $situacao";
 ?>
</div>
</body>
</html>  