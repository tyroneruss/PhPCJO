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
       
    $handle = fopen("data/CostofLiving.csv", "r");
    // Load cost of living data
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode(",", $line);
            $City       = $list[0];
            $State      = $list[1];
            $StateTax   = $list[2];
            $ColIndex   = $list[3];
            $Grocery    = $list[4];
            $Housing    = $list[5];
            $Utilities  = $list[6];
            $Transport  = $list[7];                
            $HealthCare = $list[8];
            $MiscGoodServices  = $list[9];
            
            $sqlstatement = " ('" . $City . "','" . $State . "','" . $StateTax . "'," . $ColIndex . "," . $Grocery . "," . $Housing . ",";
            $sqlstatement = $sqlstatement . $Utilities . "," . $Transport . "," . $HealthCare . "," . $MiscGoodServices . ")";

            $sql = "INSERT INTO col (City,State,StateTax,ColIndex,Grocery,Housing,Utilities,Transport,HealthCare,MiscGoodServices) 
                    VALUES " . $sqlstatement;
            
        // echo $sqlstatement;
        // echo "<br>";
        if ($mysqli->query($sql) === TRUE) {
            $i++;
            # echo $i . ": " . $sql . "<br>" . $mysqli->error;
        }
        
      }
      echo '  ';
      echo 'Total number of records = ' . $i;     
    }
  $mysqli->close();

?>

   </body>
</html>