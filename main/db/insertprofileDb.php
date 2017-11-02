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
        $Gender         = $_POST['gender'];           
        $Firstname      = $_POST['firstname'];
        $Lastname       = $_POST['lastname'];
        $Employed       = $_POST['employed']; 
        $Educatelevel   = $_POST['education']; 
        $CityStateID    = $_POST['citystateID']; 
            
            
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 

        $query   = "Insert into profile (UserID,LocationID,Firstname,Lastname,Gender,Employed,EduLevel)";
        $query  .= " Values(" . $_SESSION["userID"]  . "," . $CityStateID . ",'" . $Firstname . "','";
        $query  .= $Lastname . "','";
        $query  .= $Gender . "','";
        $query  .= $Employed . "',";
        $query  .= $Educatelevel . ")";
        
        // echo "Gender: " . $Gender;
        if ($mysqli->query($query) === TRUE) {
           // echo $Username . " " . $CityStateID;                      
            $mysqli->close(); 
            header('Location: ../listusers.php');                         
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
 