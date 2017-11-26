<!-- Header end from BasicPageHeader.tpl -->

<html>
    <head>
        <title>CJO </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/tabstyle.css">
        <link rel="stylesheet" type="text/css" href="../css/userstyle.css">
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
    <table width="1200"> 
        <tr> 
            <td width="20%" align="left" valign="top" > 
                <br><br><br>          
                <?php include '../includes/nav_links.php'; ?> 
            </td>
            <td width="80%" align="left" valign="top" > 
            <form action="./db/checkloginDb.php" method="POST">              
            <table> 
                <tr>
                    <td>
                        <br><h1 id="caption_h1">Welcome to Compare Job Offers</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="userform_bg" align="center">
                            <h1 id="user_h1">Database error found</h1>
                            <span> 
                                   <div id="login_input" >
                                        Fields marked with a red asterisk (<font color="red">*</font>) are required
                                    <?php
                                            if(!empty($_GET['message'])) {
                                                $message = $_GET['message'];
                                                echo '<br><font color="red" size="4">' . $message . '</font>';
                                            }                       
                                    ?>
                                    </div>

                            </span>
                            <div id="inputwrapper">  
                                <br> Click back button to try again!
                               <input id="inputbutton" onclick="window.location.href='./home.php'"  
                                      type="button" value="BACK" />                   
                            </div>
                        </div>                                  
                    </td>
                </tr>
             </table>         
        </div>
        </form>  
        </td>
        </tr>
    </table>
</div>
</body>
</html>