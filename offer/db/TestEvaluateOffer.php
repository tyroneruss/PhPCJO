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
       
        $query = 'select * from offer where OfferID=1';
        $result = $mysqli->query($query);
                
        // echo "Gender: " . $Gender;
        if ($row = mysqli_fetch_array($result)) {

            $weighted_value = 0;
            $weighted_value = evaluate_offer($row);
            echo 'The weight value offer number 1: ' . $weighted_value;
                       
            $mysqli->close();                       
        }
        else {
               echo 'Error inserting offer record into database, please try again later..';   
               echo '<br>';
               echo $query;             
        }   
  ?>
  </body>
</html>
 