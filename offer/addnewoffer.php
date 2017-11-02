    
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

        $query  = "select * from location ";             
        $result = $mysqli->query($query);

   ?>

    <form action="./db/addofferDb.php" method="POST">
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
                            <h1 id="title_h1">Create Job Offer #<?php echo $offercount; ?></h1>
                            <table border="0" width="600" style="background-color: white">
                                <tr>
                                  <td colspan="3" height="20" >

                                  </td>
                                </tr>                             
                               <tr height="30">
                                    <td width="10%" >
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                        Offer Type<font color="red">*</font>
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                        <select name="state" style="width: 100px;  height: 25px">
                                                  <option value="FT" >Full time</option>
                                                  <option value="CNT" >Contract</option>
                                        </select> 
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        Location<font color="red">*</font>
                                        <select name="citystateID" style="width: 120px; height: 25px" >
                                            <option value="">--- Select one ---</option>
                                            <?php while($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row['LocationID']; ?>"><?php echo $row['Name']; ?>  </option>
                                            <?php } ?>
                                        </select>
                                   </td>
                               </tr>
                               <tr height="30">
                                    <td width="10%" >
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                      Industry<font color="red">*</font> 
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                      <select name="industry" style="width: 306px; height: 25px">
                                             <option value="">--- Select one ---</option>
                                              <option>Telecommunications</option>
                                              <option>Universities and Academy</option>
                                              <option>Technology Companies</option>
                                              <option>Health IT</option>
                                              <option>Health IT</option>
                                              <option>Management & Project Management</option>
                                              <option>Mobile Development</option>
                                              <option>Network/System Design & Administration</option>
                                              <option>Programming/Software Engineering</option>
                                              <option>Security</option>
                                      </select>
                                    </td>
                                </tr>
                                <tr height="30">
                                    <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                        Discipline<font color="red">*</font>
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                    <select name="discipline" style="width: 306px; height: 25px">
                                            <option>--- Select one ---</option>
                                            <option>Business Analysts</option>
                                            <option>Database Development, Admin & Business Logic</option>
                                            <option>Engineering</option>
                                            <option>Enterprise Systems Analysis & Integration</option>
                                            <option>Health IT</option>
                                            <option>Management & Project Management</option>
                                            <option>Mobile Development</option>
                                            <option>Network/System Design & Administration</option>
                                            <option>Programming/Software Engineering</option>
                                            <option>Security</option>
                                            <option>Technical Support</option>
                                            <option>Technical Writing</option>
                                            <option>Web Development & Administration</option>
                                    </select>
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
                                    </td>
                                </tr>
                                <tr height="30">
                                    <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                       Houry wage<font color="red">*</font>
                                    </td>
                                    <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                       <input type="text" name="hourly" value="" size="2" />/hour
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