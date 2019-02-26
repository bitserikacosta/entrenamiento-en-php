<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1> <center>Array #2 De Peliculas</></h1>
<body>

<?php

$BitsPELIS = array(
    array("Identificador"=>"#611", "Titulo"=>"Fast & Furious", "Director"=>"James Cameron", "Año"=>2015, "Duración"=>120),
    array("Identificador"=>"#612", "Titulo"=>"Sharknado", "Director"=>"Dean Malenko", "Año"=>2016, "Duración"=>190),
    array("Identificador"=>"#613", "Titulo"=>"X-Men: Origins!", "Director"=>"Roman Dar",  "Año"=>2017, "Duración"=>180),
    array("Identificador"=>"#614", "Titulo"=>"See No Evil", "Director"=>"Travis Taylor", "Año"=>2018, "Duración"=>210)
    );

// Elemento adicional al array que se muestra en la tabla que no causa ninguna modificación adicional al código.
$BitsPELISadicional = array(
  
    array("Identificador"=>"#615", "Titulo"=>"Gantz", "Director"=>"Akuma Tanahashi", "Año"=>2019, "Duración"=>240)
    );


echo "<table cellpadding='10' cellspacing'10' border='1'>";
echo "<tr> <th>Identificador</th> <th>Titulo</th> <th>Director</th> <th>Año</th> <th>Duración</th> </tr>";
foreach($BitsPELIS as $Peliculas) {
	     echo "<tr> <td>$Peliculas[Identificador]</td> <td>$Peliculas[Titulo]</td> <td>$Peliculas[Director]</td> <td>$Peliculas[Año]</td> <td>$Peliculas[Duración]</td> </tr>";
}
// Agrego la pelicula adicional al array por separado a la tabla, esta no altera la estructura de la tabla.
	 foreach($BitsPELISadicional as $Peliculas1) {
	 echo "<tr> <td>$Peliculas1[Identificador]</td> <td>$Peliculas1[Titulo]</td> <td>$Peliculas1[Director]</td> <td>$Peliculas1[Año]</td> <td>$Peliculas1[Duración]</td> </tr>";	 
}
echo "</table>";

?>

</body>
</html>