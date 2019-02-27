<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1> <center>Numeros Impares</></h1>
<body>

<?php

//Se inicializa el contador
             $i=0;
			 //Creo la variable "terminar"
			 $terminar = 356;
	
			 		 //bucle while que muestra por pantalla todos los números impares menores de 1000. 
             while($i <= 1000){
				 //Creo la terminacion del ciclo una vez la lectura de impares supere el de la variable $terminar
				     if ($i > $terminar  ) {
        break;
    }
				 //Aca uso el operador %.
                 if($i % 2 == 0){
                   
                 }else{
					  //Aca se invoca la salida por pantalla de la lista de impares, ademas Los números se 
			 //mostrarán separados por comas y  elimino la coma al final.

					echo  "," . rtrim($i,"");
					
                 }
                 $i++ ;	 	 
             }
   ?>

</body>
</html>
