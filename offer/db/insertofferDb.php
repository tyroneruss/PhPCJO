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
        
        session_start();

        $_SESSION['offer_count'] = $_SESSION['offer_count'] + 1;
        
        echo $_SESSION['offer_count'];
        
 
        // $user_id = $_SESSION['UserID'];

        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 
        
        $query  = "select * from  user";

        $result = $mysqli->query($query);
        if ($result->num_rows != 0){
            /* fetch associative array */
            $mysqli->close();   
            header('Location: ../addnewoffer.php'); 
        } else {
            $mysqli->close();   
            header('Location: ../createoffer_error.php?message=Invalid information enter please correct...'); 
            echo " Failed";
        }
        /* close connection */
   }
  ?>
