 
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
            style="font-family: Times New Roman; color: #990000; font-size: 22px;">
             &nbsp;&nbsp;
            <a href="" >Home&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Compare Offers&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="" >Convert offers&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >About&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" >Contact Us
        </td>
    </tr>  
</table>

<table width='500' border="1">
        <tr>
        <td>                   
            <?php
                $x = 0;               
                $handle = fopen("data/CostofLiving.csv", "r");
                // Load cost of living data
                if ($handle) {
                    while (($line = fgets($handle)) !== false) {
                        $list = explode(",", $line);
                        $city       = $list[0];
                        $state      = $list[1];
                        $ColIndex   = $list[2];
                        $Grocery    = $list[3];
                        $Housing    = $list[4];
                        $Utilities  = $list[5];
                        $Transport  = $list[6];                
                        $HealthCare = $list[7];
                        $MiscGoodServices  = $list[7];
                        echo '<tr>';
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($city) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($state) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($ColIndex) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($Grocery) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($Housing) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($Utilities) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($Transport) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($HealthCare) . '</td>';            
                            echo '<td  style="font-family: Times New Roman; font-size: 18px">' . ($MiscGoodServices) . '</td>';            
                        echo '</tr>';            
                        // process the line read.
                     }
                          // Total the number of reoords found
                     fclose($handle);
                 } else {
             // error opening the file.
                 }    
           ?>                 
    </table>
