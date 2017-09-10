
    <?php include '../includes/header.php'; ?>
      
    <form action="./db/checkloginDb.php" method="POST">
    <table border="0" width="1200" style="background-color: #ffffff;">
        <tr>
        <td width='290'  valign="top">
            <table border="0" width='290' height='500' valign="top">
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
                   <td colspan="2" align="center" height="50" valign="center" style="font-family: Times New Roman; font-size: 20px;"  >
                       <font color="black">
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                       </font>
                   </td>
                </tr>
                <tr>
                    <td width="30%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Username<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input type="text" name='username' size="26"  style="font-family: Times New Roman; font-size: 20px"  Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td  width="30%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Password<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input type="password" name="password" size="26"   style="font-family: Times New Roman; font-size: 20px" Required />
                    </td>
                </tr>                    
           </tbody>
           <br>
           <tr>
                <td colspan='2' height="60" align="center" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="submit" value="LOGIN"  
                   style="color: white; height: 35px; width: 125px; 
                   background-color:  DodgerBlue" />

                   <input type="button" value="REGISTER" 
                   onclick="window.location.href='register.php'"                          
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