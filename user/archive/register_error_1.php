
    <?php include '../includes/header.php'; 
        session_start();
    
        $fullname = $_SESSION["users_fullname"];         
        $username = $_SESSION["users_username"];           
        $email    = $_SESSION["users_email"];
       
    ?>
      
    <form action="profile.php" method="POST">
    <table border="0" width="1200" style="background-color: #ffffff;">
        <tr>
        <td width='350'  valign="top">
            <table border="0" width='350' height='500' valign="top">
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
                       <h1 id="login_h1">Welcome - Register user</h1>
                   </td>
               </tr>
               <tr>
                   <td colspan="2" align="center" height="50" valign="center" style="font-family: Times New Roman; font-size: 20px;"  >
                       <font color="black">
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                       </font>
                   </td>
                </tr>
                <?php
                    echo '<tr><td align="center" colspan="2" style="color: red; font-family: Times New Roman; font-size: 20px;">&nbsp;';                      
                    if(!empty($_GET['message'])) {
                        $message = $_GET['message'];
                    }                       
                    echo '<font color="red">'; echo $message; echo '</font><br></td></tr>';
                ?>                   
                <tr>
                    <td width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Fullname<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input type="text" name='fullName'  value="<?php echo $fullname; ?>" size="25"  style="font-family: Times New Roman; font-size: 20px"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Username<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input type="text" name='username' value="<?php echo $username; ?>" size="25"  style="font-family: Times New Roman; font-size: 20px" Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td width="30%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Email<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input type="text" name='fullName' value="<?php echo $email; ?>" size="25"  style="font-family: Times New Roman; font-size: 20px"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td  width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Password<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input type="password" name="password" size="20"   style="font-family: Times New Roman; font-size: 20px"/>
                    </td>
                </tr>                    
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td  width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Confirm Password<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input type="password" name="password" size="20"   style="font-family: Times New Roman; font-size: 20px"/>
                    </td>
                </tr>                    
           </tbody>
           <br>
           <tr>
                <td colspan='2' height="60" align="center" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="button" value="BACK" 
                   onclick="window.location.href='javascript:history.back()'"                          
                   style="color: white; height: 35px; width: 125px; 
                   background-color:  DodgerBlue" />
                   &nbsp;&nbsp;
                   <input type="submit" value="CONTINUE"  
                   style="color: white; height: 35px; width: 125px; 
                   background-color:  DodgerBlue" />

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