<?php

/* 
 * Program: Db access Code
 * Author: Tyrone Russ
 * Description: Verify evaluation function
 * Last modified: 12/24/2017
 */

    require_once('../../includes/database.php');
    require_once('../../includes/functions.php');

    //Check connection       
    $mysqli = db_connect();
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 

    $query = 'select * from offer';
    $result = $mysqli->query($query);

    // echo "Gender: " . $Gender;
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
        +$i;
        $Offer[$i] = $row;
        echo $Offer[$i]['Company'] . '<br>';
        // $weighted_value = '';
        //$weighted_value = evaluateoffer($row);
        //echo 'The weight value offer number: ' . $weighted_value . '<br>';
    }
    
    $mysqli->close();    
  ?>
  </body>
</html>
 