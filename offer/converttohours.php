<?php 
    include '../includes/header.php'; 
    
    require_once('../includes/database.php');
    session_start();
?>
  
<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a href="./home.php" 
                   style="background-color: #f2f2f2; color: black" >
                    <b>Home</b>
                </a>
            </li>
            <li><a href="./createoffers.php"><b>Create Job Offers</b></a></li>
            <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a href="./evaloffer.php"><b>Evaluate Offer</b></a></li>
            <li><a class="active"><b>Convert to Hourly Wages</b></a></li>
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
                <h1 id="caption_h1">Convert FT Offers to Hourly Rate</h1>
            <form action="buildMailer.php" method="POST">
            <table border="0" id="cmpformtable" width="600">                
              <tr>
                   <td colspan="4" align="center">            
                       <h1 id="title_h1"><B>Fulltime Conversion to Hourly Rate</B></h1>
                   </td>
               </tr>
            <?php 
                          
                $ID = $_SESSION['userID'];

                //Check connection       
                $mysqli = db_connect();
                /* check connection */
                if ($mysqli->connect_errno) {
                    printf("Connect failed: %s\n", $mysqli->connect_error);
                    exit();
                } 

                $query = 'select * from offer where UserID=' . $ID;
                $result = $mysqli->query($query);
                
            ?>
                    <tr>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>&nbsp;&nbsp;ID#</b>
                        </td>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Company</b>
                        </td>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Position</b>
                        </td>
                        <td align="right" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>FT Salary</b>&nbsp;&nbsp;
                        </td>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Hourly Rate</b>
                        </td>
                   </tr>               
            <?php 
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $i = $i + 1;
                    // Calculate hourly rates
                    
                    $HourlyRate =  $row['Salary']/52/$row['Normalworkhours'];
                   
            ?>
                   <tr>
                        <td width="10%" height="27px" align="center" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                            &nbsp;&nbsp;<a href="<?php echo ''; ?>" style="color: #660000"><?php echo $i; ?></a>
                        </td>
                        <td width="25%" height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Company']; ?>
                        </td>
                        <td width="35%" height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Position']; ?> &nbsp;
                        </td>
                        <td width="15%" height="27px" align="right" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php 
                                // let's print the international format for the en_US locale
                                echo $row['Salary'];                                                   
                           ?> &nbsp;
                        </td>
                        <td width="20%" height="27px" align="right" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php 
                                // let's print the international format for the en_US locale
                                echo '$' . floor($HourlyRate * 100)/100 . '/hr';                                                                            
                           ?> &nbsp;
                        </td>
                    </tr>
                <?php } 
                    $mysqli->close();
                  ?> 
                    <br>
             
                <tr>
                <td colspan='4' height="60" align="left" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>&nbsp;&nbsp;&nbsp;
                   <input type="button" value="BACK" 
                   onclick="window.location.href='javascript:history.back()'"                          
                   style="color: white; height: 32px; width: 125px; 
                   background-color:  DodgerBlue" />
                   <br><br>
                </td>
            </tr>
            </table>
            </form>
            </td>
        </tr>
    </table>
</div>     
   
</div>
</body>
</html>