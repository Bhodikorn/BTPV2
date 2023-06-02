    
    <?php
    
    function else_sqli($string)
    {   
    // Get the IP address of the injector
    //$ip = $_SERVER['REMOTE_ADDR'];
    
    $logFile = 'D:\BPT\layer\else.log';
    //$date = date('Y-m-d H:i:s');
    
    // Write the log to file
    $log = fopen('D:\BPT\layer\else.log', 'a');

    //fwrite($log, "$date | IP: $ip | Message: $string |SQL Injection detected\n");
    fwrite($log,"$string\n");
    fclose($log);
    
    }
    
    ?>