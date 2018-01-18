<?php

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
