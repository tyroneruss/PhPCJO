<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../includes/header.php'; 

require_once('../includes/database.php');

if ('$_POST') {   
    session_start();

    $users_username = $_POST['username'];
    $users_password = $_POST['password'];

    echo $users_username . " " . $users_password;

    //Check connection       
    $mysqli = db_connect();
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 
    
    $query  = "SELECT * FROM user where ";             
    $result = $mysqli->query($query);
    
    $row = mysqli_fetch_array($result);
    echo $row["FullName"];
    echo $row["Username"];
    echo $row["Password"];   
    echo $row["Email"];
    echo $row["EmploymentStatus"];
    echo $row["EduacationLevel"];
} 
