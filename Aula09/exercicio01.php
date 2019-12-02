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
       $a = isset($_GET["ano"])?$_GET["ano"]:1900;
	   $i = date ("Y") - $a;
	   echo "voce nasceu em $a e tera $i anos. <br/>";
       if($i >= 18) { 
		   $v = "nao pode votar";
		   $d = "nao pode dirigir";
	   }
	    else   {
			$v = "nao pode votar";
			$d = "nao pode dirigir";
		}			
		echo "com essa idade voce $v e tambem $d";
	?>
</div>
</body>
</html>  