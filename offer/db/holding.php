<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

        $result = $mysqli->query($query);
        
        if ($mysqli->query($query) === TRUE) {
           // echo $Username . " " . $CityStateID; 
            echo 'Insert string: ' . $strInsert;
            echo '<br> Results: ' . $result;
            $mysqli->close(); 
            // header('Location: ../listusers.php');                         
        }
        else 
        {
               echo 'Error inserting offer record into database, please try again later..';   
               echo '<br>';
               echo $query;             
        }
        
 
 