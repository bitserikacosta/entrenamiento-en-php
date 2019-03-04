   <form method="post" action="index.php">           
            <input type="number" name="num1" class="Valor">
            <input type="number" name="num2" class="Valor">
            <select class="opt" name="simbolo">
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">x</option>
                <option value="dividir">/</option>
            </select>
            <input type="submit" name="SimboloOpcion" value="valor" class="enviar">                                         
        </form>


		<?php 
    if(isset($_POST['SimboloOpcion'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $simbolo = $_POST['simbolo'];
        switch ($simbolo) {
            case 'suma':
                $resultado = $num1+$num2;
            break;
            case 'resta':
                $resultado = $num1-$num2;
            break;
            case 'multiplicacion':
            break;
            case 'dividir':
            
				 if ($num2 == 0) {
					echo  "ERROR0"; 
						
				 } else {
					  $resultado = @($num1/$num2);
					   }
            break;          
        }
    }
    ?>
	
	
        <?php if(isset($_POST['SimboloOpcion'])){ ?>
            <input type="text" value="<?php echo $resultado; ?>" class="Valor">
        <?php }else{ ?>
        <?php } ?>            
  
