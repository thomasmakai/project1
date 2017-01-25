<?php

$data = $_GET['data']; // set variable 'data' to input data from arduino
date_default_timezone_set("Europe/Copenhagen"); // set timezone to UTC+1
$t = time(); // set 't' variable to current time
$filename = "./data.csv"; // set 'filename" variable to csv file directory on webserver


file_put_contents($filename, ("\n" . $data . ";". (date("Y-m-d",$t)) . ";". date("h:i:sa") . ";"), FILE_APPEND); // write a string stored in 'data' variable to the data.csv file with a timestamp



?>
