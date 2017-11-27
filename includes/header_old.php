<!-- Header end from BasicPageHeader.tpl -->
<html>
    <head>
        <title>Compare Job Offers </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="Compare Jobs Offers" />
        <link rel="stylesheet" type="text/css" href="../css/style.css">
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

    <table border="0" width='1200' style="background-color: white">
       <tr>
           <td  width="300" align="top" align="left">
           </td>
           <td height="30" align="center" width="1000" 
               style="font-family: Times New Roman; color: #990000; font-size: 22px;">
                &nbsp;&nbsp;
                <a href="../main/home.php" >Home&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="../offer/createoffer.php" >Compare Offers&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="" >Convert offers&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="" >About&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <a href="" >Contact Us</a>
           </td>
       </tr>  
    </table>
    
    <?php
        require_once('database.php');
        $db = db_connect();
    ?>



            