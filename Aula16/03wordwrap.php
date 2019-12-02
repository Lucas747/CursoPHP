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
      $t ="Este é um exemplo de string gigante que vai mostras o funcionamento da fuçao wordwrap dspojdihjasdufhgafouhaufgauh hfihassdfuabfhjivba uuifshaifhaouihfouiahfuia fuhsufhaiufiua fiahfioahfuohaifhauiof faijhfioahfoaha ";
      $r = wordwrap($t, , "<br/>|n");	  
	  echo $r;
    ?>
</div>
</body>
</html>  