<?php

/* 
 * Program: Db access Code
 * Author: Tyrone Russ
 * Description: Verify username and password exist in db
 * Last modified: 9/9/2017
 */
    require_once('../../includes/database.php');

    if ('$_POST') {   
        session_start();
               /*session created*/
        $_SESSION["users_gender"]   = $_POST['gender'];           
        $_SESSION["users_dob"]      = $_POST['birthdate'];           
        $_SESSION["users_employed"] = $_POST['birthdate']; 
        $_SESSION["users_eduleve"]  = $_POST['birthdate']; 
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 

        $query  = "Select UserID user where Username='" . $_POST['username'] . "'";

        if ($mysqli->query($query) === TRUE) {
            $obj = $result->fetch_object();
            $userID = $obj->UseriD;
            echo $userID;
            
            // $date = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
            
            $mysqli->close(); 
            // header('Location: ../profile.home');                         
        }
        else {
               echo 'Error inserting registration record into database, please try again later..';   
               echo '<br>';
               echo $query;             
        }
    }      
  ?>
  </body>
</html>
 