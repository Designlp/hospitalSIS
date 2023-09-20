<?php
define('DB_SERVER','localhost');
define('DB_USER','u583014169_HospitalSIS');
define('DB_PASS' ,'gtaV19921963');
define('DB_NAME', 'u583014169_HospitalSIS');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>