<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1> <center>Ejercicio 5</></h1>
<body>

<?php 

$cadena1 = "abcdefg"; 

$cadena2 = "abcdefg";  

if   ($cadena1 == $cadena2)
{
    echo "Las cadenas son iguales tienen "; echo strlen($cadena1); echo " y "; echo strlen($cadena2); echo " caracteres";

} elseif ($cadena1 > $cadena2) {
    echo "La cadena1 es mayor que la cadena2 en "; echo strlen($cadena1); echo " caracteres";

} elseif ($cadena1 < $cadena2) {
    echo "La cadena1 es menor que la cadena2 en "; echo strlen($cadena2); echo " caracteres";
	 	
}


?> 

</body>
</html>
