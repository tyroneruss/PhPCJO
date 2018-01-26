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

    $handle = fopen("data/AbbrState.csv", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode(",", $line);
            $StateAbbr  = $list[0];
            $State      = $list[1];
            $sql = "INSERT INTO state_old (Name,NameAbbr) VALUES ('" . $State . "','" . $StateAbbr . "')";

            if ($mysqli->query($sql) === TRUE) {
                 echo 'Successfull inserts: ' . $list[1] . "<br>";
             } else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
             }
        }
    }
    
    $mysqli->close();
    fclose($handle);      

?>