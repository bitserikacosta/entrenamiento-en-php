﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1> <center>Ejercicio 5</></h1>
<body>

<?php 

  //Definicion de 2 variables
$cadena1 = 123; 
$cadena2 = 127;
  
  //Hallar la diferencia en caracteres
$Diferencia = ($cadena1 - $cadena2);
$Diferencia2 = ($cadena2 - $cadena1);
   
//Comparacion entre las cadenas si son iguales, o cual es mayor
  // uso de las clausulas if
if   ($cadena1 == $cadena2)
{
    echo "Las cadenas son iguales tienen "; echo $cadena1; echo " y "; echo $cadena2; echo " caracteres";

} elseif ($cadena1 > $cadena2) {
    echo "La cadena1 es mayor que la cadena2 en "; echo $Diferencia; echo " caracteres";

} elseif ($cadena1 < $cadena2) {
    echo "La cadena1 es menor que la cadena2 en "; echo $Diferencia2; echo " caracteres";	 	
}

?> 

</body>
</html>
