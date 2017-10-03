<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("ComposerData.php");

session_start();

$composerData = new ComposerData();
$composers = $composerData->composers;

$results = array();
$namesAdded = false;

// simple matching for start of first or last name, or both
if(isset($_GET['action']) && $_GET['action'] == "complete") {
    foreach($composers as $composer) {
        if(!is_numeric($_GET['id']) &&

            // if id matches first name
            (stripos($composer->firstName, $_GET['id']) === 0 ||

            // if id matches last name
            stripos($composer->lastName, $_GET['id']) === 0) ||

            // if id matches full name
            stripos($composer->firstName." ".$composer->lastName, $_GET['id']) === 0) {

                $results[] = $composer;
        }
    }

    // prepare xml data
    if(sizeof($results) != 0) {
        header('Content-type: text/xml');
        echo "<composers>";
        foreach($results as $result) {
            echo "<composer>";
            echo "<id>" . $result->id . "</id>";
            echo "<firstName>" . $result->firstName . "</firstName>";
            echo "<lastName>" . $result->lastName . "</lastName>";
            echo "</composer>";
        }
        echo "</composers>";
    }
}

// if user chooses from pop-up box
if(isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == "lookup") {
    foreach($composers as $composer) {
        if($composer->id == $_GET['id']) {
            $_SESSION ["id"] = $composer->id;
            $_SESSION ["firstName"] = $composer->firstName;
            $_SESSION ["lastName"] = $composer->lastName;
            $_SESSION ["category"] = $composer->category;

            header("Location: composerView.php");
        }
    }
}

