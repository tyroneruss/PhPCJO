<!DOCTYPE html>
<!--

-->
<?php

    $servername = "localhost:3306";
    $username = "root";
    $password = "rhouse11";
    $dbname = "CJOdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
            
    $handle = fopen("data/CostofLiving.csv", "r");
    // Load cost of living data
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode(",", $line);
            $City       = $list[0];
            $State      = $list[1];
            $ColIndex   = $list[2];
            $Grocery    = $list[3];
            $Housing    = $list[4];
            $Utilities  = $list[5];
            $Transport  = $list[6];                
            $HealthCare = $list[7];
            $MiscGoodServices  = $list[7];
            
            $sqlstatement = " ('" . $City . "','" . $State . "'," . $ColIndex . "," . $Grocery . "," . $Housing . ",";
            $sqlstatement = $sqlstatement . $Utilities . "," . $Transport . "," . $HealthCare . "," . $MiscGoodServices . ")";

            $sql = "INSERT INTO citystate (City,State,ColIndex,Grocery,Housing,Utilities,Transport,HealthCare,MiscGoodServices) 
                    VALUES" . $sqlstatement;
            
        echo $sqlstatement;
        echo "<br>";
        if ($conn->query($sql) === TRUE) {
            // echo '<script>window.location.href = "the-target-page.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
    }

$conn->close();

?>