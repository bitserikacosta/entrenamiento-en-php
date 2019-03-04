 <?php 

      $num1 = 0;
      $num2 = 0;
      $Operacion = 0;

      if (isset($_POST['submit']))
      {
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $Operacion =  calculadora($num1, $num2, $_POST['submit']);
      }

     function calculadora($num1,$num2,$OperacionAritmetica) 
     {
       $Operacion = 0;

       switch ($OperacionAritmetica) 
       {
          case '+':   
                    $Operacion = $num1 + $num2;
                    break;
					
          case '-':
                    $Operacion = $num1 - $num2;
          break;
		  
		   case '*':   
                    $Operacion = $num1 * $num2;
                    break;
					
					 case '/':   
					 //condición para evitar el error de división por cero. En este caso se expondra en pantalla "ERROR0"
					   if ($num2 == 0) {
						    echo "<br>"; echo "<ul>"; echo "<li>"; echo "<strong>"; echo  "ERROR0";  echo "</strong>";
						
				 } else {
                    $Operacion = @($num1/$num2);
				 }
                    break;		  
       }

       return $Operacion;
    }
  ?>

    <form action="" method="post">
       Valor 1 : <input type="number" name='n1' value="<?php echo $num1;?>">
       <br><br>
       Valor 2: <input type="number"  name='n2' value="<?php echo $num2;?>"><br><br>
	   
       TOTAL: <input name="resultado" value="<?php echo $Operacion;?>"><br><br>
	   
       <input type="submit" name="submit" value="+">
       <input type="submit" name="submit" value="-">
  <input type="submit" name="submit" value="*">
    <input type="submit" name="submit" value="/">
	
   </form>
