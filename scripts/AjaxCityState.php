<!DOCTYPE html>
<!--

-->
<?php

// Check connection
    $handle = fopen("data/CityState.csv", "r");
    $i = 0;
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $list = explode(",", $line);
            $City  = $list[0];
            $State      = $list[1];
            $i++;
            $strRecord = "new Citystate('" . $i . "','" . $City . "','" . $State . "'),";
            echo $strRecord;
            echo '<br>';
        }
    }
    
    fclose($handle);      

?>