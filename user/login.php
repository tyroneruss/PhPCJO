
    <?php include '../includes/header.php'; ?>

    <form action="./db/checkloginDb.php" method="POST">
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
                   <td colspan="2"  align="center">            
                       <h1 id="login_h1">Please Login</h1>
                   </td>
               </tr>
               <tr>
                   <td  align="center" colspan="2" style="color: red; font-family: Times New Roman; font-size: 15px;">
                       &nbsp;
                        <?php
                            if(!empty($_GET['message'])) {
                                $message = $_GET['message'];
                                echo $message;
                            }                       
                        ?>
                       <font color="red"><?php $message ?></font>
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
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        Username<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input id="user_input" type="text" name='username' size="20"  Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td  id="user_td" width="30%" align="right" height="30" valign="center" >
                        Password<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input id="user_input" type="password" name="password" size="20"  Required />
                    </td>
                </tr>                    
           </tbody>
           <br>
           <tr>
                <td colspan='2' height="60" align="center" valign="top">
                   <br>
                   <input type="submit" value="LOGIN"  
                   style="color: white; height: 35px; width: 300px; 
                   background-color:  DodgerBlue" />
                </td> 
           </tr>
           <tr>  
               <td colspan="2" align="center">
                   <font color="black" size="3">New to CompareJobOffers? 
                   <a href="register.php" style="color: darkblue" />
                   Create an account or <br><a href="process.php" style="color: darkblue" />
                   you forgot your password</font></a>
                   <br>
                </td>
            </tr>
        </table>
       <br><br><br>
    </td>
    </tr>
    </table> 
    </form>
        
    </body>
</html>