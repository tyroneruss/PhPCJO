<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('db_credenitials.php');

function db_connect() {
    $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    return $connection;
}

function db_disconnect($connection) { 
    if(isset($connection)){
        mysqli_close($connection);
    }
}

function db_findusername($table,$Where,$lookupvalue) {
    
        $mysqli = db_connect();

        if (mysqli_connect_errno())
         {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }

        $query = "SELECT * FROM " . $table . $Where . "'" . $lookupvalue . "'";
        // echo $query;
        $result=mysqli_query($mysqli,$query);
    
        if (mysqli_num_rows($result)) {
            $row_count = 1;
        } else {
            $row_count = 0;
        }
             
        mysqli_free_result($result);
        mysqli_close($mysqli);  
        
        return $row_count;
}       

