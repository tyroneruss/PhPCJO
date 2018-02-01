<?php 

    include '../includes/header.php';

    require_once('../includes/database.php');
    session_start();
?>
 
</script>
  
<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a href="./home.php" 
                   style="background-color: #f2f2f2; color: black" >
                    <b>Home</b>
                </a>
            </li>
            <li><a href="./createoffers.php"><b>Create Job Offers</b></a></li>
            <li><a class="active"><b>Compare Job Offers</b></a></li>
            <li><a href="./evaloffer.php"><b>Evaluate Offer</b></a></li>
            <li><a href="./converttohours.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a href="./viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
        </ul>           

    <table width="1200"> 
        <tr> 
            <td width="20%"> 
               <br><br><br>          
               <?php include '../includes/nav_links.php'; ?>            
            </td>
            <td width="80%" align="left"  valign="top" >
                <br><br>          
                <h1 id="caption_h1">Comparing job offers</h1>
            <form action="showoffers.php" method="POST">
            <table border="0" id="cmpformtable" width='800'>                
              <tr>
                   <td colspan="4" align="center">            
                       <h1 id="title_h1"><B>Offers Table</B></h1>
                   </td>
               </tr>
               <tr><td>
            <?php 
                  
            if ('$_POST') {   

                require_once('../includes/database.php');
                require_once('../includes/offersfunctions.php');

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
                $value = '';
                $max_offers = 0;
                $count = 0;
                while($row = mysqli_fetch_array($result)) {
                    $i = $i + 1;
                    $value = 'offer' . $i;
                    if (isset($_POST[$value])) {  
                        $count = $count + 1;
                        $Offer[$count] = $row;
                        // echo $count . ' ' . $Offer[$count]['Company'] .  ': ';
                        $weighted_value[$count] = evaluateoffer($row);
                        // echo 'Weighted value: ' .  $weighted_value[$count] . '<br><br>';
                    }
                }    
            $mysqli->close(); 
            
            // echo 'Number of offers: ' .  $count;
            display_offers($Offer,$weighted_value,$count);
                      
           } 
       ?>
            <tr>
                <td colspan='4' height="60" align="left" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>&nbsp;&nbsp;&nbsp;
                   <input type="button" value="BACK" 
                   onclick="window.location.href='javascript:history.back()'"                          
                   style="color: white; height: 32px; width: 125px; 
                   background-color:  DodgerBlue" />
                   
                   <input type="submit" value="PRINT"  
                   style="color: white; height: 32px; width: 125px; 
                   background-color:  DodgerBlue" />
                   <br><br>
                </td>
            </tr>

            </td>
            </tr>      
         </table>
       </td>
       </tr>      
    </table>
</div>     
   
</div>
</body>
</html>