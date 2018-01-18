<!-- Header end from BasicPageHeader.tpl -->

<html>
    <head>
        <title>CJO </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/tabstyle.css">
        <?php 

            require_once('../includes/database.php');
            session_start();
            
        ?>
    </head>
   
<body>

<div id="container">
   <div id="intro">
       <div id="pageHeader">
               <div id="sitename">
                   <h1>&nbsp;&nbsp;CompareJobOffers</h1>
               </div>          
       </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
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
                require_once('../includes/functions.php');

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
                while($row = mysqli_fetch_array($result)) {
                    $i = $i + 1;

                    $value = 'offer' . $i;
                    if (isset($_POST[$value])) {            

                        $Offer[$i] = $row;
                        // echo $i . ' ' . $Offer[$i]['Company'] .  ': ';
                        $weighted_value[$i] = evaluateoffer($row);
                        // echo 'Weighted value: ' . $weighted_value . '<br><br>';
                        $max_offers = $max_offers + 1;
                    }
                }    
               
                if ($max_offers == 2) {
                    echo 
                    '<tr style="background-color: white;">
                        <td width="30%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Category</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>' . $Offer[1]["Company"] . '</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>' . $Offer[2]["Company"] . '</b>
                        </td>
                    </tr> 
                    <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Position</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Position"] . 
                        '</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Position"] .
                       '</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td c width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Salary</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                            . floor($Offer[1]["Salary"]/1000) .             
                        ',000.00</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                            . floor($Offer[2]["Salary"]/1000) .
                       ',000.00</td>
                    </tr>                       
                    <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Signing bonus</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                            . floor($Offer[1]["Signbonus"]/1000) .             
                        ',000.00</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                            . floor($Offer[2]["Signbonus"]/1000) .             
                        ',000.00</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Year end bonus</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Yearendbonus"] .             
                        '</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Yearendbonus"] .             
                        '</td>
                     </tr>
                      <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Personal time off</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Pto"] .             
                        ' weeks</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Pto"] .             
                        ' weeks</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Stock options</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Stocks"] .             
                        '</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Stocks"] .             
                        '</td>
                     <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>401k %-Matching</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["401k"] .             
                        '%</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["401k"] .             
                        '%</td>
                     </tr>
                     <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Pension</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Pension"] .             
                        '</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Pension"] .             
                        '</td>
                    </tr>
                     <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Medical offered</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Medicaloffered"] .             
                        '</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Medicaloffered"] .             
                        '</td>
                    </tr>
                     <tr style="background-color: white;">
                        <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Promotion Opport.</b>
                        </td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["PromotionOpt"] .             
                        '</td>
                        <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["PromotionOpt"] .             
                        '</td>
                    </tr>
                     <tr style="background-color: lightgrey;">
                        <td  width="30%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Weighted Value</b>
                        </td>
                        <td  width="40%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>'
                            . $weighted_value[1] .             
                        '</b></td>
                        <td  width="40%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>' 
                            . $weighted_value[2] .             
                        '</b></td>
                    </tr>';
                }
                if ($max_offers == 3) {
                    echo 
                    '<tr style="background-color: white;">
                        <td width="22%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Category</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>' . $Offer[1]["Company"] . '</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>' . $Offer[2]["Company"] . '</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>' . $Offer[3]["Company"] . '</b>
                        </td>
                    </tr> 
                    <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Position</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Position"] . 
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Position"] .
                       '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Position"] .
                       '</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td c width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Salary</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                            . floor($Offer[1]["Salary"]/1000) .             
                        ',000.00</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                            . floor($Offer[2]["Salary"]/1000) .
                       ',000.00</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                            . floor($Offer[3]["Salary"]/1000) .
                       ',000.00</td>
                    </tr>                       
                    <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Signing bonus</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                            . floor($Offer[1]["Signbonus"]/1000) .             
                        ',000.00</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                            . floor($Offer[2]["Signbonus"]/1000) .             
                        ',000.00</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                            . floor($Offer[3]["Signbonus"]/1000) .             
                        ',000.00</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Year end bonus</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Yearendbonus"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Yearendbonus"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[3]["Yearendbonus"] .             
                        '</td>
                     </tr>
                      <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Personal time off</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Pto"] .             
                        ' weeks</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Pto"] .             
                        ' weeks</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Pto"] .             
                        ' weeks</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Stock options</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Stocks"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Stocks"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[3]["Stocks"] .             
                        '</td>
                     <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>401k %-Matching</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["401k"] .             
                        '%</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["401k"] .             
                        '%</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[3]["401k"] .             
                        '%</td>
                     </tr>
                     <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Pension</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Pension"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Pension"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[3]["Pension"] .             
                        '</td>
                    </tr>
                     <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Medical offered</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["Medicaloffered"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["Medicaloffered"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[3]["Medicaloffered"] .             
                        '</td>
                    </tr>
                     <tr style="background-color: white;">
                        <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Promotion Opport.</b>
                        </td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                            . $Offer[1]["PromotionOpt"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[2]["PromotionOpt"] .             
                        '</td>
                        <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                            . $Offer[3]["PromotionOpt"] .             
                        '</td>
                    </tr>
                     <tr style="background-color: lightgrey;">
                        <td  width="22%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                            <b>Weighted Value</b>
                        </td>
                        <td  width="26%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>'
                            . $weighted_value[1] .             
                        '</b></td>
                        <td  width="26%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>' 
                            . $weighted_value[2] .             
                        '</b></td>
                        <td  width="26%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>' 
                            . $weighted_value[3] .             
                        '</b></td>
                    </tr>';
                }
            $mysqli->close();    
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