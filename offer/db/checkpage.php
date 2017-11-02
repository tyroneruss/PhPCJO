<!DOCTYPE html>
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

        $offer_type = $_POST['offertype'];
        
        echo $offer_type;
        
        if ( $offer_type == 'FT'){
            header('Location: ../createoffer-01.php'); 
        } else {
            header('Location: ../createoffer-02.php'); 
        }
        /* close connection */
   }
  ?>
