<?php


$data = $_GET['data']; // set variable 'data' to input data from arduino
$t = time(); // set 't' variable to current time
$filename = "./data.csv"; // set 'filename" variable to csv file directory on webserver


file_put_contents($filename, ("\n" . $data . ";". (date("Y-m-d",$t)) . ";". date("h:i:sa") . ";"), FILE_APPEND); // write a string stored in 'data' variable to the data.csv file with a timestamp



?>
