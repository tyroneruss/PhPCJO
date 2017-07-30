<!DOCTYPE html>
<!--

-->
<?php

    $servername = "localhost:3306";
    $username = "root";
    $password = "rhouse11";
    $dbname = "CJOdb";

    
    $Name = $_POST["Firstname"]; 
    $Name = $_POST["Lastname"]; 
    $Name = $_POST["Email"]; 
    $Name = $_POST["Passwor"]; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    

    $sql = "INSERT INTO user (FirstName,LastName,Email,Password,EduacationLevel,EmploymentStatus,CreatedDate)
            VALUES ('Terry','Russ','attorneyruss@outlook.com','rhouse11',6,'No',now())";

    if ($conn->query($sql) === TRUE) {
        echo '<script>window.location.href = "the-target-page.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

?>