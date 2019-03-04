<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <h1> <center>Ejercicio °6</></h1>
</head>

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
                        " (ID: $id[$IdCounter])  tiene un salario de: " . "$" . $EmployeeName['salary'] . " (Bajo)";
echo "</ul>";echo "</li>";
                    break;
         
                          case $EmployeeName['salary'] >= 2000;
        echo "<ul>"; echo "<li>";
echo  $EmployeeName['firstname'] . " " . $EmployeeName['lastname']  .
                        " (ID: $id[$IdCounter])  tiene un salario de: " . "$" . $EmployeeName['salary'] . " (Alto)";
    echo "</ul>";echo "</li>";
                    break;
         
                  case $EmployeeName['salary'] >= 1000  || $EmployeeName['salary'] < 2000;
    echo "<ul>"; echo "<li>";
echo  $EmployeeName['firstname'] . " " . $EmployeeName['lastname']  .
                        " (ID: $id[$IdCounter])  tiene un salario de: " . "$" . $EmployeeName['salary'] . " (Medio)";
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
