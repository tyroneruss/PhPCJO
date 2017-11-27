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
        $CP  = $_SESSION['Company'];
        $PT  = $_SESSION['Position'];
        $IN  = $_SESSION['Industry'];
        $BS  = $_SESSION['baseSalary'];
        $PTO = $_SESSION['Pto'];
        $SB  = $_SESSION['SignBonus'];
        $SK  = $_SESSION['Stocks']/100.00;
        $PN  = $_SESSION['Pension']/100.00;
        $ED  = $_POST['location'];    
        $RI  = $_POST['reimbused']; 
        
        if ($RI == 'Yes') {
            $PR  = $_POST['paidreimburse']; 
        }  else { $PR = 0.00; }
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 

        $query   = "Insert into offer (UserID,ColID,OfferType,Company,Position,Indus,)";
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
               echo 'Error inserting offer record into database, please try again later..';   
               echo '<br>';
               echo $query;             
        }
    }      
  ?>
  </body>
</html>
 