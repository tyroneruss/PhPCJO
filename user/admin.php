<!-- Header end from BasicPageHeader.tpl -->
<html>
    <head>
        <title>Ass title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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

     
    <form action="./db/checkloginDb.php" method="POST">
    <table border="0" width="1200"  height='450'  style="background-color: #ffffff;">
        <tr>
        <td width='290'  valign="top">
            <table border="0" width='290' height='450' valign="top">
                <tr>
                     <td style="font-family: Times New Roman; font-size: 20px;" > 
                     </td>
                </tr>   
             </table>
        </td>  
        <td align="left" valign='top' style="background-color: white;" >
            <br><br>

            <table border="0" id="loginformtable">
               <tbody>
               <tr>
                   <td colspan="2">
                       &nbsp;
                   </td>
               </tr>                    
               <tr>
                   <td colspan="2" align="center">            
                       <h1 id="login_h1">Welcome - Login please</h1>
                   </td>
               </tr>
               <tr>
                   <td colspan="2" align="center" height="40" valign="center" style="font-family: Times New Roman; font-size: 20px;"  >
                       <font color="black">
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                       </font>
                   </td>
                </tr>
                   <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>Enter email:&nbsp;
                       </td>
                       <td><input type="text" name='username' size="30" /></td>
                   </tr>
                 <tr>
                       <td width="40%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                           <font color="red">*</font>Enter password:&nbsp;
                       </td>
                       <td><input type="password" name="password" size="30"  /></td>
                   </tr>                    
           </tbody>
           <br>
           <tr>
                <td colspan='2' height="60" align="center" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="button" value="ADMIN" 
                   onclick="window.location.href='listusers.php'"                          
                   style="color: white; height: 35px; width: 150px; 
                   background-color:  DodgerBlue" />

                   <input type="submit" value="LOGIN"  
                   style="color: white; height: 35px; width: 125px; 
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
    &nbsp;&nbsp;

   <?php include '../includes/footer.php'; ?>
        
    </body>
</html>