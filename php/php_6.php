<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<h1> <center>Ejercicio °6</></h1>
 
<body>
    <ul>
<?php
        $employees = [
    13 => [
        'firstname' => 'Carolina',
        'lastname' => 'Poveda',
        'salary' => 900
    ],
    3 => [
        'firstname' => 'Sebastian',
        'lastname' => 'Sanchez',
        'salary' => 2700
    ],
    42 => [
        'firstname' => 'Saul',
        'lastname' => 'Goodman',
        'salary' => 1800
    ]
];
?>
<ul>
<?php
 $IdCounter = 0;
$id = array_keys($employees);
$EmployeeSalary = 0;
    
 foreach ($employees as $EmployeeName) {
 switch ($EmployeeName) {
                case $EmployeeName['salary'] < 1000;
     echo "<ul>"; echo "<li>";
echo  $EmployeeName['firstname'] . " " . $EmployeeName['lastname']  .
                        " (ID: $id[$IdCounter])  tiene un salario de: " . "$" . $EmployeeName['salary'] . " (bajo)";
echo "</ul>";echo "</li>";
                    break;
         
                          case $EmployeeName['salary'] >= 2000;
        echo "<ul>"; echo "<li>";
echo  $EmployeeName['firstname'] . " " . $EmployeeName['lastname']  .
                        " (ID: $id[$IdCounter])  tiene un salario de: " . "$" . $EmployeeName['salary'] . " (alto)";
    echo "</ul>";echo "</li>";
                    break;
         
                  case $EmployeeName['salary'] >= 1000;
    echo "<ul>"; echo "<li>";
echo  $EmployeeName['firstname'] . " " . $EmployeeName['lastname']  .
                        " (ID: $id[$IdCounter])  tiene un salario de: " . "$" . $EmployeeName['salary'] . " (medio)";
    echo "</ul>";echo "</li>";
                    break;
 }
 $IdCounter++;
            if ($EmployeeSalary < $EmployeeName['salary']) {
                $EmployeeSalary = $EmployeeName['salary'];
                $HighestIncome = $EmployeeName['firstname'] . " " . $EmployeeName['lastname'];
                      
 }
 }
      
          echo "<br>"; echo "<ul>"; echo "<li>"; echo "<strong>"; echo $HighestIncome . " tiene el mayor salario de todos";  echo "</strong>";
        
        ?>
</body>
</html>
