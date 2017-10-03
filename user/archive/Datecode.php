<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  $date = '10/3/2017';
  $date = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
  
  echo 'Convert Date: ' . $date;
