<!-- Header end from BasicPageHeader.tpl -->
<html>
    <head>
        <title>CJOs </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>

    <div id="container">    2
       <div id="intro">
           <div id="pageHeader">
                   <div id="sitename">
                       <h1>&nbsp;&nbsp;CompareJobOffers</h1>
                   </div>
           </div>
       </div>
    </div>

    <?php 
      
        require_once('../includes/database.php'); 
    
        //Check connection       
        $mysqli = db_connect();
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }       
        
        $query   = "select * from profle p, company c, col cl ";
        $query  .= " where p.location=l.locatiom and p.ColID=cl.ColId and "; 
        $query  .= " p.UserID =" . $_SESSION['UserID'];       
        $result = $mysqli->query($query);
     ?>

    <form action="" method="GET">
    <table border="0" width="1200"  height='450'  style="background-color: #ffffff;">
        <tr>
        <td width='300'  valign="top">
            <table border="0" width='300' height='500' valign="top">
                <tr>
                     <td style="font-family: Times New Roman; font-size: 20px;" > 

                     </td>
                </tr>   
             </table>
        </td>  
        <td align="left" valign='top' style="background-color: white;" >
            <br><br>

            <table border="0" id="listformtable">
               <tbody>
               <tr>
                   <td colspan="5">
                       &nbsp;
                   </td>
               </tr>                    
               <tr>
                   <td colspan="5" align="center">            
                       <h1 id="login_h1">List of Registered Users</h1>
                   </td>
               </tr>
                <tr>
                   <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                        <b>Company</b>
                    </td>
                    <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                        <b>Position</b>
                    </td>
                    <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                        <b>Salary/Wage</b>
                    </td>
                    <td align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                        <b>Location</b>
                    </td>
                 </tr>
               
               <?php while($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td width="17%" height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                            <input type="hidden" name="userID" value="<?php echo $row['UserID']; ?>" />
                           <?php echo $row['Company']; ?>
                        </td>
                        <td width="17%" height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Posiiton']; ?>
                        </td>
                        <td width="17%" height="27px"  align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Username']; ?>
                        </td>
                        <td width="29%"  height="27px" align="left" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo $row['Email']; ?>
                        </td>
                        <td width="10%"  height="27px" align="center" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo '<a href="edituserprofile.php?valueID=' . $row['UserID'] . '">Edit</a>'; ?>
                        </td>
                        <td width="10%"  height="27px" align="center" valign="center" 
                            style="background-color: white; font-family: Times New Roman; font-size: 18px">
                           <?php echo '<a href="./db/TestDb.php?valueID=' . $row['UserID'] . '">Delete</a>'; ?>
                        </td>
                    </tr>
                <?php } ?>                
           </tbody>
           <br>
           <tr>
                <td align="left" colspan='5' height="60" align="center" valign="top" 
                   style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="button" value="CANCEL" 
                   onclick="window.location.href='javascript:history.back()'"                          
                   style="color: white; height: 35px; width: 90px; 
                   background-color:  DodgerBlue" />
                   &nbsp; &nbsp;
                   <input type="submit" value="CONTINUE" style="color: white; height: 35px; width: 90px; 
                   background-color:  DodgerBlue" />

                   <br>
                   <br>
                   <br>
                </td>
            </tr>
        </table>
       <br><br><br>
    </td>
    </tr>
    </table> 
    </form>

   <?php    
        include '../includes/footer.php'; 
        db_disconnect($mysqli);
   ?>  
    </body>
</html>