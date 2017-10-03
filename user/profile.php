<?php 

    include '../includes/header.php'; 
    require_once('../includes/database.php');
      
    session_start();

    $mysqli = db_connect();
    
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 
    
    $query_user  = "SELECT UserID FROM user WHERE Username='" . $_SESSION["users_username"] ."'";            
    $result = $mysqli->query($query_user);
    $getID = mysqli_fetch_assoc($result);
    $_SESSION["userID"] = $getID['UserID'];

    $free_results = mysqli_free_result($result);
    
    $query  = "SELECT * FROM location ";             
    $result = $mysqli->query($query);

?>
    
    <form action="./db/insertprofileDb.php" method="POST">
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
                       <h1 id="login_h1">Create profile</h1>
                   </td>
               </tr>
               <tr>
                   <td colspan="2" align="center" height="30" valign="center" style="font-family: Times New Roman; font-size: 18px;"  >
                       <font color="black">
                            Fields marked with a red asterisk (<font color="red">*</font>) are required
                       </font>
                   </td>
                </tr>
               <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                     
                    </td>
                    <td id="user_td"  width="70%">
                        <input type="radio" name="gender" value="Male"   style="height: 15px; width: 15px"/>
                        Male
                        <input type="radio" name="gender" value="Female" style="height: 15px; width: 15px"/>
                        Female
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="8" >
                    </td>
                </tr>
                <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        First name<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input id="user_input" type="text" name='firstname' placeholder="First name" size="20"  Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="8" >
                    </td
                </tr>
               <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        Last name<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <input id="user_input" type="text" name='lastname' size="20" placeholder="Last name" Required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="8" >
                    </td
                </tr>
                <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        Education <font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <select name="education" placeholder="Education" style="font-family: Times New Roman; font-size: 15px; height: 20px; width: 150px" >
                            <option value="1">Diploma/GED</option>
                            <option value="2">BA/BS Degree</option>
                            <option value="3">MA/MS/MBA</option>              
                            <option value="4">PhD</option>
                            <option value="4">JD</option>
                        </select>     
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height="8" >
                    </td
                </tr>
                <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        Location<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >                      
                        <select name="citystateID" style="font-family: Times New Roman; font-size: 15px; height: 20px; width: 150px" >
                            <?php while($row = mysqli_fetch_array($result)) { ?>
                            <option value="<?php echo $row['LocationID']; ?>"><?php echo $row['Name']; ?>  </option>
                            <?php } ?>
                        </select>     
                   </td>
                </tr>
                <tr>
                    <td colspan="2" height="8" >
                    </td
                </tr>
                <tr>
                    <td id="user_td" width="30%" align="right" height="30" valign="center" >
                        Employed<font color="red">*</font>&nbsp;
                    </td>
                    <td  width="70%" >
                        <select id="location" name="employed" style="font-family: Times New Roman; font-size: 15px; height: 20px; width: 100px" >
                            <option value="Yes">Yes</option>
                            <option value="No">Mo</option>
                        </select>     
                    </td>
                </tr>
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