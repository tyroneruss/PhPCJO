<!DOCTYPE html>
<?php

/* 
 * Program: Db access Code
 * Author: Tyrone Russ
 * Description: Verify username and password exist in db
 * Last modified: 9/3/2017
 */
    require_once('../../includes/database.php');

    if ('$_POST') {   
 
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
        
        $query  = "Insert into offer () ";
        $query .= "Where Username='" .  $users_username; 
        $query .= "' and Password='" . $users_password . "'"; 
        
        $result = $mysqli->query($query);
        if ($result->num_rows != 0){
            /* fetch associative array */
            $result->free();
            echo 'Passed';
            header('Location: ../../main/home.php'); 
        } else {
            $result->free();
            header('Location: ../login_error.php?message=Password or Username is invalid, please try again...'); 
            echo " Failed";
        }
        /* close connection */
        $mysqli->close();   
   }
  ?>
