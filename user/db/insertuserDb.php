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
        $_SESSION["users_fullname"]  = $_POST['fullname'];           
        $_SESSION["users_username"]  = $_POST['username'];           
        $_SESSION["users_email"]     = $_POST['email']; 
               
        $Table       = ' user ';
        $Where       = ' WHERE Username=';
        $Username    = $_POST['username'];
        
        if (db_findusername($Table,$Where,$Username)) {
            header('Location: ../register_error.php?message=Username already exist, please try another...<br>');                         
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

            $query  = "insert into user (Fullname,Username,Password,Email) ";
            $query .= "Values ('" . $_POST['fullname']; 
            $query .= "','" . $_POST['username']; 
            $query .= "','" . $_POST["password"]; 
            $query .= "','" . $_POST['email'] . "')"; 

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
            header('Location: ../register_error.php?message=Passwords does not match, please re-enter...');             
        }
      // failed :(


    }      
  ?>
  </body>
</html>
 