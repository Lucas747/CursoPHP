<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

</head>
<body>
<div>
        <?php
        $c = 1;
         while ($c <= 5) {
             $valor = isset($_GET["v$c"])? $_GET["v$c"]:0;
            echo "Valor $c: $valor <br/>";
            $c++;
         }
        ?>
    <a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
</div>
</body>
</html>