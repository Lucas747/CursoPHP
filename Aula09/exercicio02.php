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
       if ($i <16){
	       $tipovoto = "nao vota";   
	   }
	   elseif (($i>=16 && $i <18) || ($i>65)) {
		     $tipovoto = "voto opcional";
	   }
	   else {
		    $tipovoto = "voto obrigatorio";
	   }
	
	  echo "Para essa idade, $tipovoto";
   ?>
</div>
</body>
</html>  