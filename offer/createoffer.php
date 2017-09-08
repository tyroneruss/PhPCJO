
    <?php include '../includes/header.php'; ?>
      
    <form action="./db/checkloginDb.php" method="POST">
    <table border="0" width="1200" style="background-color: #ffffff;">
        <tr>
        <td width='290'  valign="top">
            <table border="0" width='290' height='500' valign="top">
                <tr>
                     <td style="font-family: Times New Roman; font-size: 20px;" > 
    <!--                     <a id="right_pane_a" href="http://www.indeed.com">Employment - Indeed Search</a>  
                         <br>
                         <br>
                         <a id="right_pane_a" href="" >Add Link Employment/Career </a>  -->
                     </td>
                </tr>   
             </table>
        </td>  
        <td align="left"  valign='top' style="background-color: white;" >
            <br><br>
            <table border="0" id="cojformtable">
               <tbody>
                    <tr>
                        <td colspan="2">
                            &nbsp;
                        </td>
                    </tr>                    
                    <tr>
                        
                        <td colspan="2" align="center">  
                            <strong>
                            <h1 id="login_h1">Create Job Offer #1</h1>
                            <table border="0" width="600" style="background-color: white">
                                <tr>
                                  <td colspan="3" height="20" >

                                  </td>
                                </tr>                             
                                <tr>
                                  <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

                                  </td>
                                  <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                      Industry<font color="red">*</font> 
                                  </td>
                                  <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
                                    <select name="industry" style="width: 314px">
                                            <option>Analysts</option>
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
                                </tr>                             
                                <tr>
                                  <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

                                  </td>
                                  <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                      Position Title<font color="red">*</font> 
                                  </td>
                                  <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
                                      <input type="text" name="position" value="" size="45" Required />
                                  </td> <!-- End first TD col -->  
                                </tr>                             
                                <tr>
                                  <td width="10%" height="25" style="font-family: Times New Roman; font-size: 15px">

                                  </td>
                                  <td width="20%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                      State<font color="red">*</font>
                                  </td>
                                  <td width="70%" height="25" style="font-family: Times New Roman; font-size: 15px" >
                                      <select name="state" style="width: 100px">
                                          <option value='unknown'>Select state</option>
                                          <option value="AL" >AL</option>
                                          <option value="AZ" >AZ</option>
                                          <option value="AK" >AK</option>
                                          <option value="CA" >CA</option>
                                          <option value="CO" >CO</option>
                                          <option value="CN" >CN</option>
                                          <option value="FL" >FL</option>
                                          <option value="GA" >GA</option>
                                      </select> 
                                      &nbsp;&nbsp;&nbsp;City:<font color="red">*</font>&nbsp;
                                      <input type="text" name="city" value="" size="19.5" Required />
                                  </td> <!-- End first TD col -->
                                </tr>                             
                                <tr>
                                   <td width="5%" height="25">

                                   </td>
                                    <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                        Position
                                    </td>
                                    <td width="65%" height="25">
                                        <input type="text" name="Position" value="" size="11" />
                                    </td>
                                </tr>
                                <tr>
                                    <td width="5%" height="25" style="font-family: Times New Roman; font-size: 14px">
                                    </td>
                                    <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                       Mobile Phone<font color="red">*</font>
                                    </td>
                                    <td width="65%" height="25">
                                        <input type="text" name="mmobilephone" value="" size="11" />
                                    </td>
                                </tr>
                                <tr>
                                   <td width="5%" height="25" style="font-family: Times New Roman; font-size: 17px">

                                   </td>
                                    <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                        Home Phone:
                                    </td>
                                    <td width="65%" height="25">
                                        <input type="text" name="homephone" value="" size="11" />
                                    </td>
                                </tr>
                                <tr>
                                   <td width="5%" height="25" style="font-family: Times New Roman; font-size: 17px">

                                   </td>
                                    <td width="30%" height="25" style="font-family: Times New Roman; font-size: 15px">
                                       Birthday<font color="red">*</font>
                                    </td>
                                    <td width="65%" height="25">
                                        <input type="text" name="birthdate" value="" size="12"  />&nbsp;(mm/dd/yyyy)
                                    </td>
                                </tr>
                                <tr>
                                  <td colspan="3" height="20" >

                                  </td>
                                </tr>                             
                            <strong>
                          </table>
                        </td>
                    </tr>
               </tbody>
           <br>
           <tr>
                <td colspan='2' height="60" align="center" valign="top" 
                  style="font-family: Times New Roman; font-size: 20px;" >
                   <br>
                   <input type="button" value="ADD OFFER" 
                   onclick="window.location.href='registeruser.php'"                          
                   style="color: white; height: 35px; width: 150px; 
                   background-color:  DodgerBlue" />
                   
                   <input type="submit" value="SUBMIT "  
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