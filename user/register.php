
    <?php include '../includes/header.php'; ?>
      
    <form action="./db/insertuserDb.php" method="POST">
    <table border="0" width="1200" style="background-color: #ffffff;">
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
            <table border="0" id="loginformtable">
               <tbody>
               <tr>
                   <td colspan="2">
                       &nbsp;
                   </td>
               </tr>                    
               <tr>
                   <td colspan="2" align="center">            
                       <h1 id="login_h1">Register User</h1>
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
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <?php
                    if(!empty($_GET['message'])) {
                        echo '<tr><td align="center" colspan="2" style="color: red; font-family: Times New Roman; font-size: 20px;">&nbsp;';                      
                        $message = $_GET['message'];
                    echo '<font color="red">'; echo $message; echo '</font><br></td></tr>';
                    }                       
                ?>                   
                <tr>
                    <td id="user_td" width="35%" align="right" height="30" valign="center" >
                        Username<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input id="user_input" type="text" name='username' size="25" Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        Email<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input id="user_input" type="text" name='email' size="25"  Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td id="user_td" width="35%" align="right" height="30" valign="center" >
                        Password<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input id="user_input"  type="password" name="password" size="20" required="Password is required field" />
                    </td>
                </tr>                    
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td id="user_td" width="35%" align="right" height="30" valign="center" >
                        Confirm Password<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input id="user_input" type="password" name="password1" size="20" required="Password is required field" />
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