<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Home - CJO</title>
    <meta name="description" content="Compare Jobs Offers" />
    <link rel="stylesheet" type="text/css" href="../css_tm/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
    
<body>
<!-- Header start from basicPageHeader.tpl -->



<table border="0" width='1200' align='left' style="background-color: #990000">
<div id="container">
    <div id="intro">
        <div id="pageHeader">
                <div id="sitename">
                    <h1>&nbsp;&nbsp;CompareJobOffers</h1>
                </div>
        </div>
    </div>
</div>
</table>

<!-- Header end from BasicPageHeader.tpl -->
<table border="0" width='1200' style="background-color: white">
    <tr>
        <td  width="300" align="top" align="left">
        </td>
        <td height="30" align="center" width="1000" 
            style="font-family: Times New Roman; color: darkblue; font-size: 22px;">
             &nbsp;&nbsp;
            <a href="" >Home&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Compare Offers&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="" >Convert offers&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >About&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Contact Us
        </td>
    </tr>  
</table>

<?php
    $_SESSION['userID']=1000;
    
    echo "Successfully created offer.";
    

?>

  </body>
</html>
