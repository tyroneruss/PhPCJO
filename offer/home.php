<html>
    <head>
        <title>CJO </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/tabstyle.css">
    </head>
   
<body>

<?php
    session_start();
    $FirstName = $_SESSION["firstname"];                      

?>
<div id="container">
   <div id="intro">
       <div id="pageHeader">
               <div id="sitename">
                   <h1>&nbsp;&nbsp;CompareJobOffers</h1>
               </div>          
       </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>

<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a class="active" href=""><b>Home</b></a></li>
            <li><a href="./createoffers.php"><b>Create Job Offers</b></a></li>
            <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a href="./evaloffer.php"><b>Evaluate an Offer</b></a></li>
            <li><a href="./convertoffers.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a href="./viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
        </ul>           
   
    <table width="1200"> 
        <tr> 
            <td width="20%" align="left" valign="top" > 
                <br><br><br>          
                <?php include '../includes/nav_links.php'; ?>            
            </td>
            <td width="50%" align="left">
                <table width="650"> 
                    <tr>
                        <td>
                            <br><h1 id="caption_h1">Get   Started with Comparing Offers</h1>
                        </td>
                    </tr>
                    <tr>
                        <td  style="font-family: Times New Roman; font-size: 16px">
                            <br>
                            <font size="4" color="darkgrey"><b>Comparing Job Offers</b></font>
                            <br>             
                               Discuss the purpose of the site and how the evaluation and comparing of offers work.  A lot 
                               content will added here.
                        </td>
                    </tr>
                    <tr>
                        <td  height='50' style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>ADD CONTENT</b></font>
                            <br>              
                        </td>
                    </tr>
                    <tr>
                        <td  height='50' style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>ADD CONTENT</b></font>
                            <br>              
                        </td>
                    </tr>
                    <tr>
                        <td  height='50' style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>ADD CONTENT</b></font>
                            <br>              
                        </td>
                    </tr>
                    <tr>
                        <td  height='50' style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>ADD CONTENT</b></font>
                            <br>              
                        </td>
                    </tr>
                    <tr>
                        <td  height='50' style="font-family: Times New Roman; font-size: 16px">
                            <br><br>
                            <font size="4" color="darkgrey"><b>ADD CONTENT</b></font>
                            <br>              
                        </td>
                    </tr>
                </table>
            </td>
            <form action="../index.php" method="POST">              
            <td width="30%" align="center" valign="top" style="color: black; font-family: Times New Roman; font-size: 15px">                
                <table>
                    <tr>
                        <td>
                            <br><br><br>
                            <b>Welcome,<?php echo $FirstName; ?></b>
                            <br>
                            <input id="inputbutton" onclick="window.location.href='../index.php'"  
                            type="button" value="Logout" />                          
                       </td>                  
                    </tr>
                </table>
            </td>
            </form>
        </tr>
    </table>
</div>
</body>
</html>