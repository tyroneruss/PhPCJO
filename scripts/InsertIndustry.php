<!DOCTYPE html>
<!--

-->
<?php

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

        $handle = fopen("inputfile.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $keywords = preg_split(",", "hypertext language, programming");
                print_r($keywords);
                // process the line read.
                // $sql = "INSERT INTO CityState (City,State,ColIndex,Grocery,Housing,Utilities,Transport,HealthCare,MiscGoodServices)
                // VALUES ('')";
            }
        fclose($handle);
         
        if ($conn->query($sql) === TRUE) {
             echo '<script>window.location.href = "the-target-page.php";</script>';
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
        $conn->close();
        } else {
        // error opening the file.
    } 

?>