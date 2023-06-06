<?php
//$servername = "bho.mysql.database.azure.com";
//$username = "bhodi";
//$password = "Treebangbang*007";
//$dbname = "pos_system";

// Create connection
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "CA.pem", NULL, NULL);
mysqli_real_connect($conn, "bho.mysql.database.azure.com", "bhodi", "Treebangbang*007", "pos_system}", 3306, MYSQLI_CLIENT_SSL);


//$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
