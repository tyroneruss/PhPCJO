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
            <table width="650"> 
                <tr>
                    <td width="80%" align="left">    
                        <h1 id="caption_h1">Converting Full Time Pay to Hourly Rate</h1>  
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
                            <b>Select</b>
                        </td>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>&nbsp;&nbsp;Item#</b>
                        </td>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Company</b>
                        </td>
                        <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                            <b>Position</b>
                        </td>
                   </tr>               
            <?php 
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $i = $i + 1;
            ?>
                   <tr>
                        <td width="5%" height="27px" align="center" style="background-color: white;"> 
                            <input type="checkbox" name="offer<?php echo $i; ?>"
                             value="ON" style="height: 20px; width: 20px"/> 
                        </td>
                        <td width="10%" height="27px" align="center" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                            &nbsp;&nbsp;<a href="<?php echo ''; ?>" style="color: #660000"><?php echo $i; ?></a>
                        </td>
                        <td width="40%" height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Company']; ?>
                        </td>
                        <td width="40%" height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Position']; ?> &nbsp;
                        </td>
                    </tr>
                <?php } 
                    $mysqli->close();
                  ?> 
            </table>

            </td>
        </tr>
    </table>
        
    </div>
</div>
</body>
</html>