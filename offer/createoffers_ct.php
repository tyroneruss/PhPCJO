<?php include '../includes/header.php'; ?>            

<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a href="./home.php" 
                   style="background-color: #f2f2f2; color: black" >
                    <b>Home</b>
                </a>
            </li>
            <li><a class="active" ><b>Create Job Offers</b></a></li>
            <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a href="./evaloffer.php"><b>Evaluate an Offer</b></a></li>
            <li><a href="./converttohours.php"><b>Convert to Hourly Wages</b></a></li>
            <li><a href="./viewprintoffers.php"><b>View or Print Offer(s)</b></a></li>
        </ul>              
        <table width="1200"> 
            <td width="20%">                 
                <br><br><br>          
            <?php include '../includes/nav_links.php'; ?>                          
            </td>
            <td width="80%" align="left"  valign="top" >
                <br><br>
                <h1 id="caption_h1">Create Job Offers</h1>
                <table border="0" id="cojformtable">                  
                    <tr>                       
                        <td colspan="2" align="center">                    
                          <h1 id="title_h1">Enter Job Compensation</h1>'                                   
                          <form action="./createoffers_2.php" method="POST" >
                          <table border="0" width="600" style="background-color: white">
                            <tr >
                                <td colspan="3" height="20">
                                </td>
                            </tr>                             
                            <tr height="30">
                                <td width="10%" >
                                </td>
                                <td width="25%" style="font-family: Times New Roman; font-size: 15px">
                                      Hourly Wage<font color="red">*</font> 
                                 </td>
                                 <td width="65%" style="font-family: Times New Roman; font-size: 15px">
                                      <input type="text" name="salary" value="" size="7" />/Hour                                   
                                 </td>
                            </tr>
                            <tr height="30">
                                <td width="10%" >
                                </td>
                                <td width="25%" style="font-family: Times New Roman; font-size: 15px">
                                      Length of Contract<font color="red">*</font> 
                                 </td>
                                 <td width="65%" style="font-family: Times New Roman; font-size: 15px">
                                      <input type="text" name="lrncontract" value="" size="7" /> (Months)                                  
                                 </td>
                            </tr>
                            <tr height="30">
                                <td width="10%" >
                                </td>
                                <td width="25%" style="font-family: Times New Roman; font-size: 15px">
                                    Contract to Perm<font color="red">*</font>
                                </td>
                                <td colspan='65#'  weight='40%' height='30'> 
                                    <select name="promotion" style="width: 55px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>                          
                                <td width="10%" >
                                </td>
                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                    Normal work week<font color="red">*</font>
                                </td>
                                <td colspan='79#'  weight='40%' height='30'> 
                                    <select name="normalworkhours" style="width: 55px; height: 25px" required >
                                        <option value="40">40</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                        <option value="60">60</option>
                                        <option value="65">65</option>
                                    </select> (Hours)
                                  </td>
                            </tr>
                            <tr height="30">
                                <td width="10%" >
                                </td>
                                <td width="25%" style="font-family: Times New Roman; font-size: 15px">
                                    Relocating<font color="red">*</font>
                                </td>
                                <td colspan='65#'  weight='40%' height='30'> 
                                    <select name="relocating" style="width: 55px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                  </td>
                            </tr>
                            <tr >
                                <td colspan="2" height="20">
                                </td>
                            </tr>                             
                        </table>
                        </td>
                    </tr>
                    <tr>
                         <td colspan='2' height="60" align="center" valign="top" 
                           style="font-family: Times New Roman; font-size: 20px;" >
                            <br>
                            <input type="button" value="BACK" 
                            onclick="window.location.href='javascript:history.back()'"                          
                            style="color: white; height: 32px; width: 135px; 
                            background-color:  DodgerBlue" />

                            <input type="submit" value="CONTINUE"  
                            style="color: white; height: 32px; width: 135px; 
                            background-color:  DodgerBlue" />
                            <br><br>
                         </td>
                    </tr>
            </table>
        </form>
        </td>
        </tr>
    </table>
</div>

</div>
</body>
</html>