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
        $_SESSION["Username"]  = $_POST['username'];           
               
        $Table       = ' user ';
        $Where       = ' WHERE Username=';
        $Username    = $_POST['username'];
        
        if (db_findusername($Table,$Where,$Username)) {
            header('Location: ../register.php?message=Username already exist, please try another...<br>');                         
        }

        if ($_POST["password"] === $_POST["password1"]) {
           // success!            /*session is started if you don't write this line can't use $_Session  global variable*/
            //Check connection 
            $_SESSION["Password"] = $_POST["password"];
            $_SESSION["Email"]    = $_POST['email']; 
            header('Location: ../profile.php');             
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
 