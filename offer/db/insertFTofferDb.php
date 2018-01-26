<?php

/* 
 * Program: Db access Code
 * Author: Tyrone Russ
 * Description: Verify username and password exist in db
 * Last modified: 9/9/2017
 */

    require_once('../../includes/database.php');

    if ('$_POST') {   
        
        session_start();
        
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 
              
        $UserID = $_SESSION["userID"];
        $OT  = $_SESSION['Offertype'];
        $CO  = $_SESSION['Company'];
        $PT  = $_SESSION['Position'];
        $AR  = $_SESSION['Area'];
        $ST  = $_SESSION['State'];
        $CT  = $_SESSION['City'];
        
        $SA  = $_POST['salary'];
        $PTO = $_POST['pto'];
        $NWH = 40;
        $SB  = $_POST['signbonus'];
        $YB  = $_POST['yearendbonus'];        
        $SK  = $_POST['stocks'];
        $MO  = $_POST['medicaloffered'];
        $PO  = $_POST['promotionopt'];
        $FK  = $_POST['fouronek'];
        $PN  = $_POST['pension'];
        $RL  = $_POST['relocating'];
        
        echo 'State: ' . $ST . '<br>City: ' . $CT ;
        $query = "Select * from col where State='" . $ST . "' and City='" . $CT . "'";
        $result = $mysqli->query($query);
        
        echo 'Query: ' . $query;
        $ColID = 0;
        if ($result->num_rows != 0) {
           // echo $Username . " " . $CityStateID; 
            $row = mysqli_fetch_array($result);
 
            echo '<br>Found: ', $row['ColID'];
            $ColID = $row['ColID'];
        }         
        
        $strInsert   = "Insert into offer (UserID,ColID,OfferType,Company,Position,Area,State,City,Salary,";
        $strInsert  .= "Normalworkhours,Pto,Signbonus,Yearendbonus,Stocks,401k,Pension,";
        $strInsert  .= "Medicaloffered,PromotionOpt,Relocate,Active)";
        $strInsert  .= " Values(" . $UserID;
        $strInsert  .= "," . $ColID;  
        $strInsert  .= ",'" . $OT;  
        $strInsert  .= "','" . $CO;  
        $strInsert  .= "','" . $PT;  
        $strInsert  .= "','" . $AR;  
        $strInsert  .= "','" . $ST;  
        $strInsert  .= "','" . $CT;  
        $strInsert  .= "'," . $SA;  
        $strInsert  .= "," . $NWH;  
        $strInsert  .= "," . $PTO;  
        $strInsert  .= "," . $SB;  
        $strInsert  .= ",'" . $YB;  
        $strInsert  .= "','" . $SK;  
        $strInsert  .= "'," . $FK;  
        $strInsert  .= ",'" . $PN;  
        $strInsert  .= "','" . $MO;  
        $strInsert  .= "','" . $PO;  
        $strInsert  .= "','" . $RL;  
        $strInsert  .= "',1)";  

       // echo '<br>Insert string: ' . $strInsert;
       if ($mysqli->query($strInsert) === TRUE) {
          // success! 
           $mysqli->close(); 
           header('Location: ../compareoffers.php');                         
       }
       else {
              echo 'Error inserting registration record into database, please try again..';   
              echo '<br>';
              echo $query;             
       }

 
    }
 