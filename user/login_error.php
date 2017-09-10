
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
                   <td colspan="2" align="center">            
                       <h1 id="login_h1">Welcome - Login please</h1>
                   </td>
               </tr>
               <tr>
                   <td align="center" colspan="2" style="color: red; font-family: Times New Roman; font-size: 20px;">
                       &nbsp;
                        <?php
                            if(!empty($_GET['message'])) {
                                $message = $_GET['message'];
                                echo $message;
                            }                       
                        ?>
                       <font color="red"><?php $message ?></font>
                       <br>
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
                   <input type="submit" value="LOGIN"  
                   style="color: white; height: 35px; width: 125px; 
                   background-color:  DodgerBlue" />

                   <input type="button" value="REGISTER" 
                   onclick="window.location.href='registe.php'"                          
                   style="color: white; height: 35px; width: 150px; 
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