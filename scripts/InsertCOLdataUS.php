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
       
    $handle = fopen("data/CostofLiving-US.csv", "r");
    // Load cost of living data
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode(",", $line);
            $City            = $list[0];
            $State           = $list[1];
            $StateTax        = $list[2];
            $ColIndex        = $list[3];
            $Grocery         = $list[4];
            $Restaurant      = $list[5];
            $PurchPowerIndex = $list[6];                
            
            $sqlstatement = " ('" . $City . "','" . $State . "','" . $StateTax . "'," . $ColIndex . "," . $Grocery . "," . $Restaurant . ",";
            $sqlstatement = $sqlstatement . $PurchPowerIndex . ")";

            $sql = "INSERT INTO costofLiving (City,State,StateTax,ColIndex,GroceryIndex,RestPriceIndex,PurchPowerIndex) 
                    VALUES " . $sqlstatement;
            
         echo $sql;
         echo "<br>";
        if ($mysqli->query($sql) == TRUE) {
            $i++;
            // echo $i . ": " . $sql . "<br>" . $mysqli->error;
        }
        
      }
      echo '  ';
      echo 'Total number of records = ' . $i;     
    }
  $mysqli->close();

?>

   </body>
</html>