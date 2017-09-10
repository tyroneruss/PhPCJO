
    <?php include '../includes/header.php'; ?>
      
    <form action="./db/checkloginDb.php" method="POST">
    <table border="0" width="1100" style="background-color: #ffffff;">
        <tr>
        <td width='275'  valign="top">
            <table border="0" width='275' height='500' valign="top">
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
        <td  align="left"  valign='top' style="background-color: white;" >
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
                            <h1 id="login_h1">Let's Get Started</h1>
                            <table border="0" width="400" style="background-color: white">
                                <tr>
                                  <td colspan="3" height="20" >

                                  </td>
                                </tr>                             
                                <tr>
                                  <td width="20%" align="right" height="25" style="font-family: Times New Roman; font-size: 25px">
                                      <i>Offer type</i>
                                  </td>
                                  <td width="40%" align="center" height="25" >
                                       <select name="0ffertype" style="font-size: 22px; font-family:  Times New Roman;width: 140px">
                                          <option style="font-size: 20px; font-family: Arial">Salary</option>
                                          <option style="font-size: 20px; font-family: Arial">Contract</option>
                                       </select>                                   
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
                   <input type="button" value="CANCEL" 
                   onclick="window.location.href='registeruser.php'"                          
                   style="color: white; height: 35px; width: 150px; 
                   background-color:  DodgerBlue" />
                   
                    <input type="submit" value="CONIINUE "  
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