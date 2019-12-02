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
       function soma ($a, $b) {
	        $s = $a + $b;
			return $s;
	   }
	    
		$x = -4;
		$y = 8;
		$r = soma ($x, $y);
        echo "A soma entre $x e $y e igual a $r";		
    ?>
</div>
</body>
</html>   