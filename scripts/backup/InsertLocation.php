<!DOCTYPE html>
<!--

-->
<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "rhouse11";
    $dbname = "CJOdb";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 

    $handle = fopen("data/CostofLiving.csv", "r");
    
    $i = 0;
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode(",", $line);
            $CS  = $list[0] . ',' . $list[1];
            $sql = "INSERT INTO location (Name) VALUES ('" . $CS . "')";

            if ($mysqli->query($sql) === TRUE) {
                $i = $i + 1;
                 echo $i . " <option value=" . $CS . ">" . $CS . "</option><br>";
             } else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
             }
        }
    }
 
    fclose($handle);      
    $mysqli->close();

?>