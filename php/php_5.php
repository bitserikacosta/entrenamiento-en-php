<!DOCTYPE html>
<html>
<head>
 
<meta charset="utf-8">
<h1> <center>Ejercicio °5</></h1>
 
<body>
 
<?php 
    //Definicion de las 2 variables
 
$cadena1 = "abcdefghi";
$cadena2 = "abcdefghi";  
 
  //Se procede a conocer el numero de caracteres mediante la identificacion de su longitud con strlen
    //se Comparan las cadenas si son iguales, o cual es mayor con uso de las clausulas if

if   ($cadena1 == $cadena2)
 
{ 
   $MismaCantidad = strlen ($cadena1) + strlen($cadena2);
echo "Las cadenas son iguales y tienen " .  $MismaCantidad . " caracteres";

} elseif ($cadena1 > $cadena2) {
 
$Cadena1Superior = strlen ($cadena1) - strlen($cadena2);
echo "la cadena1 es mayor que la cadena2 en " .  $Cadena1Superior . " caracteres";

} elseif ($cadena1 < $cadena2) {
	$Cadena2Superior = strlen ($cadena2) - strlen($cadena1);
echo "la cadena1 es menor que la cadena2 en " .  $Cadena2Superior . " caracteres";
}
 
?> 
 
</body>
</html>
