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
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 

        $query  = "insert into user (RoleID,Username,Password,Email,Active) ";
        $query .= "Values (1000";
        $query .= ",'"  . $_SESSION['Username']; 
        $query .= "','" . $_SESSION["Password"]; 
        $query .= "','" . $_SESSION['Email'] . "',"; 
        $query .= "1)"; 

        if ($mysqli->query($query) === TRUE) {
           // success!            
           // session is[ started if you don't write this line can't use $_Session  global variable
           $Email = $_SESSION['Email'];        
        }
        else {
               echo 'Error inserting registration record into database, please try again..';   
               echo '<br>';
               echo $query;             
        }

        $Gender         = $_POST['gender'];           
        $Firstname      = $_POST['firstname'];
        $Lastname       = $_POST['lastname'];
        $Education      = $_POST['education']; 
        $Infield        = $_POST['infield']; 
        $Yearsinfield   = $_POST['yearsinfield']; 
        $Employed       = $_POST['employed']; 
            
        // Query for user ID
        $query  = "SELECT * FROM user ";
        $query .= "Where Email='" .  $Email . "'";        
               
        $result = $mysqli->query($query);
        if ($result->num_rows != 0) {
           
            $row = $result->fetch_assoc();
           
            $_SESSION["userID"] = $row['UserID'];                     
            // printf("%s - ",$userID);
            $result->free();
            
        }
        
        // echo $_SESSION["userID"] . '<br>';
        $query   = "Insert into profile (UserID,Firstname,Lastname,Gender,EduLevel,Infield,Yearsinfield,Employed)";
        $query  .= " Values(" . $_SESSION["userID"] . ",'" . $Firstname . "','";
        $query  .= $Lastname . "','";
        $query  .= $Gender . "','";
        $query  .= $Education . "',";
        $query  .= $Infield . ",";
        $query  .= $Yearsinfield . ",'";
        $query  .= $Employed . "')";
        
        if ($mysqli->query($query) === TRUE) {
           // echo $Username . " " . $CityStateID;                      
            
                   // Query for user ID
            $query  = "SELECT * FROM profile ";
            $query .= "Where UserID='" .  $_SESSION["userID"] . "'";        

            $result = $mysqli->query($query);
            if ($result->num_rows != 0) {

                $row = $result->fetch_assoc();
                $_SESSION["Firstname"] = $row['Firstname'];                     
            }
            $mysqli->close(); 
            header('Location: ../../offer/home.php');                         
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
 