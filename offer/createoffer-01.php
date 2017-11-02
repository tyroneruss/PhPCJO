    
    <?php include '../includes/header.php';

        require_once('../includes/database.php');         
        session_start();
                
        $offercount = $_SESSION['offer_count'];
        

        $mysqli = db_connect();

        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        } 
        
        $query  = "select * from profile ";             
        

        $query  = "select * from location ";             
        $result = $mysqli->query($query);

   ?>

    <form action="./db/insertofferDb.php" method="POST">
    <table border="0" width="1100" style="background-color: #ffffff;">
        <tr>
        <td width='275'  valign="top">
            <table border="0" width='275' height='500' valign="top">
                <tr>
                     <td style="font-family: Times New Roman; font-size: 20px;" > 
                     </td>
                </tr>   
             </table>
        </td>  
        <td  align="left"  valign='top' style="background-color: white;" >
            <br><br>
            <table border="0" id="cojformtable">
               <tbody>
                    <tr>
                        <td colspan="2">
                            
                        </td>
                    </tr>                    
                    <tr>                       
                        <td colspan="2" align="center">  
                            <h1 id="title_h1">Job Offer #<?php echo $offercount; ?> Compensation</h1>
                            <table border="0" width="600" style="background-color: white">
                                <tr>
                                  <td colspan="3" height="20" >

                                  </td>
                                </tr>                             
                                <tr height="30">
                                    <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                        Relocation<font color="red">*</font>
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                      <select name="relocation" style="width: 86px; height: 25px">
                                              <option value="No">No</option>
                                              <option value="Yes">Yes</option>
                                      </select>
                                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                       &nbsp;&nbsp;Reimburstment&nbsp;&nbsp;
                                       <input type="text" name="reemburstment" value="" size="8" />.00
                                    </td>
                                </tr>
                                <tr height="30">
                                    <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                        Base Salary<font color="red">*</font>
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                       <input type="text" name="baseSalary" value="" size="8" />.00
                                       &nbsp;&nbsp;&nbsp;&nbsp;Bonus Comm.
                                       &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="bonuscomp" value="" size="8" />.00
                                    </td>
                                </tr>
                                <tr height="30">
                                    <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                        Stock option
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                       <input type="text" name="pension" value="" size="8" /> (% of salary)
                                    </td>
                                </tr>
                                <tr height="30">
                                    <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                        Personal Time off<font color="red">*</font>
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                      <select name="pot" style="width: 85px; height: 25px">
                                              <option value="">None</option>
                                              <option value="1">1 Week</option>
                                              <option value="2">2 Weeks</option>
                                              <option value="3">3 Weeks</option>
                                              <option value="4">4+ Weeks</option>
                                      </select>
                                    </td>
                                </tr>
                                <tr height="30">
                                  <td colspan="3" >

                                  </td>
                                </tr>                             
                        </table>
                        </td>
                    </tr>
               </tbody>
           <br>
           <tr>
                <td colspan='2' height="60" align="center" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="button" value="BACK" 
                   onclick="window.location.href=''"                          
                   style="color: white; height: 32px; width: 135px; 
                   background-color:  DodgerBlue" />
                   
                   <input type="submit" value="CONTINUE"  
                   style="color: white; height: 32px; width: 135px; 
                   background-color:  DodgerBlue" />
                   <br><br>
                </td>
            </tr>
        </table>
       <br>
    </td>
    </tr>
    </table> 
    </form>

   <?php include '../includes/footer.php'; ?>
        
    </body>
</html>