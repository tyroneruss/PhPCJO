
<?php include '../includes/header.php'; 

    if ('$_POST') {   
        session_start();
        /*session created*/
            $_SESSION["users_fullname"]  = $_POST['fullname'];           
            $_SESSION["users_username"]  = $_POST['username'];           
            $_SESSION["users_email"]     = $_POST['email'];

        if ($_POST["password"] === $_POST["password1"]) {
           // success!            /*session is started if you don't write this line can't use $_Session  global variable*/
            $_SESSION["users_password"] = $_POST['password'];
            header('Location: ./profile.php');                         
        }
        else {
            header('Location: ./register_error.php?message=Passwords does not match, please re-enter...');             
        }
           // failed :(
    }   
?>
      
    <form action="./db/insertuser.php" method="POST">
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
                       <h1 id="login_h1">Welcome - complete profile</h1>
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
                    <td width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                        Gender<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <input type="radio" name="gender" value="Male" Required style="height:13px; width: 15px;"/>Male
                        <input type="radio" name="gender" value="Female" Required style="height:13px; width: 15px;"/>Female                                    
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                        Birthdate&nbsp;&nbsp;&nbsp;
                    </td>
                    <td  width="65%" >
                        <input type="date" name='dob' size="12"  style="font-family: Times New Roman; font-size: 18px"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td  width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px">
                        Employed<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%">                       
                        <select name="employed" style="font-size: 15px; font-family:  Times New Roman;width: 100px" >
                            <option style="font-size: 15px; font-family:  Times New Roman; width: 100px">Yes</option>
                            <option style="font-size: 15px; font-family:  Times New Roman; width: 100px">No</option>
                        </select>
                    </td>
                </tr>                    
                <tr>
                    <td colspan="2" height="10" >
                    </td>
                </tr>
                <tr>
                    <td  width="35%" align="right" height="30" valign="center" style="font-family: Times New Roman; font-size: 20px">
                        Education level<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="65%" >
                        <select name="employed" style="font-size: 15px; font-family:  Times New Roman;width: 200px" >
                            <option style="font-size: 15px; font-family:  Times New Roman; width: 200px">High School Diploma</option>
                            <option style="font-size: 15px; font-family:  Times New Roman; width: 200px">Bachelor Degree</option>
                            <option style="font-size: 15px; font-family:  Times New Roman; width: 200px">Master</option>
                            <option style="font-size: 15px; font-family:  Times New Roman; width: 200px">PhD</option>
                        </select>
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