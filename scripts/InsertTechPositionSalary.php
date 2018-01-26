<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

<?php

    require_once('../includes/database.php');   
    $mysqli = db_connect();
    /* check connection */
    $i = 0;
    
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 
       
    $handle = fopen("data/TechPostionSalary-2017.txt", "r");
    // Load cost of living data
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode("|", $line);
            $Area        = $list[0];
            $Position    = $list[1];
            $Salary_low  = $list[2];
            $Salary_high = $list[3];
            $Salary_avg  = $list[4];
                        
            $sqlInsert = "INSERT INTO areaposition (Area,Position,Salary_low,Salary_high,Salary_avg) "; 
            $sqlInsert = $sqlInsert . "VALUES ('" . $Area . "','" . $Position . "'," . $Salary_low . "," . $Salary_high . "," . $Salary_avg  . ")";
           
            if ($mysqli->query($sqlInsert) === TRUE) {
                $i++;
                echo $i . ": " . $sqlInsert . "<br>";
            }        
        }
      echo '<br>';
      echo 'Total number of records = ' . $i;     
    }
  $mysqli->close();

?>

   </body>
</html>