<?php

if(isset($_POST['get_option']))
{
    require_once('../includes/database.php');

    $mysqli = db_connect();
    
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 

    $area = $_POST['get_option'];
    
    $query   = "select Position from areaposition where Area='$area'";             
    $result  = $mysqli->query($query);
    
    while($row = mysqli_fetch_array($result))
    {
     // echo "<option>" .$row['City']."</option>";
     echo "<option value='" .$row['Position']. "'>" .$row['Position']."</option>";
    }
    exit;
 }



