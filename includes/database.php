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

function db_disconnent($connection) {
    if(isset($connection)){
        mtsqli_close($connection);
    }
}

?>