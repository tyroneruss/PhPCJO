<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function display_offers($Offer, $max){
    
    if ($max == 2) {
        echo 
        '<tr style="background-color: white;">
            <td width="30%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>Category</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>' . $Offer[1]["Company"] . '</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>' . $Offer[2]["Company"] . '</b>
            </td>
        </tr>'; 
        echo
        '<tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Position</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Position"] . 
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Position"] .
           '</td>
        </tr>
        <tr style="background-color: white;">
            <td c width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Salary</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                . floor($Offer[1]["Salary"]/1000) .             
            ',000.00</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[2]["Salary"]/1000) .
           ',000.00</td>
        </tr>                       
        <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Signing Bonus</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                . floor($Offer[1]["Signbonus"]/1000) .             
            ',000.00</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[1]["Signbonus"]/1000) .             
            ',000.00</td>
        </tr>';
    }    
    return 
    
}