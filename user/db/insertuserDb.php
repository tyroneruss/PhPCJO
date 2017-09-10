
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
            /*session created*/
                $Fullname = $_SESSION["users_name"];           
                $Username = $_SESSION["users_user"];           
                $Email    = $_SESSION["users_email"];
                $Password = $_SESSION["users_password"];
        }   
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 
        
        $query  = "insert into user (Fullname,Username,Password,Email) ";
        $query .= "Values ('" . $Fullname; 
        $query .= "','" . $Username; 
        $query .= "','" . $Password; 
        $query .= "','" . $Email . "')"; 
        
        if ($mysqli->query($query) === TRUE) {
           // success!            /*session is[ started if you don't write this line can't use $_Session  global variable*/
            header('Location: profile.php');                         
        }
        else {
               echo 'Error inserting registration record into database, please try again..';   
               echo '<br>';
               echo $query;             
        }
           // failed :(
        /* close connection */
        $mysqli->close();   
   
  ?>
  </body>
</html>
 