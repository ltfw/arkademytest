<?php

$date_from = "2019-11-01";   
$date_from = strtotime($date_from); // Convert date to a UNIX timestamp  
  
// Specify the end date. This date can be any English textual format  
$date_to = "2019-11-05";  
$date_to = strtotime($date_to); // Convert date to a UNIX timestamp  
  
// Loop from the start date to end date and output all dates inbetween  
for ($i=$date_from; $i<=$date_to; $i+=86400) {  
    echo date("Y-m-d", $i).' ';  
} 