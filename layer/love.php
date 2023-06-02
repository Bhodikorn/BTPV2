<?php
// D:\BPT\layer\log-sqli.php
date_default_timezone_set('Asia/Bangkok');
function love($string) {
    //$log_file = 'D:\BPT\layer\myapp.log';
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');
    //$message = "$timestamp | IP: $ip_address | Message: $input_string | SQL Injection detected\n";
    
    $handle = fopen('D:\BPT\layer\lovee.log', 'a');
    fwrite($handle,"$timestamp | IP: $ip_address | Message: $string | SQL Injection detected\n");
    fclose($handle);
}
/*
function log_sqli($string)
{   
    date_default_timezone_set('Asia/Bangkok');
    // Get the IP address of the injector
    //$ip = $_SERVER['REMOTE_ADDR'];
    
    $logFile = 'D:\BPT\layer\myapp.log';
    //$date = date('Y-m-d H:i:s');
    
    // Write the log to file
    $log = fopen('D:\BPT\layer\myapp.log', 'a');

    fwrite($log, "$date | IP: $ip | Message: $string |SQL Injection detected\n");
    //fwrite($log,"$string\n");
    fclose($log);
}
*/
?>