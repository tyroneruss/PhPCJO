<?php

function money_format($format, $number) 
{ 
    $regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'. 
              '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/'; 
    if (setlocale(LC_MONETARY, 0) == 'C') { 
        setlocale(LC_MONETARY, ''); 
    } 
    $locale = localeconv(); 
    preg_match_all($regex, $format, $matches, PREG_SET_ORDER); 
    foreach ($matches as $fmatch) { 
        $value = floatval($number); 
        $flags = array( 
            'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ? 
                           $match[1] : ' ', 
            'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0, 
            'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ? 
                           $match[0] : '+', 
            'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0, 
            'isleft'    => preg_match('/\-/', $fmatch[1]) > 0 
        ); 
        $width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0; 
        $left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0; 
        $right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits']; 
        $conversion = $fmatch[5]; 

        $positive = true; 
        if ($value < 0) { 
            $positive = false; 
            $value  *= -1; 
        } 
        $letter = $positive ? 'p' : 'n'; 

        $prefix = $suffix = $cprefix = $csuffix = $signal = ''; 

        $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign']; 
        switch (true) { 
            case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+': 
                $prefix = $signal; 
                break; 
            case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+': 
                $suffix = $signal; 
                break; 
            case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+': 
                $cprefix = $signal; 
                break; 
            case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+': 
                $csuffix = $signal; 
                break; 
            case $flags['usesignal'] == '(': 
            case $locale["{$letter}_sign_posn"] == 0: 
                $prefix = '('; 
                $suffix = ')'; 
                break; 
        } 
        if (!$flags['nosimbol']) { 
            $currency = $cprefix . 
                        ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) . 
                        $csuffix; 
        } else { 
            $currency = ''; 
        } 
        $space  = $locale["{$letter}_sep_by_space"] ? ' ' : ''; 

        $value = number_format($value, $right, $locale['mon_decimal_point'], 
                 $flags['nogroup'] ? '' : $locale['mon_thousands_sep']); 
        $value = @explode($locale['mon_decimal_point'], $value); 

        $n = strlen($prefix) + strlen($currency) + strlen($value[0]); 
        if ($left > 0 && $left > $n) { 
            $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0]; 
        } 
        $value = implode($locale['mon_decimal_point'], $value); 
        if ($locale["{$letter}_cs_precedes"]) { 
            $value = $prefix . $currency . $space . $value . $suffix; 
        } else { 
            $value = $prefix . $value . $space . $currency . $suffix; 
        } 
        if ($width > 0) { 
            $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ? 
                     STR_PAD_RIGHT : STR_PAD_LEFT); 
        } 

        $format = str_replace($fmatch[0], $value, $format); 
    } 
    return $format; 
} 
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

function figureValue($principal,$rate,$years){

    $futureValue = round($principal * pow(1 + ($rate/100), $years), 2);
    return $futureValue;
}


   /* TVM functions solve for a term in the following formula:
    *   pv(1+r)^n + pmt(1+r.type)((1+r)^n - 1)/r) +fv = 0
    *
    *
    * @param float      Interest rate per period 
    * @param int        Number of periods
    * @param float      Periodic payment (annuity)
    * @param float      Future Value
    * @param int        Payment type:
                            FINANCE_PAY_END (default):    at the end of each period
                            FINANCE_PAY_BEGIN:            at the beginning of each period
    * @return float     
    * @static
    * @access public
    */
    function presentValue($pmt)
    {
        $rate = 0.06;
        $nper = 60;
        $fv   = 0;
        
        $pv = (-$pmt * (1 + $rate * $type) * ((pow(1 + $rate, $nper) - 1) / $rate) - $fv) / pow(1 + $rate, $nper);

        return $pv;
    }
    
function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}


?>
