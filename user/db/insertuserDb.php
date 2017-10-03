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
        $_SESSION["users_username"]  = $_POST['username'];           
        $_SESSION["users_email"]     = $_POST['email']; 
               
        $Table       = ' user ';
        $Where       = ' WHERE Username=';
        $Username    = $_POST['username'];
        
        if (db_findusername($Table,$Where,$Username)) {
            header('Location: ../register.php?message=Username already exist, please try another...<br>');                         
        }

        if ($_POST["password"] === $_POST["password1"]) {
           // success!            /*session is started if you don't write this line can't use $_Session  global variable*/
            //Check connection       
            $mysqli = db_connect();
            /* check connection */
            if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            } 

            $query  = "insert into user (RoleID,Username,Password,Email,Active) ";
            $query .= "Values (1000";
            $query .= ",'" . $_POST['username']; 
            $query .= "','" . $_POST["password"]; 
            $query .= "','" . $_POST['email'] . "',"; 
            $query .= "1)"; 

            if ($mysqli->query($query) === TRUE) {
               // success!            /*session is[ started if you don't write this line can't use $_Session  global variable*/
                $mysqli->close(); 
                header('Location: ../profile.php');                         
            }
            else {
                   echo 'Error inserting registration record into database, please try again..';   
                   echo '<br>';
                   echo $query;             
            }
        }
        else 
        {
            header('Location: ../register.php?message=Passwords does not match, please re-enter...');             
        }
      // failed :(


    }      
  ?>
  </body>
</html>
 