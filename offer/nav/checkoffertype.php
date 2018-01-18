<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ('$_POST') {   

    session_start();

    $_SESSION['Offertype'] = $_POST['offertype'];
    $_SESSION['Company']   = $_POST['company'];
    $_SESSION['Position']  = $_POST['position'];
    $_SESSION['Industry']  = $_POST['industry'];    
    $_SESSION['State']     = $_POST['state'];
    $_SESSION['City']      = $_POST['city'];
    
    if ($_POST["offertype"] == 'FT') {
         header('Location: ../createoffers_ft.php');
    } else {
         header('Location: ../createoffers_ct.php');    
    }
}

