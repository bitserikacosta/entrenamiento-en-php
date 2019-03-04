<?php

function calculadora($Num1, $Num2, $operacion) { 
   switch($operacion) {
        case '+':
            $resultado = $Num1 + $Num2;
            break;
        case '-':
            $resultado = $Num1 - $Num2;
            break;
        case '*':
            $resultado = $Num1 * $Num2;
            break;
        case '/':
            if ($Num2 == 0) {$resultado = "ERROR0";}
            else {$resultado = $Num1 / $Num2;}
    }

    return $resultado;
}

$Num1 = 0;
$Num2 = 0;
$resultado = 0;
$operacion = '';
extract($_GET);
?>
     
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        Num1 = <input type="number" name="Num1" value="<?php print $Num1; ?>"/> 
            <select name="operacion">
                <option value="+" <?php if ($operacion=='+') ?>>+</option>
                <option value="-" <?php if ($operacion=='-') ?>>-</option>
                <option value="*" <?php if ($operacion=='*') ?>>*</option>
                <option value="/" <?php if ($operacion=='/') ?>>/</option>
            </select>
        Num2 = <input type="number" name="Num2" value="<?php print $Num2; ?>"/>
        <input type="submit" name="calc" value="Calcular"/>
        </form>
		
		
    <?php
     $resultado = calculadora($Num1, $Num2, $operacion);
                echo "<p>$Num1 $operacion $Num2 = $resultado</p>";
          
    ?>