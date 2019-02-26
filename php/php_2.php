<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1> <center>Array De Peliculas</></h1>
<body>

<?php
$identificador = array("#611", "#612", "#613", "#614", "#615");
$titulo = array("Fast & Furious", "Sharknado", "Fighting With My Family", "See No Evil", "Harry poter");
$director = array("James Cameron", "Dean Malenko", "Roman Dar", "Travis Taylor", "Shawn Dar");
$año = array("2014", "2015", "2016", "2017", "2018");
$duracion = array("120", "90", "180", "210", "240");

echo "<table border=2 cellspacing=3 cellpading=0> <th>IDENTIFICADOR</th><th>TITULO</th><th>DIRECTOR</th><th>AÑO</th><th>DURACION</th>

<tr> <td>$identificador[1]<td>$titulo[1]</td> <td>$director[1]</td> <td>$año[1]</td> <td>$duracion[1]</td></tr> 
<tr> <td>$identificador[2]<td>$titulo[2]</td> <td>$director[2]</td> <td>$año[2]</td> <td>$duracion[2]</td></tr> 
<tr>  <td>$identificador[3]<td>$titulo[3]</td> <td>$director[3]</td> <td>$año[3]</td> <td>$duracion[3]</td></tr> 
<tr>  <td>$identificador[4]<td>$titulo[4]</td> <td>$director[4]</td> <td>$año[4]</td> <td>$duracion[4]</td></tr> 
</table>";


?>



</body>
</html>