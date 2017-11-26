
<html>
    <head>
        <title>CJO </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/tabstyle.css">
        <link rel="stylesheet" type="text/css" href="../css/userstyle.css">
    </head>
   
<body>

<div id="container">
   <div id="intro">
       <div id="pageHeader">
               <div id="sitename">
                   <h1>&nbsp;&nbsp;CompareJobOffers</h1>
               </div>          
       </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<?php

    require_once('../includes/database.php');  

    session_start();

    $_SESSION['offer_count'] = 1;

    $mysqli = db_connect();

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 

    // $user_id = $_SESSION["userID"];
    $query   = "select * from profile Where UserID=2";             
    $result  = $mysqli->query($query);

    $row = $result->fetch_assoc();

    // $employed = $row['Employed'];  
    $employed = 'Yes';  
    
    if ($employed == 'No') {       
        header('Location: employed.php'); 
    }
?>
  
<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li><a href="home.php" 
                   style="background-color: #f2f2f2; color: black" >
                    <b>Home</b>
                </a>
            </li>
            <li><a class="active" ><b>Create Job Offers</b></a></li>
            <li><a href="./compareoffers.php"><b>Compare Job Offers</b></a></li>
            <li><a href="./evaloffer.php"><b>Evaluate an Offer</b></a></li>
            <li><a href="./convertoffers.php"><b>Convert to Hourly Wages</b></a></li>
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
                        <?php                            
                            if ($employed == 'Yes'){
                                echo '<h1 id="title_h1">Enter Job offer Info</h1>';
                              } else {
                                echo '<h1 id="title_h1">Enter current Job Info</h1>';                                     
                              }
                        ?>
                        <form action="./createoffers_1.php" method="POST" >
                        <table border="0" width="600" style="background-color: white">
                            <tr >
                              <td colspan="3" height="20">
                              </td>
                            </tr>                             
                            <tr height="30">
                                <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                </td>
                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                    Company<font color="red">*</font>
                                </td>
                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                   <input type="text" name="company" value="" size="41" />
                                </td>
                            </tr>
                            <tr height="30">
                                <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                </td>
                                <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                    Job Position<font color="red">*</font>
                                </td>
                                <td width="70%" style="font-family: Times New Roman; font-size: 15px">
                                   <input type="text" name="position" value="" size="41" />
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
                                          <option value="">--- Choose ---</option>
                                          <option>Telecommunications</option>
                                          <option>Universities and Academy</option>
                                          <option>Technology Companies</option>
                                          <option>Health IT</option>
                                          <option>Management & Project Management</option>
                                          <option>Mobile Development</option>
                                          <option>Network/System Design & Administration</option>
                                          <option>Programming/Software Engineering</option>
                                          <option>Security</option>
                                  </select>
                                </td>
                            </tr>
                            <tr height="20">
                                <td colspan="3" >
                                </td>
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr>
                     <td colspan='2' height="40" align="center" valign="top" 
                       style="font-family: Times New Roman; font-size: 20px;" >
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