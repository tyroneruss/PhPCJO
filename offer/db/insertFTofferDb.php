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
        $OT  = $_SESSION['Offertype'];
        $CP  = $_SESSION['Company'];
        $PT  = $_SESSION['Position'];
        $IN  = $_SESSION['Industry'];
        $SA  = $_SESSION['Salary'];
        $PTO = $_SESSION['Pto'];
        $SB  = $_SESSION['Signbonus'];
        $SK  = $_SESSION['Stocks'];
        $PN  = $_SESSION['Pension']/100.00;
        $ST  = $_SESSION['State'];
        $CT  = $_SESSION['City'];
        $RL  = $_SESSION['Relocating'];
       
        if ($RL == 'Yes') {
            $PR  = $_POST['paidreimburse']; 
        }  
        else { 
            $PR = 0.00; 
        }
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 
        
        echo 'Salary: ' . $SA;
        
        $query = "Select * from col where State='" . $ST . "' and City='" . $CT . "'";

        $OT  = $_SESSION['Offertype'];
        $CP  = $_SESSION['Company'];
        $PT  = $_SESSION['Position'];
        $IN  = $_SESSION['Industry'];
        $SA  = $_SESSION['Salary'];
        $PTO = $_SESSION['Pto'];
        $SB  = $_SESSION['Signbonus'];
        $SK  = $_SESSION['Stocks'];
        $PN  = $_SESSION['Pension']/100.00;
        $ST  = $_SESSION['State'];
        $CT  = $_SESSION['City'];
        $RL  = $_SESSION['Relocating'];
        
        $query   = "Insert into offer (UserID,ColID,OfferType,Company,Position,PersonalTimeOff,Pension,ReimburseExp,Relocate,)";
        $query  .= " Values(" . $_SESSION["userID"]  . "," . $CityStateID . ",'" . $Firstname . "','";
        $query  .= $Lastname . "','";
        $query  .= $Gender . "','";
        $query  .= $Employed . "',";
        $query  .= $Educatelevel . ")";

        $result = $mysqli->query($query);
        
        if ($mysqli->query($query) === TRUE) {
           // echo $Username . " " . $CityStateID; 
           $row = mysqli_fetch_array($result);
 
            echo 'ColID : ', $row['ColiD'];
            $results->free();
            
            $mysqli->close(); 
            // header('Location: ../listusers.php');                         
        }
        else {
               echo 'Error inserting offer record into database, please try again later..';   
               echo '<br>';
               echo $query;             
        }
    }      
 
 