<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Calculcate weighted values from offer information
function evaluateoffer($offer_array) {

    $salary = 0.00;
    
    $basesalary = $offer_array['Salary'];
    $salary     = $basesalary;
    
    // echo 'Salary: ' . $basesalary . '<br>';
    
    $bonus = $offer_array['Signbonus']/4;
    // echo 'Signbonus: ' . $bonus . '<br>';
    $salary = $salary + $bonus;
    
    if($offer_array['Yearendbonus'] == 'Yes') {      
        $Yearendbonus = (0.1 * $basesalary);
        // echo 'Yearendbonus: ' . $Yearendbonus . '<br>';
        $salary = $salary + $Yearendbonus;   
    }
    
    $sal_401k = $basesalary * ($offer_array['401k']/100);
    // echo '401k: ' . $sal_401k . '<br>';   
    $salary = $salary + $sal_401k;
    
    $pto_value = ($sal_401k/52) * $offer_array['Pto'];
    
    $ptovalue = ($basesalary/52) * $offer_array['Pto'];
    // echo 'Pto: ' . $ptovalue . '<br>';    
    $salary = $salary + $ptovalue;
       
    if($offer_array['Stocks'] == 'Yes') {
        $stocks = (0.035 * $basesalary)/4;
        // echo 'Stocks: ' . $stocks . '<br>';
        $salary = $salary + $stocks;          
    }
    
    $WeightedValue = floor(($salary)/1000);
    // echo $WeightedValue . '<br>';  
    
    if($offer_array['PromotionOpt'] == 'Yes') {
       $WeightedValue += 5;
    }
    
    if($offer_array['Pension'] == 'Yes') {
       $WeightedValue += 10;
    }
    
    if($offer_array['Medicaloffered'] == 'Yes') {
       $WeightedValue += 5;
    }
    
    if($offer_array['PaidRelocate'] == 'Yes') {
       $WeightedValue += 4;
    }  
    
    return  (string)$WeightedValue;
}

function display_offers($Offer,$weighted_value,$max){
    
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
        </tr> 
        <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Location</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["City"] . "," .$Offer[1]["State"] .
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["City"] . "," .$Offer[2]["State"] .
           '</td>
        </tr>
        <tr style="background-color: white;">
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
                <b>Signing bonus</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                . floor($Offer[1]["Signbonus"]/1000) .             
            ',000.00</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[2]["Signbonus"]/1000) .             
            ',000.00</td>
        </tr>
        <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Year end bonus</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Yearendbonus"] .             
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Yearendbonus"] .             
            '</td>
         </tr>
          <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Personal time off</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Pto"] .             
            ' weeks</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Pto"] .             
            ' weeks</td>
        </tr>
        <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Stock options</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Stocks"] .             
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Stocks"] .             
            '</td>
         <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>401k %-Matching</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["401k"] .             
            '%</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["401k"] .             
            '%</td>
         </tr>
         <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Pension</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Pension"] .             
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Pension"] .             
            '</td>
        </tr>
         <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Medical offered</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Medicaloffered"] .             
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Medicaloffered"] .             
            '</td>
        </tr>
         <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Promotion Opport.</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["PromotionOpt"] .             
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["PromotionOpt"] .             
            '</td>
        </tr>
         <tr style="background-color: white;">
            <td  width="30%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>COL affect</b>
            </td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["PromotionOpt"] .             
            '</td>
            <td  width="40%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["PromotionOpt"] .             
            '</td>
        </tr>
         <tr style="background-color: lightgrey;">
            <td  width="30%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Weighted Value</b>
            </td>
            <td  width="40%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>'
                . $weighted_value[1] .             
            '</b></td>
            <td  width="40%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>' 
                . $weighted_value[2] .             
            '</b></td>
        </tr>';      
    }
    elseif($max == 3) {
        echo 
        '<tr style="background-color: white;">
            <td width="22%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>Category</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>' . $Offer[1]["Company"] . '</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>' . $Offer[2]["Company"] . '</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: #660000; font-family: Times New Roman; font-size: 18px">
                <b>' . $Offer[3]["Company"] . '</b>
            </td>
        </tr> 
        <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Location</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["City"] . "," .$Offer[1]["State"] .
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["City"] . "," .$Offer[2]["State"] .
           '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["City"] . "," .$Offer[3]["State"] .
           '</td>
        </tr>
        <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Position</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Position"] . 
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Position"] .
           '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Position"] .
           '</td>
        </tr>
        <tr style="background-color: white;">
            <td c width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Salary</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                . floor($Offer[1]["Salary"]/1000) .             
            ',000.00</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[2]["Salary"]/1000) .
           ',000.00</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[3]["Salary"]/1000) .
           ',000.00</td>
        </tr>                       
        <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Signing bonus</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$'
                . floor($Offer[1]["Signbonus"]/1000) .             
            ',000.00</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[2]["Signbonus"]/1000) .             
            ',000.00</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">$' 
                . floor($Offer[3]["Signbonus"]/1000) .             
            ',000.00</td>
        </tr>
        <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Year end bonus</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Yearendbonus"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Yearendbonus"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["Yearendbonus"] .             
            '</td>
         </tr>
          <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Personal time off</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Pto"] .             
            ' weeks</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Pto"] .             
            ' weeks</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Pto"] .             
            ' weeks</td>
        </tr>
        <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Stock options</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Stocks"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Stocks"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["Stocks"] .             
            '</td>
         <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>401k %-Matching</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["401k"] .             
            '%</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["401k"] .             
            '%</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["401k"] .             
            '%</td>
         </tr>
         <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Pension</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Pension"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Pension"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["Pension"] .             
            '</td>
        </tr>
         <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Medical offered</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["Medicaloffered"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["Medicaloffered"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["Medicaloffered"] .             
            '</td>
        </tr>
         <tr style="background-color: white;">
            <td  width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Promotion Opport.</b>
            </td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">'
                . $Offer[1]["PromotionOpt"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[2]["PromotionOpt"] .             
            '</td>
            <td  width="26%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">' 
                . $Offer[3]["PromotionOpt"] .             
            '</td>
        </tr>
         <tr style="background-color: lightgrey;">
            <td  width="22%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <b>Weighted Value</b>
            </td>
            <td  width="26%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>'
                . $weighted_value[1] .             
            '</b></td>
            <td  width="26%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>' 
                . $weighted_value[2] .             
            '</b></td>
            <td  width="26%" align="left" height="35" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px"><b>' 
                . $weighted_value[3] .             
            '</b></td>
        </tr>';
    }  
    else {
        echo 
         '<tr style="background-color: white;">
            <td  colspan="3" width="22%" align="left" height="30" valign="center" style="color: black; font-family: Times New Roman; font-size: 18px">
                <font color="red"></font>
            </td>
        </tr>';
    }    
}               
    