<?php 
    include '../includes/header.php'; 

    session_start();

    $_SESSION['Offertype'] = $_POST['offertype'];      
    $_SESSION['Company']   = $_POST['company'];
    $_SESSION['Position']  = $_POST['position'];
    $_SESSION['Area']      = $_POST['area'];
    $_SESSION['State']     = $_POST['state'];
    $_SESSION['City']      = $_POST['city'];

    if($_POST['offertype'] == 'CT') {
        header('Location: ./createoffers_ct.php'); 
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

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
                          <h1 id="title_h1">Enter Job Compensation</h1>                                 
                          <form action="./db/insertFTofferDb.php" method="POST" >
                          <table border="0" width="600" style="background-color: white">
                            <tr >
                                <td colspan="3" height="20">
                                </td>
                            </tr>                             
                            <tr height='35'>
                                <td width="10%" >
                                </td>
                                <td width="15%" style="font-family: Times New Roman; font-size: 15px">
                                      Salary<font color="red">*</font> 
                                 </td>
                                 <td width="75%" style="font-family: Times New Roman; font-size: 15px">
                                      <input type="text" name="salary" value="" size="7" />                                      
                                      &nbsp;&nbsp;&nbsp;&nbsp;
                                      Signing bonus  
                                      &nbsp;&nbsp;
                                      <input type="text" name="signbonus" value="" size="7" />
                                 </td>
                            </tr>
                            <tr height='35'>
                                <td width="10%" >
                                </td>
                                <td width="15%" style="font-family: Times New Roman; font-size: 15px">
                                     Stock options
                                </td>
                                <td weight='75%'>  
                                     <select name="stocks" style="width: 55px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                     </select>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    Yearly bonus
                                    &nbsp;&nbsp;
                                    <select name="yearendbonus" style="width: 50px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                  </td>
                            </tr>
                            <tr  height='35'>
                                <td width="10%" >
                                </td>
                                <td width="15%" style="font-family: Times New Roman; font-size: 15px">
                                    Pension
                                </td>
                                <td colspan='75#'  weight='40%'> 
                                    <select name="pension" style="width: 55px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    401(k)
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="fouronek" value="" size="3" /> % Matching
                                </td>
                            </tr>
                            <tr height='35'>
                                <td width="10%" >
                                </td>
                                <td width="15%" style="font-family: Times New Roman; font-size: 15px">
                                    Personal time off<font color="red">*</font>
                                </td>
                                <td colspan='75#'  weight='40%' > 
                                    <input type="text" name="pto" value="" size="3" />&nbsp;(weeks)
                                </td>
                            </tr>
                            <tr height='35'>
                                <td width="10%" >
                                </td>
                                <td width="15%" style="font-family: Times New Roman; font-size: 15px">
                                    Medical offered<font color="red">*</font>
                                </td>
                                <td colspan='75#'  weight='40%' > 
                                    <select name="medicaloffered" style="width: 55px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>                                   
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    Promotion Opportunity
                                    <select name="promotionopt" style="width: 55px; height: 25px">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr height='35'>                          
                                <td width="10%">
                                </td>
                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                    Relocating<font color="red">*</font>
                                </td>
                                <td colspan='79#'  weight='40%'> 
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
                            onclick="window.location.href='createoffers.php'"                          
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