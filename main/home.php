
<!-- Header end from BasicPageHeader.tpl -->
<html>
    <head>
        <title>Compare Job Offers </title>
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
  
   <script>
        $(document).ready(function(){
            $(".tabbable").find(".tab").hide();
            $(".tabbable").find(".tab").first().show();
            $(".tabbable").find(".tabs li").first().find("a").addClass("active");
            $(".tabbable").find(".tabs").find("a").click(function(){
            tab = $(this).attr("href");
            $(".tabbable").find(".tab").hide();
            $(".tabbable").find(".tabs").find("a").removeClass("active");
            $(tab).show();
            $(this).addClass("active");
          return false;
          });
      });     
   </script>
    
<div align="center">
    <div class="tabbable">
        <ul class="tabs">
            <li class=""><a href="#tab-1"><b>Home</b></a></li>
            <li class=""><a href="#tab-2"><b>Create an Offer</b></a></li>
            <li class=""><a href="#tab-3"><b>Compare Offers</b></a></li>
            <li class=""><a href="#tab-4"><b>Evaluate Offer</b></a></li>
            <li class=""><a href="#tab-5"><b>View or Print Offer(s)</b></a></li>
        </ul>           

    <div id='tab-1' class="tab">  
            <h1 id="user_h1">Home Page</h1>
    </div>
        
    <div id='tab-2' class="tab">  
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
        $query   = "select * from profile Where UserID=1";             
        $result  = $mysqli->query($query);

        $row = $result->fetch_assoc();

        $employed = $row['Employed'];            

        $result->free();

        $query   = "select * from location ";             
        $result  = $mysqli->query($query);

   ?>
            <form action="./db/checkpage.php" method="POST">
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
                                    <h1 id="title_h1">Create Job Offer #1</h1>
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
                                                <select name="offertype" value="FT" style="width: 100px;  height: 25px">
                                                          <option value="FT" >Full time</option>
                                                          <option value="CNT" >Contract</option>
                                                </select> 
                                                &nbsp;&nbsp;&nbsp;&nbsp;
                                                Location<font color="red">*</font>
                                                <select name="citystateID" style="width: 130px; height: 25px" >
                                                    <option value="">--- Select one ---</option>
                                                   <?php while($row = mysqli_fetch_array($result)) { ?>
                                                    <option value="<?php echo $row['LocationID']; ?>"><?php echo $row['Name']; ?>  </option>
                                                    <?php } ?>
                                                </select>
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
                                            <td width="10%" style="font-family: Times New Roman; font-size: 14px">
                                            </td>
                                            <td width="20%" style="font-family: Times New Roman; font-size: 15px">
                                                Company<font color="red">*</font>
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
                                                      <option value="">--- Select one ---</option>
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
    </div>
            
    <div id='tab-3' class="tab">  
        Test page 3
    </div>

    <div id='tab-4' class="tab">  
        Test page 4
    </div>

    <div id='tab-5' class="tab">  
        Test page 5

    </div>
        
    </div>
</div>

</body>
</html>