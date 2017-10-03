
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

/* 
 * Program: Db access Code
 * Author: Tyrone Russ
 * Description: Verify username and password exist in db
 * Last modified: 9/3/2017
 */
    require_once('../../includes/database.php');

    if ('$_POST') {   
        session_start();
 
        $users_username = $_POST['username'];
        $users_password = $_POST['password'];

        // echo $users_username . " " . $users_password;
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 
        
        $query  = "SELECT * FROM user ";
        $query .= "Where Username='" .  $users_username; 
        $query .= "' and Password='" . $users_password . "'";        
               
        $result = $mysqli->query($query);
        if ($result->num_rows != 0) {
            
             // printf("%d - %s",$result->num_rows, $query);
           
            $row = $result->fetch_assoc();
           
            $_SESSION["firstname"] = $row['Firstname'];           
            $_SESSION["userID"]    = $row['UserID'];            
            
            // printf("%s - ",$userID);

            $result->free();
            
            $query  = "SELECT * FROM profile ";
            $query .= " Where UserID=" . $row['UserID'];
            
            printf($query);
            $result = $mysqli->query($query);
           
            if ($result->num_rows != 0) {
                header('Location: ../../main/home.php'); 
             } else {
               $mysqli->close();  
                header('Location: ../profile.php'); 
             }
             /* close connection */
        } else {
                $mysqli->close();  
                header('Location: ../login.php?message=Password or Username is invalid, please try again...'); 
        }
   }
   
  ?>
  </body>
</html>
 