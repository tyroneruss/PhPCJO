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
        $Username = $_POST['username'];
        
        $Results = db_findusername($Table,$Where,$Username);
        
        if ($Results) {
            
        }
    }      
  ?>
  </body>
</html>
 